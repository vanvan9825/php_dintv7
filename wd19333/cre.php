<?php
require_once("connect.php");

// Kiểm tra xem người dùng có submit hay không
if (isset($_POST["create"])) {
    // Lấy toàn bộ dữ liệu ở form
    $name = $_POST["ho_ten"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $status = $_POST["status"];

    // echo $name, $email, $phone, $trang_thai;
    // Tạo 1 mảng chứa lỗi
    $error = [];

    if (empty($name)) {
        $error["ho_ten"] = "Bạn cần điền họ tên";
    }
    if (empty($email)) {
        $error["email"] = "Bạn cần điền email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // filter_var(): sử dụng những validate có sẵn của PHP
        // Nếu dúng định dạng nó sẽ trả về TRUE
        // Nếu sai nó sẽ trả về FALSE
        $error["email"] = "Email sai định dạng";
    }

    $regex_phone = '/^(0|\+84)(3[2-9]|5[2689]|7[06-9]|8[1-689]|9[0-46-9])\d{7}$/';
    if (empty($phone)) {
        $error["ho_ten"] = "Bạn cần điền số điện thoại";
    }else if (!preg_match($regex_phone, $phone)) {
        // preg_match(): Sử dụng  validate  bằng regex
        // Nếu đúng định dạng nó sẽ trả về TRUE
        // Nếu sai nó sẽ trả về FALSE
        $error["phone"] = "Số điện thoại sai định dạng";
    }

    if (empty($error)) {
        // Viết câu truy vấn để thêm vào CSDL
        $sql_create = "INSERT INTO users VALUE (null, '$name', '$email', '$phone', '$status')";

        $stmt_create = $pdo->prepare($sql_create);

        $stmt_create->execute();

        header("Location: buoi14.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
</head>

<body>
    <h3>Thêm người dùng</h3>
    <form action="" method="POST">
        <label for="">Họ tên</label>
        <input type="text" name="ho_ten">
        <span style="color: red;"><?= !empty($error["ho_ten"]) ? $error["ho_ten"] : "" ?></span>
        <br>
        <label for="">Email</label>
        <input type="text" name="email">
        <span style="color: red;"><?= !empty($error["email"]) ? $error["email"] : "" ?></span>
        <br>
        <label for="">Số điện thoại</label>
        <input type="text" name="phone">
        <span style="color: red;"><?= !empty($error["phone"]) ? $error["phone"] : "" ?></span>
        <br>
        <label for="">Trạng thái</label>
        <select name="status">
            <option value="0">Ngừng hoạt động</option>
            <option value="1">Hoạt động</option>
        </select>
        <br>
        <button type="submit" name="create">Thêm mới</button>
    </form>
</body>

</html>