<div class="main">
<div class="row">
    <div class="row frm_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frm_content">
        <div class="row mb10 frm_dm">
            <table>
                <tr>
                    <th>ID</th>
                    <th>TÊN TAI KHOAN</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>VAI TRÒ</th>
                    <th>NGAY THEM</th>
                    <th>NGAY CAP NHAT</th>
                </tr>
                <?php
                foreach ($list_taikhoan as $taikhoan) {
                    extract($taikhoan);
                    echo
                    '<tr>
                        <td>' . $id . '</td>
                        <td>' . $username . '</td>
                        <td>' . $password_hash . '</td>
                        <td>' . $email . '</td>
                        <td>' . $role . '</td>
                        <td>' . $created_at . '</td>
                        <td>' . $updated_at . '</td>';
                ?>
                    <td> <a onclick="return confirm('Bạn có muốn xóa ko')" href="<?php echo $delete_tk ?>"><i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <!-- <div class="row mb10">
            <input type="button" name="" id="" value="Chọn tất cả">
            <input type="button" name="" id="" value="Bỏ chọn tất cả">
            <input type="button" name="" id="" value="Xóa các mục đã chọn">
            <a href="#"><input type="button" name="" id="" value="Nhập Thêm"></a>
        </div> -->
    </div>
</div>
</div>