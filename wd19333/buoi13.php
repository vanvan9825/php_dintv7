<?php
// SESSIon và COOKIE
// GIỐNG : đều dùng để  dữ liệu tạm thời


// kác mhau 
// SESSION 
// dữ liệu sẽ được lưu trữ trên máy chủ 
// session sẽ tồn tại trong 1 phiên làm việc của người dùng 
// session sẽ bị xoa skhi người dùng đóng trình duyệt hoặc người dùng tự xóa nó 



// COOKIE 
//   dữ liệu được lưu trưc trên chính máy tính cửa người dùng
// chỉ tồn tại trong 1 khoảng thời gian được xác định 
// nó sẽ tự động bị xóa khi hết thời gian hoặc khi đóng trình duyệt 



// SESSION 
session_start(); // bawts đầu 1 phiên làm việc vơis session 
$username = "Ta Van Dinh";
$password = " dinhdz";

// thiết lập giá trị trên SESSION
$_SESSION["ten_dang_nhap"] = $username;
$_SESSION["mat_khau"] = $password;

if (isset($_SESSION["ten_dang_nhap"]) && isset( $_SESSION["mat_khau"])) {
    echo $_SESSION["ten_dang_nhap"];
echo '<br>' ;
echo $_SESSION["mat_khau"];
}
  echo "<hr>";
 
  // xóa gtri của session
  unset($_SESSION["ten_dang_nhap"]);

  // kết thúc 1 phiên làm việc sử dụng 
  session_destroy();



//COOKIE

$ho_ten = 'Trinh Thi Van';
$lop = 'wd19333';

// thiết lập giá trị cho cookie
setcookie("name", $ho_ten, time() + (10));
setcookie("class", $lop, time() + (10));

if (isset($_COOKIE['name']) && isset($_COOKIE['class'])) {
   echo $_COOKIE['name'];
   echo'<br>';
   echo $_COOKIE['class'];
}


// xoas cookie 
setcookie("name", $ho_ten, time() - (11));
setcookie("class", $lop, time() - (11));




?>