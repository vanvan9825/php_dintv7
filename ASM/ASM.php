<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.container table {
    border-collapse: collapse;
    width: 100%;
    margin: 0;
    padding: 0;
}
  
.container table tr:nth-child(2n + 1) {
    background-color:#f3d5f7;
}
  
.container table tr:nth-child(2n) {
    background-color:violet;
}
  
.container table tr td, .container table tr th {
    padding: 12px;
    text-align: left;
}
    </style>
</head>
<body>
<div class="container">
<?php

$list = [
  ["Masp" => "sp1003", "tensp" => "samsung", "soluong" => 100,  "gia" => 12000 , "ngaynhap" => "2/2/2024", "trangthai" => "1"],
  ["Masp" => "sp1004", "tensp" => "IP14", "soluong" => 98, "gia" => 18000 , "ngaynhap" => "2/1/2024", "trangthai" => "1"],
  ["Masp" => "sp1005", "tensp" => "oppo", "soluong" => 150, "gia" => 12000 , "ngaynhap" => "18/3/2024", "trangthai" => "0"],
  ["Masp" => "sp1006", "tensp" => "xiaomi", "soluong" => 80, "gia" => 12000 , "ngaynhap" => "20/1/2024", "trangthai" => "1"]
];


  
?>

<h1>Danh sách sản phẩm</h1>
<table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Ngày nhập</th>
                <th>Trạng thái</th>
            </tr>
            <?php
            foreach ( $list as $product ) {
            ?>
                    <tr>
                        <td><?= $product["Masp"] ?></td>
                        <td><?= $product["tensp"] ?></td>
                        <td><?= $product["soluong"] ?></td>
                        <td><?= $product["gia"] ?></td>
                        <td><?= $product["ngaynhap"] ?></td>
                        <td><?= $product["trangthai"] == 1 ? "Còn hàng": "Hết hàng" ?></td>
                    </tr>    
            <?php
            }
            ?>
        </table>

        <?php
 
         $search_sp = "sp1003";
        ?>

        <h3>Kết quả tìm kiếm cho mã sản phẩm: <?= $search_sp ?></h3>
        <table>
           <?php 
           
          
           
           foreach ($list as $product ){
              if($product["Masp"] == $search_sp){
            ?>
            <tr> 
            <td><?= $product["Masp"] ?></td>
            <td><?= $product["tensp"] ?></td>
            <td><?= $product["soluong"] ?></td>
            <td><?= $product["gia"] ?></td>
            <td><?= $product["ngaynhap"] ?></td>
            <td><?= $product["trangthai"] == 1 ? "Còn hàng": "Hết hàng" ?></td>
             </tr>    
            </tr>
            <?php
            }

           }
           ?>
        </table>
       
</div>



         

</body>
</html>