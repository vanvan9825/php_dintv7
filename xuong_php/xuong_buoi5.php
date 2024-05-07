<?php
// SESSION và COOkIE
// - Gống nhau: Đều dùng để lưu trữ dữ liệu tạm thời
// trên chính trình duyệt của người dùng 

// ** Khác nhau:
// - SESSION:
// + Dữ liệu SESSION được lưu trữ trên máy chủ sau đó sẽ được bắn về trình duyệt
// + SESSION sẽ tồn tại trong 1 phiên làm việc 
// + SESION nó sẽ bị xóa khi người dùng đings trình duyệt hoặc chủ động xóa nó

// - COOKIE: 
// + Dữ liệu COOKIE sẽ được lưu truex trên máy người dùng 
// + Lưu trữ dưới dạng 1 tệp tin văn bản trên máy tính của người dùng
// + Nó chỉ hoạt động trong một khoảng thời gian được xác định trước, 
// Và nó tự động bị xóa khi hết thời gian hoặc khi trình duyệt đóng lại 

// SESSION 
// Khởi tạo 1 phiên làm việc mới của SESSION 
session_start(); // Chọ hệ thống biết phiên bắt đầu hoạt động của SESSION 

$username = "dinhtv7";
$password = "12345678";

// Đưa dữ liệu muốn lưu trữ lên SESSION
// SESSION nó là 1 mảng liên hợp
$_SESSION["ten_dang_nhap"] = $username;
$_SESSION["mat_khau"] = $password;

// Kết thúc phiên làm việc của SESSION 
session_destroy();
// Xóa ở các file khác nhưng vẫn còn tồn tại file này
unset($ten_mang["ho_ten"]);
// xóa giá trị trong sesion 
unset($_SESSION["ten_dang_nhap"]); 
// Xóa dữ liệu của 

// In ra giá trị từ SESSION
if (isset($_SESSION["ten_dang_nhap"]) && isset($_SESSION["mat_khau"])){
    echo $_SESSION["ten_dang_nhap"];
    echo "<br>";
    echo $_SESSION["mat_khau"];
}
echo "<br>-------------------</br>";

// COOKIE
$name = "DinhTV7";
$class = "WD19333";

// Thiết lập cookie
// Mảng liên hợp
// Cú pháp: setcookie("ten cookie", giá trị muốn truyền vào, thời gian tồn tại)
setcookie("ho_ten", $name, time() + (60 *6), "/Xuong_php/buoi5_test.php");
setcookie("lop", $class, time() + (60 *6), "/Xuong_php/buoi5_test.php");
// /Xuong_php/buoi5_test.php chỉ tồn tại ở file buoi5_test.php

// Hiển thị ra cookie
if(isset($_COOKIE["ho_ten"]) && isset($_COOKIE["lop"])){
    echo $_COOKIE["ho_ten"];
    echo "<br>";
    echo $_COOKIE["lop"];
}

// Xóa COOKIE
setcookie("ho_ten", $name, time() - (60 *7), "/Xuong_php/buoi5_test.php");
setcookie("lop", $class, time() - (60 *7), "/Xuong_php/buoi5_test.php");

// Tất cả GET, POST, SESSION, COOKIE
// Trước khi thực hiện xử lý dữ liệu đầu phải kiểm tra isset

// isset: Trả về TRUE nếu biến có giá trị hoặc khác giá trị NULL
// empty: Trả về TRUE nếu biến KHÔNG tồn tại hoặc biến đấy rỗng


?>