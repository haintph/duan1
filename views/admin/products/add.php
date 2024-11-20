<?php
include_once ROOT_DIR . "views/admin/header.php"
?>
<div class="app-main__inner">
    <h1>FORM ADD PRODUCT</h1>
    <form action="<?= ADMIN_URL . '?ctl=storesp' ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Ten san pham</label>
            <input type="text" name="product_name" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Danh muc</label>
            <select name="category_id" id="" class="form-control">
                <?php foreach ($categories as $cate): ?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['category_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="">Hinh anh</label>
            <input type="file" name="img_product" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Gia</label>
            <input type="number" name="brand" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">So luong</label>
            <input type="number" name="quantity" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Trang thai</label><br>
            <input type="radio" name="status" id="" value="1" checked>Dang kinh doanh
            <input type="radio" name="status" id="" value="0">Ngung kinh doanh
        </div>

        <div class="mb-3">
            <label for="">Mo ta</label>
            <textarea name="description" class="form-control" rows="6" id=""></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
        </div>
    </form>
</div>

<?php
include_once ROOT_DIR . "views/admin/footer.php"
?>