<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin nhân viên</title>
</head>
<body>
    <h1>Nhập thông tin nhân viên</h1>
    <form action="" method="post">
        Mã nhân viên: <input type="number" name="ma_nhan_vien"> <br>
        Tên nhân viên: <input type="text" name="ten_nhan_vien"> <br>
        Tuổi: <input type="number" name="tuoi"> <br>
        Giới tính:  <input type="radio" name="gioi_tinh" value="Nam">Nam</input>
                     <input type="radio" name="gioi_tinh" value="Nữ">Nữ</input> <br>
         Chức vụ <select name="ma_chuc_vu" >
        <?php
           require './connect.php';
           $sql= "SELECT * FROM chuc_vu ";
           $result = $conn->query($sql);
           if($result->num_rows > 0){
            for($i = 0; $i < $result->num_rows; $i++){
                $row = $result->fetch_assoc();
                $ma_chuc_vu = $row['ma_chuc_vu'];
                $ten_chuc_vu=$row['ten_chuc_vu'];
                echo   "<option value='$ma_chuc_vu'>$ten_chuc_vu</option>";
            }
        } else {
            echo "No chuc vu in database";
        }
                 
        ?>            
        </select> <br>
        Loại công việc <select name="ma_cong_viec" >
        <?php
           require './connect.php';
           $sql= "SELECT * FROM loai_cong_viec ";
           $result = $conn->query($sql);
           if($result->num_rows > 0){
            for($i = 0; $i < $result->num_rows; $i++){
                $row = $result->fetch_assoc();
                $ma_cong_viec = $row['ma_cong_viec'];
                $ten_cong_viec=$row['ten_cong_viec'];
                echo   "<option value='$ma_cong_viec'>$ten_cong_viec</option>";
            }
        } else {
            echo "No cong viec in database";
        }
                 
        ?>            
        </select>
        <input type="submit" value="Thêm">
    </form>
    <?php
    require './connect.php';
    $ma_nhan_vien = $_POST['ma_nhan_vien'];
    $ten_nhan_vien =$_POST['ten_nhan_vien'];
    $tuoi= $_POST['tuoi'];
    $gioi_tinh= $_POST['gioi_tinh'];
    $ma_chuc_vu= $_POST['ma_chuc_vu'];
    $ma_cong_viec= $_POST['ma_cong_viec'];
    $sql = "INSERT INTO nhan_vien(ma_nhan_vien,ten_nhan_vien,tuoi,gioi_tinh,ma_chuc_vu,ma_cong_viec)
    VALUES('$ma_nhan_vien ','$ten_nhan_vien','$tuoi','$gioi_tinh',' $ma_chuc_vu',' $ma_cong_viec')";
    if ($conn->query($sql) === TRUE) {
    echo "Bạn đã thêm thành công";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    };
    $conn->close();
    ?>

</body>
</html>