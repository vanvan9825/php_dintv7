<?php

// vòng lặp trong php 
// khi t muốn thực hiện 1 cv nào đó or 1 đoạn code nào đó lặp đi lặp lại nhiều lần 


// vòng lặp for sử dụng khi đã biết trước điều kiện dừng 
// for(gtri khởi tạo; điều kiện; bước nhảy)
//{khối lệnh thực thi}

//hiển thị ra màn hình các số từ 1 đến 10
//echo("1 2 3 4 5 6 7 8 9 10");

$a =1;

for( $a = 1; $a <= 10; $a++){
    echo("$a ");
}

// vòng lặp while 
// sử dụng ko cần biết trước điều kiện dừng
// while(điều kiện){khối lệnh thực thi}
echo("<br>");
$i = 1;
while($i <= 10){
    echo " " . $i++;
}

// vòng lặp do while 
// thi hành câu lệnh trước sau đó sẽ kiểm tra điều kiện nếu điều kiện vẫn đúng thì tiến hành lặp lại 
// do{cau lenh} while(dieu kien)
echo("<br>");
$i = 11;
do{
    echo (" ") . $i ;
    $i++;
} while ($i <= 20);



// tính tổng các số từ 1 cho đến 100
echo("<br>");
$x = 1;
$tong  = 0;
while($x <= 100){
   
    $tong += $x;
    $x++;
}
echo $tong;
echo("<br>");
$tong1 = 0;
for($b = 1; $b <= 100; $b++){
    $tong1 += $b;
}
echo $tong1;

echo("<br>");
$c = 1;
$tong2 = 0;
do{
    $tong2 += $c;
    $c++;
} while($c <=100);
echo $tong2;


// bai 2: in ra màn hình bảng cửu chương 9
echo("<br>");
  for($d = 1; $d <= 10; $d++ ){
    $g = 9 * $d;
    echo("<br>");
    echo("9 x " . $d . " = " . $g);
  }

// bai 3: tim ra các số nguyên tố < 100
echo("<br>");
    for($s = 1; $s <= 100; $s++){
        $check = 0;
        for($j = 2; $j < $s; $j++){
            if($s % $j == 0){
                $check = 1;
            }
        }
        if($check == 0 ){
            echo $s;
            echo("<br>");
        }
    }
?>  