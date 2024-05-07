<?php
//cách khai báo biến
//bắt buộc trong php phai có $ xong đến tên biến
$a = 5;

echo $a;
echo "<br>";
//noois chuỗi trong php
echo "số " . $a . " là số lẻ";

// có thể hiển thị nhiều gtri băngf cách sử dụng ,
 $b = 6;
 echo $a, $b;

 //các kiểu dữ liêu 
 // kiểu số nguyên 
 $songuyen = 2005;
 //kiểu số thưc
 $sothuc = 2.5;
 //kiểu boolean
 $boolean = true; //hoặc false
 // kiểu null
 $mynull = null; //biến này không có gì hết trống
 //kiểu string 
 $mystring = " trinh thi van"; 

 // khai báo thông tin của 3 ny hiện tại (họ tên, chiều cao, năm sinh, cân nặng )
 // hiển thị ra màn hình mỗi người 1 dòng 
 // các thông tin ngăn cách nhau bằnd dấu -

 echo "<br>";
 $ten1 = "abc";
 $namsinh = 2004;
 $chieucao = 180;
 $cannang = 50;
 echo $ten1 . "-" . $namsinh . "-" . $chieucao . "-" . $cannang ;
 echo "<br>";
 $ten2 = "xyz";
 $namsinh2 = 2003;
 $chieucao2 = 175;
 $cannang2 = 48;
 echo $ten2 . "-" . $namsinh2 . "-" . $chieucao2 . "-" . $cannang2 ;
 // nhắc lại toán tử 

 // toán tử số học: +, -, *, /, %, ** : lũy thừa 

 //toán tử so sánh: <, > <=, >=,==, != : so sánh không bằng , <> : khác , ===,!== so sánh cả gtri và kiểu dữ liệu 
 // x <=> y : nếu gtri của x bằng gtri của y thì nó trả về 0 ngược lại nếu x lớn hơn y thì trả về 1 nếu y lớn hơn gtri x thì trả về -1

 
 // toán tử logic: && và || 

 // toán tử gán:  
 // x = y      x=y      gán gtri y cho x
 // x+=y       x = x + y  cộng thêm y cho x
 // x-=y      x = x - y    trừ x đi y gtri 
 // x*=y      x = x * y   nhân thêm y lần cho x
 // x/=y      x = x / y     chia y lần gtri x 
 // x%=y      x = x % y   chia lấy phần dư gtri x 
 

 // toán tử tăng giảm 
 echo "<br>";
 $x = 5;
 $y = $x++; // trả về gtri gốc trước khi nó thay đổi 
 //$z = ++$x; // thay đổi biến trước và sau đó trả về gtri 
echo $y ;
 //echo $z;

 // câu điều kiện 

 //if( điều kiện ){câu lệnh 1 } else{câu lệnh 2}
 

 // cho 1 số nguyen kiểm tra xem số đó là số chẵn hay số lẻ 
 echo "<br>";
 $x = 18;
 if($x %2 == 0){
    echo("số " . $x ." là số chẵn ");
 }else{
    echo("số " . $x ." là số lẻ ");
 }

 // câu điều kiện if - else if 
 //if( điều kiện1 ){
//     câu lệnh 1 
//}else if(diều kiện 2){
//     câu lệnh 2 
//   }
//else if(diều kiện n){
//    câu lệnh n
//} else{
//     câu lệnh n
// }


// bài tập phương trình bậc 1 : ax + b = 0
  echo "<br>";
    $a = 1;
    $b = 0;
    
    if($a == 0 ){
        if($b == 0){
            echo("phuong trinh vo so nghiem" );
        } else{
            echo("pt vô nghiệm ");
        };
    } else if ($a != 0){
        if($b == 0 ){
            echo("x = 0 " );
        } else{
            $c = -$b/$a;
            echo("phuong trinh co nghiem la" . $c );

        };
    }
     // bài 1:
    // ax**2 + bx + c = 0  tính pt bậc 2 


    // Bài 2
    // cho họ tên, năm sinh, giới tính (nam = 0, nữ = 1) của nyc 
    // kiểm tra xem nyc có đủ tuổi đi nvqs hay không
    // hiển thị ông/ bà có/ không đủ đi nvqs hay không  (ông / bà dựa trên 0 1)
    // tuổi  năm hiện tai search " get current year in php "
    //  >=18 và <= 27 thì đủ tuôi đi NVQS



    // Bài 1: 
       echo ("<BR>");
      $a = 1;
      $b = 4;
      $c = 4 ;
      $delta = $b*$b - (4*$a*$c);
      if($delta < 0){
        echo("Phương trình vô nghiệm ");
      }else if($delta == 0){
        $d = (-$b)/(2 * $a);
        echo("phương trình có nghiệm kép x1 = x2 = " . $d );
      } else{
        $x1 = ( -$b + sqrt($delta))/(2 * $a);
        $x2 = ( -$b - sqrt($delta))/(2 * $a);
        echo("phương trình có hai nghiệm phân biệt x1 = " . $x1 . ", x2 = " . $x2);
      }
  
    // bài 2
    echo ("<br>");
     $ten = "Trịnh Việt Dũng";
    $namsinh = 1999;
    $gioitinh = 0;
    $nam = date("y");
    $tuoi = $nam - $namsinh; 
    $checkgioitinh = $gioitinh == 0 ? "Ông" : "Bà";
     if($tuoi >= 18 && $tuoi <= 27){
         echo( $checkgioitinh . "đủ tuổi đi NVQS");
     }else{
        echo($checkgioitinh ." không đủ tuổi đi NVQS");
     }

    

    



?>