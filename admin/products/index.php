<div class="main">
    <div class="row">
        <div class="row frm_title">
            <h1>DANH SÁCH SẢN PHẦM</h1>
        </div>
        <div class="row frm_content">
            <div class="row mb10 frm_dm">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>TÊN SẢN PHẦM</th>
                        <th>ẢNH</th>
                        <th>MÔ TẢ</th>
                        <th>BRAND</th>
                        <th>NGAY THEM</th>
                        <th>NGAY CAP NHAT</th>
                    </tr>
                    <?php
                    foreach ($products as $val) {
                        extract($val);
                        echo
                        '<tr>
                        <td>' . $id . '</td>
                        <td>' . $product_name . '</td>
                        <td>' . $img_product . '</td>
                        <td>' . $description . '</td>
                        <td>' . $brand . '</td>
                        <td>' . $created_at . '</td>
                        <td>' . $updated_at . '</td>';
                    ?>
                        <td> <a onclick="return confirm('Bạn có muốn xóa ko')" href="<?php echo $delete_tk ?>"><i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
