<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <link rel="stylesheet" href="./style-table.css">
</head>
<body>
<?php require './connect.php' ?>
      <table>
      <caption> <b>Thông tin sinh viên</b></caption>
        <tr>
            <th>Mã nhân viên</th>
            <th>Tên nhân viên</th>
            <th>Tuổi</th>
            <th>Giới tính</th>
            <th>Chức vụ</th>
            <th>Loại công việc</th>
            <th>Chức năng</th>
        </tr>
        <?php
       mysqli_set_charset($conn,'UTF-8');
       $sql = "SELECT `ma_nhan_vien`, `ten_nhan_vien`, `tuoi`, `gioi_tinh`, `ten_chuc_vu`, `ten_cong_viec` FROM `nhan_vien` 
       INNER JOIN chuc_vu ON chuc_vu.ma_chuc_vu = nhan_vien.ma_chuc_vu 
       INNER JOIN loai_cong_viec ON loai_cong_viec.ma_cong_viec = nhan_vien.ma_cong_viec ";
        $result= $conn->query($sql);
        if($result-> num_rows>0){
            for($i=0;$i<$result ->num_rows;$i++){
                $row = $result->fetch_assoc();
                echo "<tr>";
                echo  
                    "<td>" .$row['ma_nhan_vien']."</td>".
                    "<td>" .$row['ten_nhan_vien']."</td>".
                    "<td>" .$row['tuoi'] ."</td>".
                    "<td>" .$row['gioi_tinh'] ."</td>".
                    "<td>" .$row['ten_chuc_vu'] ."</td>".
                    "<td>" .$row['ten_cong_viec'] ."</td>".
                    "<td class='table_sinh-vien'>" .
                       '<a class="update" href="http://localhost/php/web_phong-kham/form_update.php?ma_nhan_vien='.$row['ma_nhan_vien']. '">Sửa</a>'.
                       '<a class="delete" href="http://localhost/php/web_phong-kham/delete_nhan-vien.php?ma_nhan_vien='.$row['ma_nhan_vien']. '">Xóa</a>'.
                    "</td>";
                 echo   "</tr>";
                }
            }else{
                echo "No  in database";
            }  
            ?>
      </table>
</body>
</html>