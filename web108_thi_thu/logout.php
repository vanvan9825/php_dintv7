<?php
session_start();

if (isset($_SESSION["username"])) {
    // Xóa thông tin đăng nhập của người dùng trên SESSION
    unset($_SESSION["username"]);

    // Sau khi đăng xuất thì sẽ quay về trang login
    header("Location: login.php");
}