<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập chức vụ</title>
</head>
<body>
    <h1>Nhập tên chức vụ</h1>
    <form action="" method="post">
        Mã chức vụ : <input type="number" name="ma_chuc_vu"> <br>
        Tên chức vụ : <input type="text" name="ten_chuc_vu"> <br>
        <input type="submit" name="Gửi" id="">
     </form>
     <?php
       require './connect.php';
        $ma_chuc_vu = $_POST['ma_chuc_vu'];
        $ten_chuc_vu = $_POST['ten_chuc_vu'];
        $sql = "INSERT INTO chuc_vu( ma_chuc_vu, ten_chuc_vu)
        VALUES('$ma_chuc_vu  ','$ten_chuc_vu')";
        if ($conn->query($sql) === TRUE) {
        echo "Bạn đã thêm thành công";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        };
        $conn->close();
     ?>
</body>
</html>