<?php
// cho 2 số tự nhiên tính tổng 2 số rồi in ra màn hình
//  $a = 3;
//  $b = 5;
//  $c = $a + $b;
//  echo( $a ." + " . $b . " = " .$c);


 //  hàm trong php 
 // hàm là các khối code dùng để thực hiện 1 cv cụ thể nào đó , có tính tái sử dụng và chỉ thực thi khi được gọi
 // có 2 loại 
 //hàm là hàm trả về và hàm không trả về (cả 2 đều chia làm 2 loại là hàm có tham số và hàm không có tham số)
 // hàm trả về có return  và còn lại ko có


 // cấu trúc của hàm 
 //function ten_ham(){
    // khối code 
 //}
// cách gọi hàm 
//ten_ham();
// hàm trả về là hàm sẽ trả về 1 kêts quả cụ thể nào đó (return)

// hàm trả về có tham số 
function tinhtong($a,$b){ // tham số được truyền vào () và ngăn cách nhau bởi dấu ,
    $tong = $a + $b;
    return $tong;
}
$x =  4;
$y = 5;
echo tinhtong($x,$y);
// gtri truyền vào tham số sẽ  tương ứng sẽ gán theo vị trí 


// hàm trả về ko có tham số 
echo("<br>");
function getRandomNumber (){
    $number = rand(1, 38);
    return $number ;

}
echo getRandomNumber();



// hàm không trả về 
// hàm không trả về 1 kết quả cụ thể và không có return 
  

// hàm trả về không có tham số 
echo("<br>");
function sayhello($name){
    echo " xin chào" . $name;
}
sayhello("Van");

// hàm không có tham số 
echo("<br>");
function xinchao(){
    echo " xin chao cac ban";
}
xinchao();

// Sử dụng hàm để làm bài tập
// bài 1 cho gtri chiều dài và rộng hcn tính chu vi và diện tích hcn 
// bài 2 cho 2 gtri a và b    giải pt bậc 1 ax + b = 0
// bài 3 : cho 3 gtri đáy lớn đáy bé chiều cao tính diện tích hình thang 

// bài 1:
echo("<br>");
function chuvidientich( $d, $e){
    $chuvi = ($d + $e) * 2;
    $dientich = $d * $e; 
    return "Bài 1: chu vi hcn là: ". $chuvi ."<br> diện tích hcn là: " . $dientich;
}
   echo chuvidientich(4,5);

   // bai 2:
   echo("<br>");
    function ptbac1($x, $y){
        $z = -$y / $x;
        return $z;
    }
    echo ("Bài 2: nghiệm của pt bậc nhất là: ");
    echo ptbac1(2,-6);

    // bai 3: 
    echo("<br>");
    function dthinhthang($g, $h, $l){
        $dt = (($g + $h)* $l) / 2;
        return $dt;
    }
    echo ("diện tích hình thang là : ");
    echo dthinhthang(3,4,5);

?>