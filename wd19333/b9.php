<?php

// khaai báo 1 mảng liên hợp khai báo 
// họ tên mã sv lớp ccủa nyc  
// dùng foreach để hiển thi thông tin 

$info = [
    "ho_ten" => "abc",
    "masv" => "PH56329",
    "lop" => "wd19333"
];

foreach($info as $thongtin => $hoten){
    echo  $thongtin . ": " . $hoten ."<br> ";
}


// mảng đa chiều (2 chiều)
// là mảng chứa 1 hoặc nhiều mảng khác

// mảng tuần tự 
$arr1 = [
    [1, 2],
    [3, 4],
    [5, 6, 7]
];

// cách in ra giá trị 
// $ten_mang[vị trí mảng cần truy cập][vị trí của phần tử]
echo ("<br>");
echo $arr1[0][0];
echo ("<br>");
echo $arr1[2][0];
echo ("<br>");
echo $arr1[2][2];

// sử dụng foreach để in ra các ssố trong bảng trên 
echo ("<br>");
$tong = 0;
foreach($arr1 as $arr){
    foreach($arr as $ar){
         echo $ar . " ";
        $tong += $ar;
    }

}
echo ("<br>");
echo $tong;

// tinhs toongr các giá trị các phần tử trong mảng trên


// mảng liên hợp 
// đây chinhs là mảng dữ liệu mà database trả ra cho chúng ta


$arr2 =[
    [
    "ho_ten" => "Nguyễn Thị 1",
    "masv" => "PH56329",
    "lop" => "wd19333"
    ],
    ["ho_ten" => "Nguyễn Thị 2",
    "masv" => "PH56328",
    "lop" => "wd19332"
    ],
    ["ho_ten" => "Nguyễn Thị 3",
    "masv" => "PH56327",
    "lop" => "wd19331"
    ]

];

// hiển thị giá trị 
// cú pháp $tên_mảng[vị trí mảng cần truy cập ][key]
echo ("<br>");
echo $arr2[0]["ho_ten"];

// hiển thị ra thông tin của cả 3 người



// hiển thị thông tin của người thứ 2 

echo $arr2 [1]["ho_ten"];
echo ("<br>");
echo $arr2 [1]["masv"];
echo ("<br>");
echo $arr2 [1]["lop"];
echo ("<br>");
foreach($arr2[1] as $item){
    echo $item . " ";
};


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Danh sách Nyc</h2>
<!-- hiển thị danh sách nyc của mảng trên table -->
<table border="1px">
    <thead  >
        <td>stt</td>
        <td>họ tên</td>
        <td>Mã sinh viên</td>
        <td>lớp</td>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        foreach ($arr2 as $NYC) :  ?>
        <!-- công việc cần lặp lại  -->
        <tr>
            <td><?= $stt++;  ?></td>
            <td> <?php echo $NYC["ho_ten"] ?> </td>
            <td><?php echo $NYC["masv"] ?> </td>
            <td> <?php echo $NYC["lop"] ?></td>
        </tr>
        <?php endforeach ;?>
    </tbody>
</table>

<!-- tạo 1 mảng thông tin sinh viên gồm tuổi năm sinh điểm tb hiển thị 
toàn bộ thông tin sinh viên ra table
tạo 1 cột ở cuối bảng hiênr thị nếu điểm tb nhỏ hơn 5 là failed >= 5 thì sẽ hiển thị pass
tạo 1 cột ở cuối bảng  tuổi cuối bảng và hiển thị 
Nếu tuối <18 thì màu background là màu red
Nếu tuối >=18 thì màu background là màu green -->

<?php 
$baitap =[
    [
        "ten" => "Tạ Văn Định",
        "namsinh" => "2005",
        "tuoi" => "19",
        "diemtb" => "4.95",
    ],
    [
        "ten" => "Trịnh Thị Vân ",
        "namsinh" => "2007",
        "tuoi" => "17",
        "diemtb" => "8.0",
    ],
    [
        "ten" => "Trương Nguyễn Ánh Tuyết",
        "namsinh" => "2007",
        "tuoi" => "19",
        "diemtb" => "7.5",
    ],
    [
        "ten" => "Bùi Đình Thuận",
        "namsinh" => "2006",
        "tuoi" => "18",
        "diemtb" => "4.99",
    ]
]
?>


<h2> Hiển thị thông tin sinh viên</h2>
<h3>Trịnh Thị Vân PH56329</h3>
<table border ="1px">
    <thead >
        <td>STT</td>
        <td>Họ tên</td>
        <td> Năm Sinh</td>
        <td>Điểm Tb</td>
        <td> Tuổi</td>
        <td>Trung bình</td>

    </thead>

 <tbody>
    <?php $st = 1; 
    $tuoi = 0;
    foreach($baitap as $sinhvien) : 
        $tuoi = 2024 - $sinhvien['namsinh'];
        ?>
    
    <tr>     <td><?= $st ++?></td>
            <td><?= $sinhvien["ten"] ?></td>
            <td><?= $sinhvien["namsinh"] ?></td>
            <td><?= $sinhvien["diemtb"] ?></td>
            <td style="background-color:<?= $tuoi >= 18 ? 'violet' : 'pink' ?>;"> <?= $tuoi ?></td>
            <td><?= $sinhvien["diemtb"] >= 5 ? "Qua môn" : "Toạch" ?></td>          
    </tr>
 </tbody>
    <?php endforeach ?>


</table>
    
</body>
</html>



