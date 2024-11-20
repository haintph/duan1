<?php
class Product extends BaseModel
{
    /**
     * Trong bảng products có thuộc tinh status
     * giá trị 0 : Ngừng kinh doanh
     * Giá trị 1 : Đang kinh doanh
     */

    //Lấy ra tất cả các bản ghi
    public function all()
    {
        $sql = "SELECT p.*, c.category_name FROM products p JOIN categories c ON p.category_id = c.id";
        //Chuẩn bị thực thi
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Trả về dữ liệu lấy được
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm mới sản phẩm 
    public function create($data)
    {
        $sql = "INSERT INTO products(name, image, price, quantity, description, status, category_id) 
        VALUES(:name, :image, :price, :quantity, :description, :status, :category_id)";
        //Chuẩn bị thực thi
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute($data);
    }
    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=:name, image=:image, price=:price, quantity=:quantity, description=:description, status=:status, category_id=:category_id WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }
    /**
     * function delete: xóa bản ghi
     * @id: mã sản phẩm cần xóa
     */
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    /**
     * function find: lấy ra 1 bản ghi theo id
     * @id: mã sản phẩm cần tìm
     */
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
