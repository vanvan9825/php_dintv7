<?php
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
    $c = 3 ;
    $delta = $b*$b - (4*$a*$c);
    if( $a == 0 ){
        if( $b == 0){
            echo  ("Phương trình vô nghiệm");
        }else {
            $v = (- $c / $b);
            echo ("Phương trình có một nghiệm: " + "x = " + $v );
        };
    };
    if($delta < 0){
      echo("Phương trình vô nghiệm ");
    }else if($delta == 0){
      $d = (-$b)/(2 * $a);
      echo("phương trình có nghiệm kép x1 = x2 = " . $d );
    } else{
      $x1 = ( -$b + sqrt($delta))/(2 * $a);
      $x2 = ( -$b - sqrt($delta))/(2 * $a);
      echo("Phương trình có hai nghiệm phân biệt x1 = " . $x1 . ", x2 = " . $x2);
    };

  // bài 2
    echo("<br>");
   $ten = "Trịnh Việt Dũng ";
   $namsinh = 1999;
   $gioitinh = 0;
   $nam = date("y");
   $tuoi = $nam - $namsinh; 
   $checkgioitinh = $gioitinh == 0 ? "Ông " : "Bà ";
    if($tuoi >= 18 && $tuoi <= 27){
       echo( $checkgioitinh . $ten ." đủ tuổi đi NVQS");
    }else{
       echo($checkgioitinh . $ten ." không đủ tuổi đi NVQS");
    }

    // bài 3: Kiểm tra xem 1 năm có phải năm nhuận không ?
    // bài 4: cho 3 cạnh của 1 tam giác . Kiểm tra xem đó là tam giác đều / cân / thường dựa vào 3 cạnh của tam giác
    // bài 5: cho 5 số tự nhiên kiểm tra xem số nào là số lớn nhất
    // bài 6: Xác định tháng dựa trên số từ 1 đến 12 ( sử dụng switch .... case....)



    // Bài 3:
    echo("<br>");
    $year = 2024;
    if(($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)){
        echo($year . " là năm nhuận");
    }else{
        echo($year . " là năm không nhuận");
    }

    // bài 4:
     echo("<br>");
     $a = 3;
     $b = 5;
     $c = 5;
     if($a == $b && $b == $c){
        echo("Tam giác đều");
     }elseif($a == $b || $a == $c || $c == $b){
        echo("Tam giác cân");
     }else{
        echo(" Tam giác thường ");
     }

     //bài 5:
     echo("<br>");
     $x = 7;
     $y = 5;
     $z = 3;
     $i = 9;
     $k = 18;
     $max = $x;
     if($max < $y){
         $max = $y;
     }
     if($max < $z){
         $max = $z;
     }
     if($max < $i){
         $max = $i;
     }
     if($max < $k){
         $max = $k;
     };
     echo "GTLN trong 5 số là: " . $max;


     // bài 6:
     echo("<BR>");
      $month = 4;

    if ($month >= 1 && $month <= 12) {
      switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo("Tháng " + $month + " có 31 ngày.");
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo("Tháng " + $month + " có 30 ngày.");
            break;
        case 2:
            $year = 2024;
            $day = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0) ? 29 : 28;
            echo("Tháng 2 năm " + $year + " có " + $day+ " ngày.");
            break;
    }
    }
    else {
    echo("Tháng không hợp lệ. Vui lòng nhập lại.");
    };