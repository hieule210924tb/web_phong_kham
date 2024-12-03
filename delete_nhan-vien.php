<?php
   require './connect.php';
   mysqli_set_charset($conn, 'UTF8');
   $ma_nhan_vien = $_GET['ma_nhan_vien'];
   $sql = "DELETE FROM nhan_vien WHERE ma_nhan_vien='$ma_nhan_vien'";

   if($conn->query($sql)){
      echo "Bạn đã xóa";
   } else{
    echo "Error" .$sql ."<br>" .$conn->errno;
   };
   header("location:table-nhan_vien.php")
?>
