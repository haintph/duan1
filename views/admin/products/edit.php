<?php
include_once ROOT_DIR . "views/admin/header.php";
?>

<div class="app-main__inner">
    <h1>FORM EDIT PRODUCT</h1>
    <form action="<?= ADMIN_URL . '?ctl=update_product&id=' . $product['id'] ?>" method="post" enctype="multipart/form-data">
        
        <!-- Tên sản phẩm -->
        <div class="mb-3">
            <label for="product_name">Tên sản phẩm</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product['name'] ?>">
        </div>

        <!-- Danh mục -->
        <div class="mb-3">
            <label for="category_id">Danh mục</label>
            <select name="category_id" id="category_id" class="form-control">
                <?php foreach ($categories as $cate): ?>
                    <option value="<?= $cate['id'] ?>" <?= $cate['id'] == $product['category_id'] ? 'selected' : '' ?>><?= $cate['category_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Hình ảnh -->
        <div class="mb-3">
            <label for="img_product">Hình ảnh</label>
            <input type="file" name="img_product" id="img_product" class="form-control">
            <?php if ($product['image']): ?>
                <img src="<?= $product['image'] ?>" alt="Current Product Image" style="height: 100px;">
            <?php endif; ?>
        </div>

        <!-- Giá -->
        <div class="mb-3">
            <label for="price">Giá</label>
            <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>">
        </div>

        <!-- Số lượng -->
        <div class="mb-3">
            <label for="quantity">Số lượng</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>">
        </div>

        <!-- Trạng thái -->
        <div class="mb-3">
            <label for="status">Trạng thái</label><br>
            <input type="radio" name="status" value="1" <?= $product['status'] == 1 ? 'checked' : '' ?>> Đang kinh doanh
            <input type="radio" name="status" value="0" <?= $product['status'] == 0 ? 'checked' : '' ?>> Ngừng kinh doanh
        </div>

        <!-- Mô tả -->
        <div class="mb-3">
            <label for="description">Mô tả</label>
            <textarea name="description" class="form-control" rows="6" id="description"><?= $product['description'] ?></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>

<?php
include_once ROOT_DIR . "views/admin/footer.php";
?>
