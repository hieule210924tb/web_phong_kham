<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập công việc</title>
</head>
<body>
    <h1>Nhập thông tin công việc</h1>
    <form action="" method="post">
        Mã công việc: <input type="number" name="ma_cong_viec"> <br>
        Tên công việc : <input type="text" name="ten_cong_viec"> <br>
        <input type="submit" name="Gửi" id="">
     </form>
     <?php
       require './connect.php';
        $ma_cong_viec = $_POST['ma_cong_viec'];
        $ten_cong_viec = $_POST['ten_cong_viec'];
        $sql = "INSERT INTO loai_cong_viec( ma_cong_viec, ten_cong_viec)
        VALUES('$ma_cong_viec  ','$ten_cong_viec')";
        if ($conn->query($sql) === TRUE) {
        echo "Bạn đã thêm thành công";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        };
        $conn->close();
     ?>
</body>
</html>