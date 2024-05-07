<?php

$string = ("Hello World");

// hàm đến số ký tự trong 1 chuỗi

echo strlen($string); // hamf ddếm số kí tự và trả về độ dài của 1 chuỗi 
echo("<br>");

// hàm đếm tổng số từ trong chuỗi 
echo str_word_count($string); // đếm tỏng số từ ở trong chuỗi
echo("<br>");

// hàm đảo ngược chuỗi 
echo strrev($string);
echo("<br>");
 
// hàm viết thường tất cả ác kí tự trong chuỗi 
echo strtolower($string);
echo("<br>");

// Hàm viết hoa tất acr các kí tự 
echo strtoupper($string);
echo("<br>");

//hamf cắt chuỗi 
// cần chuyền vào 3 tham số là : số cần cắt , vị trí cần căts, và số lượng kí tự cắt ra 
echo substr($string, 5, 11);// neeus không điền vị trris kết thúc thì nó sẽ cắt từ vị trí bắt đầu đến hết 
echo("<br>");

// hàm thay thế chuỗi 
// từ khóa cần thay thế ,từ khóa thay thế , từ khóa bị thay thế 
echo str_replace("World", "PHP", $string);
echo("<br>");

// hàm tìm kiếm vị trí của chuỗi con trong chuỗi khác 
echo strpos($string, "World");
echo("<br>");




//Cho chuỗi sau 
$str = (" Thay Dinh dep trai nhat Fpoly");
// tiến hành cắt ra từ thầy định và từ đẹp trai thay thế bằng xinh gái 
$a = strpos($str, "dep");
echo substr($str, 0, $a);
echo("<br>");
$aa = strpos($str, "dep");
$b = strlen("dep trai");
echo substr($str, $aa,$b);
echo("<br>");

echo str_replace("dep trai ", "xinh trai ", $str);
echo("<br>");






?>