<?php

//mảng liên hợp 
// là mảng mà vị trí của các phần tử được xác định
// và nó được gọi là các key 
// cách khai báo mảng liên hợp 
// $ten_mang = [key => giá trị ]
// các key viết liên ko dáu và trong 1 mảng chỉ chứa 1 key 
// 1 key chỉ tồn tại duy nhất 1 lần trong mảng 

$ar = [

    "toi" => "I",
    "yeu" => "Love",
    "em" => "you"

];

// hiển thị giá trị 
// $ten_mang[key];
echo $ar["toi"] . " ";
echo $ar["yeu"] . " ";
echo $ar["em"] ;


// khai báo 1 mangr thông tin cá nhân
// họ tên ngày sinh năm sinh số điện thoại giới tính
// hiển thị thông tin ra ngoài màn hình
echo("<br>");
$thongtin = [
    "hoten" => "Vân Vân",
    "datebirth" => "08/08 ",
    "yearbirth" => 2005,
    "number" => "01234",
    "gioitinh" => "nữ"
];

// sử dụng foreach  

foreach($thongtin as $int => $ten){
    echo "$int : $ten . <br>";
};

// duyệt mảng bằng for 

//$value = array_values($thongtin);
// nos sẽ duyệt mảng array và trả ra 1 mảng mới gồm các giá trị của mảng array

//var_dump($value);

// $key = array_keys($thongtin);
// var_dump($key);
// duyệt mảng $thongtin và trả ra 1 mảng mới gồm các key của mảng thong tin


// duyệt mảng thong tin bằng vòng lặp for
for ($i = 0; $i < count($thongtin); $i++){
    echo  array_values($thongtin)[$i] . " - ";
}
echo ("<BR>");
$key = array_keys($thongtin);
for($a = 0; $a < count($thongtin); $a++){
    echo $key[$a] ."<br>" ;
}


// khai báo 1 mảng liên hợp gồm điểm các môn đang học 
// tính trung bình cộng điểm các môn
// tìm môn có điểm cao nhất và
//tìm môn có điểm thấp nhất 
// hiển thị các môn theo thứ tự điểm giảm dần
echo ("<BR>");
$diem = [
    "php" => "8.4",
    "javasc" => "8.5",
    "anh" => "9.0"
];
$tong = 0;
for($d = 0; $d < count($diem); $d++){
    $c = array_values($diem)[$d];
       $tong += $c;
       $e = $tong / 3;

}
echo "Điểm trung bình các môn là: " . $e;
echo ("<BR>");
$max = null;
$min = $diem["javasc"];
foreach($diem as $abc ){
    if($abc > $max){
        $max = $abc;
    } 
    if($abc < $min){
        $min = $abc;
    }
};
echo "Điểm lớn nhất là: " . $max;
echo ("<BR>");
 
echo "Điểm nhỏ nhất là: " . $min;
echo ("<BR>");











?>