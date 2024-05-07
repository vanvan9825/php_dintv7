<?php
$host = "localhost";
$username = "root";
$dbname = "test";
$password = "";

try {
    // Tạo kết nối tới CSDL
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

    // Thiết lập lỗi 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Kết nối đến CSDL thành công";

} catch (PDOException $error) {

    echo "Lỗi kết nối CSDL: " . $error->getMessage();

}