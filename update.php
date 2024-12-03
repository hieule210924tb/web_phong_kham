<?php
    require './connect.php';
        $ma_nhan_vien = $_POST['ma_nhan_vien'];
        $ten_nhan_vien = $_POST['ten_nhan_vien'];
        $tuoi = $_POST['tuoi'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $ten_chuc_vu = $_POST['ten_chuc_vu'];
        $ten_cong_viec = $_POST['ten_cong_viec'];
    
        $sql = "UPDATE nhan_vien SET ten_nhan_vien='$ten_nhan_vien', tuoi='$tuoi', gioi_tinh='$gioi_tinh', ma_chuc_vu='$ten_chuc_vu', ma_cong_viec='$ten_cong_viec'
                WHERE ma_nhan_vien='$ma_nhan_vien'";
        if($conn->query($sql)){
            echo "Cập nhật thành công";
        }else{
            echo "Lỗi" . $conn->errno;
        }
        header("location:table-nhan_vien.php")
?>