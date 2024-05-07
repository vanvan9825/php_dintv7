<?php
$sv1 = [
    "ho_ten" => "Tạ Văn Định",
    "lop" => "WD12345"
];

// Mảng 2 chiều 
// Tức là các phần tử của mảng đó là 1 mảng khác

$sinh_vien = [
    [
        "ho_ten" => "Tạ Văn Định",
        "lop" => "WD12345",
        "namsinh" => "2005"
    ],
    [
        "ho_ten" => "DinhTV7",
        "lop" => "WD54321",
        "namsinh" => "2012"
    ]
];
// in ra DinhTV7
// echo $sinh_vien[1]["ho_ten"] . "</br>";

// Duyệt ra tất cả các giá trị
// foreach ($sinh_vien as $sv) 
// {
//     print_r($sv);
//     echo "</br>";
//     foreach ($sv as $value)
//     {
//         echo $value . "</br>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <thead>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Lớp</th>
            <th>Tuổi</th>
        </thead>
        <tbody>
            <?php 
                // Khai báo thêm thuộc tính nam_sinh trong mảnh sinh_vien
                // Thực hiện việc tính tuổi và hiển thị tuổi ra bảng
                // Nếu tuổi < 18 thì ô hiển thị tuổi có màu đỏ
                // Nếu tuổi >= 18 thì ô hiển thị tuổi có màu xanh
                $stt = 1;
                $tuoi = 0;
                foreach($sinh_vien as $key => $sv) :
                    $tuoi = 2024 - $sv["namsinh"];
               
            ?>
                <tr>
                    <td><?= $stt++ ?></td>
                    <td><?= $sv["ho_ten"] ?></td>
                    <td><?= $sv["lop"] ?></td>
                    <td style="background-color: <?= $tuoi < 18 ? "red " : " blue" ?>;"><?= $tuoi ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
