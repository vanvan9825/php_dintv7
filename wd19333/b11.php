<?php

// một số trường dùng sẵn để thao tá với mảng
// count: đếm / đếm tổng số phần tử trong mảng
// arr_keys : lấy toàn bộ các keys trong mảng và đưa vào 1 mảng khác 
// arr_values: lấy toàn bộ các giá trị của phần tử trong mảng và đưa nó vào 1 mảng khác 
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// thêm 1 or nhiều phần tử vào mảng
//array_unshift($arr, "dinhtv7", "abc", 6,5); // thêm các phần tử vào đầu mảng


// thêm 1 or nhiều phần tử vào cuối mảng
//array_push($arr,"dinhtv7", "abc", 6,5);


// xóa phânf tử cuối trong mảng
// array_pop($arr);


// xóa phânf tử đầu tiên trong mảng
//array_shift($arr);

// tìm kiếm phần tử trong mảng
// tìm kiếm 1 giá trị trong mảng nếu có thì sẽ trả về key hay còn gọi à vị trí của phần tử đó trong mảng
// neeus không có thì sẽ ko trả về ra gì cả

// echo array_search(8, $arr);
// echo"<br>";

// tìm kiếm 1 giá trị trong mảng nếu có thì trả về true và không có thì trả về false
// var_dump(in_array(0,$arr))  ;
// echo"<br>";

// hàm kiểm tra xem có phải mảng hay không
// nếu là mảng là trả về true còn không thì trả về false
// var_dump(is_array($arr));
// echo"<br>";

// đưa mảng thành 1 chuỗi 
// echo implode( "  ", $arr); // ký tự ngăn cách các phần tử và mảng cần chuyển

// đưa chuỗi thành mảng

$string = "T A V C F R E N A S ";
// print_r(explode(" ", $string));


echo"<br>";
// print_r($arr);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <form action="" method="">

  <!-- action:chỉ định đích đến của dữ liệu khi người dùng ấn gửi 
       (nếu không điền thì dữ liệu sử lí ở trang hiện tại) 
       method: xác định phương thức HTTP sử dụng GET và POST
    -->

    <!-- dùng để hiển thị hoặc truyền dữ liệu  -->
  <input type="text" name="ho_ten">
  <!-- name ở đây là key sử dựng để xác định lên trường dữ liệu khi gửi lên server -->

  <button type="submit">SUBMIT</button>

  </form>

  <h2>Phương thức GET</h2>
  <!-- 
    GET
    dữ liệu được gửi lên URL avf sẽ hiển thị trực tiếp giá trị trên URL 
    ừu điểm : truyến tải dữ liêu qua các trang rất nhanh 
    nhược đieem kếm bảo mật nên thường được sử dụng trong các tác vụ nhỏ 
    (search truyền dữ liệu qua các trang)

   -->
  <form action="b11action.php" method="GET">
    <label for="">họ và tên</label>
    <input type="text" name="ho_ten">
    <label for="">lớp</label>
    <input type="text" name="lop">
    <button type="submit">SUBMIT</button>
  </form>
  <?php   
//   dữ liệu được gửi lên là 1 mảng liên hợp có key chinh là name trong input 

//  lấy ra toàn bộ giá trị 
// var_dump($_GET);

//  lấy ra từng giá trị 
// echo $_GET["ho_ten"];

// băt buộc phải kiểm tra trước khi thao tác dưx liệ 
// isset(); nếu có giá trị thì trả về true còn không thì trả về false

if (isset($_GET["ho_ten"])) {
    echo $_GET["ho_ten"] ;
}
echo"<br>";
if (isset($_GET["lop"])) {
    echo $_GET["lop"] ;
}


  ?>

<h1>Phương thức POST</h1>
<!-- POST
dữ liệu sẽ được gửi ngầm đi 
bảo mật hơn GET 
thương được dùng trong các tác vụ xử lí dữ liệu 
quan trong vd đăng nhập đky thêm sửa xóa dữ liệu 
 -->



<form action=" " method="POST">
    <label for="">họ và tên</label>
    <input type="text" name="ho_ten">
    <label for="">lớp</label>
    <input type="text" name="lop">
    <button type="submit">SUBMIT</button>
  </form>

  <?php
//  lấy ra toàn bộ dữ liệu 
    var_dump($_POST);

    if (isset($_POST["ho_ten"])) {
        echo $_POST["ho_ten"] ;
    }
    echo"<br>";
    if (isset($_POST["lop"])) {
        echo $_POST["lop"] ;
    }
    
  ?>

<!--
TẠO 1 from đăng nhập nhập vào username và password 
sử dụng POST
bắn dữ liệu sang 1 trang khác nếu username và password là thaydinhdz
thì hiển thị ra màn hình thầy định đẹp trai nhất fpoly
-->

<h2>bai tap</h2>


 <form action="b11action.php" method="POST">
    <label for="" >họ và tên</label>
    <input type="text" name ="username " id="">
    <label for="">password</label>
    <input type="password" name="password" id="">
    <button type="submit">SUBMIT</button>
 </form>

 <?php
 var_dump($_POST);

 if (isset($_POST["username"])) {
    $name = $_POST["username"] ;
}
echo"<br>";
if (isset($_POST["password"])) {
   $pass = $_POST["password"] ;
}





 ?>







</body>
</html>



