<?php
require_once("connect.php");

if(isset($_GET['id_user'])){
    $id = ($_GET['id_user']);
    $sql_detail = "SELECT * FROM users WHERE id = '$id' ";
    $stmt_detail= $pdo->prepare($sql_detail);
    $stmt_detail->execute();
    $userDetail = $stmt_detail->fetch(PDO::FETCH_ASSOC);


}

// Kiểm tra xem người dùng có submit hay không
if (isset($_POST["update"])) {
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
        $error["phone"] = "Bạn cần điền số điện thoại";
    }else if (!preg_match($regex_phone, $phone)) {
        // preg_match(): Sử dụng  validate  bằng regex
        // Nếu đúng định dạng nó sẽ trả về TRUE
        // Nếu sai nó sẽ trả về FALSE
        $error["phone"] = "Số điện thoại sai định dạng";
    }

    if (empty($error)) {
        // Viết câu truy vấn để thêm vào CSDL
        $sql_update = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', status = '$status' WHERE id = '$id' ";

        $stmt_update = $pdo->prepare($sql_update);

        $stmt_update->execute();

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
            <option value="0" selected <?= $userDetail['status'] == 0 ? 'selected' : ' ' ?>>Ngừng hoạt động</option>
            <option value="1" selected <?= $userDetail['status'] == 1 ? 'selected' : ' ' ?>>Hoạt động</option>
        </select>
        <br>
        <button type="submit" name="update">Sửa</button>
    </form>
</body>

</html>