<?php
// SESSION và COOKIE
// ** Giống nhau:
//      - Đều dùng để lưu trữ dữ liệu tạm thời

// ** Khác nhau:
//      - SESSION:
//              + Dữ liệu SESSION được lưu trữ trên máy chủ 
//                  sau đó sẽ được bắn về trình duyệt
//              + SESSION sẽ tồn tại trong 1 phiên làm việc của người dùng
//              + SESSION nó sẽ bị xóa khi người dùng đóng trình duyệt
//                  hoặc chủ động xóa nó

//      - COOKIE:
//              + Dữ liệu COOKIE sẽ được lưu trữ trên máy của người dùng
//              + Lưu trữ dưới 1 tệp tin văn bản trên máy tính của người dùng
//              + Nó chỉ hoạt động trong 1 khoảng thời gian được xác định trước
//                     Và nó tự động xóa khi hết thời gian hoặc khi trình duyệt đóng lại


// SESSION:
// Khởi tạo 1 phiên làm việc mới của SESSION
session_start();

$username = "dinhtv7";
$password = "12345678";

// Thiết lập SESSION
$_SESSION["ten_dang_nhap"] = $username;
$_SESSION["mat_khau"] = $password;

// Kết thúc phiên làm việc của SESSION
session_destroy();

if (isset($_SESSION["ten_dang_nhap"]) && isset($_SESSION["mat_khau"])) {
    echo $_SESSION["ten_dang_nhap"];
    echo "</br>";
    echo $_SESSION["mat_khau"];
}
echo "</br>------------------------</br>";

// COOKIE
$ho_ten = "Tạ Văn Định";
$email = "dinhtv7@fe.edu.vn";

// Thiết lập COOKIE
setcookie("name", $ho_ten, time() + (60 * 5), "/xuong/xuong_buoi5_test.php");
setcookie("email", $email, time() + (60 * 5), "/xuong/xuong_buoi5_test.php");

if (isset($_COOKIE["name"]) && isset($_COOKIE["email"])) {
    # code...
    echo $_COOKIE["name"];
    echo "</br>";
    echo $_COOKIE["email"];
}

// Xóa COOKIE
setcookie("name", $ho_ten, time() - (60 * 6), "/xuong/xuong_buoi5_test.php");
setcookie("email", $email, time() - (60 * 6), "/xuong/xuong_buoi5_test.php");
// Để xóa COOKIE ta thiết lập thời COOKIE về quá khứ