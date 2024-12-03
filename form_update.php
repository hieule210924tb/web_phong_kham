<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật dữ liệu</title>
</head>
<body>
    <?php
        require './connect.php';
            $ma_nhan_vien = $_GET['ma_nhan_vien'];
            $sql = "SELECT * FROM nhan_vien WHERE ma_nhan_vien='$ma_nhan_vien'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
    ?>
   <h1>Sửa dữ liệu nhân viên</h1>
   <form action="./update.php" method="post">
        <input type="hidden" value="<?php echo $row['ma_nhan_vien']; ?>" name="ma_nhan_vien">
        Tên <input type="text" value="<?php echo $row['ten_nhan_vien']; ?>" name="ten_nhan_vien"><br>
        Tuổi <input type="text" value="<?php echo $row['tuoi']; ?>" name="tuoi"><br>
        Giới tính:
            <input type="radio" name="gioi_tinh" value="Nam" <?php echo ($row['gioi_tinh'] == 'Nam') ? 'checked' : ''; ?>> Nam
            <input type="radio" name="gioi_tinh" value="Nữ" <?php echo ($row['gioi_tinh'] == 'Nữ') ? 'checked' : ''; ?>> Nữ
        <br>
        Chức vụ: <select name="ten_chuc_vu">
            <?php
                $sql = "SELECT * FROM chuc_vu";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  for($i = 0; $i < $result->num_rows; $i++) {
                       $row = $result->fetch_assoc();
                       $ma_chuc_vu = $row['ma_chuc_vu'];
                       $ten_chuc_vu=$row['ten_chuc_vu'];
                        echo  "<option value='$ma_chuc_vu'>$ten_chuc_vu</option>";
                    }
                }
            ?>
        </select> <br>
        Loại công việc: <select name="ten_cong_viec">
            <?php
                $sql = "SELECT * FROM loai_cong_viec";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  for($i = 0; $i < $result->num_rows; $i++) {
                    $row = $result->fetch_assoc();
                    $ma_cong_viec = $row['ma_cong_viec'];
                    $ten_cong_viec=$row['ten_cong_viec'];
                     echo  "<option value='$ma_cong_viec'> $ten_cong_viec</option>";
                    }
                }
            ?>
        </select> <br>
        <input type="submit" value="Sửa">
    </form>
</body>
</html>