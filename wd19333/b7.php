<?php
// mảng (trong php) là 1 tập hợp các phần tử có hoạc không cùng kiểu dữ liệu 
// trong mảng có 2 thành phần là vị trí và giá trị 
// vị trí bắt đầu từ 0 đên n-1 
// n là tổng số phần tử trong mảng 


// cách khai báo mảng trong php 
// cách 1 :
  $mang1 = array(1, 2, "abcd", 4, 5, true);  // cách khai báo cũ

// cách 2 :
$mang2 = [1, 2, 3, "abc", 4, 9.5, "dep trai"]; // sử dụng cách này để khai báo mảng 

// echo $mang2; sai vì echo ko dùng để hiển thị mảng 

// hiển thị thông tin cấu trúc của mảng

// Cách 1

 var_dump($mang1); //hiển thị chi tiết cấu trúc của mảng thường dùng trong việc debug 

// cách 2
echo ("<br>");
print_r($mang1); // chỉ hiện thị vị trí và giá trị 
  
// TRUY xuất giá trị của 1 phần tử trong mảng  cần phải biết vi trí 
// cus pháp  $tên_mảng[vị trí];
echo ("<br>");
echo $mang2[6];


// mảng trong php được chia thành 3 loại 
// loại 1: mảng rỗng 
$array = [];
// loại 2: mảng tuần tự 
// là mảng mà các vị trí các phần tử được xác định sắn là các số nguyên dương bắt đầu từ 0 
$phone = ["apple ", "samsung ", "oppo ", "xiaomi"];
// in ra màn hình tất cả các gtri của phần tử trong mảng phone - duyệt mảng 
// count() dùng để đến số phần tử trong mảng 
echo ("<br>");
echo count($phone);
echo ("<br>");
for($i = 0; $i< count($phone); $i++){
    echo $phone[$i] . "<br>";
}
// duyệt mảng foreach chuyên để duyệt mảng trong php 
//cú pháp foreach($ten_mảng_cần_duyệt as $key ){ công việc }
echo ("<br>");
foreach($phone as $key){
    echo $key ;
}

// bài tập 
// cho 1 mảng số nguyên gồm các số nguyên gồm 10 phần tử hiển thị ra các phần tử có gtri lẻ làm theo 2 cách for và foreach 

// bài 2 đếm và tính tổng các phần tử có gtri chẵn trong mảng trên
// bài 3 tìm giá trị lớn nhất trong mảng 

// bài 1
echo ("<br>");
$number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
 for ($a = 0; $a < count($number); $a++){
    if($a % 2 == 1){
        echo "cách số lẻ trong mảng là: " . $number[$a] . " ";
    } 
 }
//  echo ("<br>");
//  foreach($number as $b){
//     if($b % 2 == 1){
//         echo "cách số lẻ trong mảng là: " . $b . " ";
//     }
//  }

 // bai 2
 echo ("<br>");
 $gtri = 0;
 $tong = 0;
//  for ($c = 0; $c < count($number); $c ++){
//      if($c % 2 == 0){
//         $gtri ++;
//         $tong += $c;
//      }
//  }

//  echo "các phần tử chắn có " .$gtri . " số";
//  echo ("<br>");
//  echo "Tổng các số chẵn là : " . $tong;
//  echo ("<br>"); 

 foreach($number as $number ){
    if($number % 2 == 0){
        $gtri ++;
        $tong += $number;
     }
 }
 echo "các phần tử chắn có " .$gtri . " số";
 echo ("<br>");
 echo "Tổng các số chẵn là : " . $tong;
 echo ("<br>"); 
   

 // bai 3 
 echo "<br>";
 $number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// $max = 0;
// for($vitri = 0; $vitri < 10; $vitri++){
//     if($number[$vitri] > $max ){
//         $max = $number[$vitri];
//     }
// }
// echo $max;
echo "<br>";
$somax = 0;
foreach($number as $solonnhat){
    if( $solonnhat > $somax ){
        $somax =  $solonnhat;
    }else{}
}
echo "số lớn nhất là: " . $somax;




?>