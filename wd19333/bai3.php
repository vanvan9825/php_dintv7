<?php
$danhsachsanpham = array(
    array(
        "id"=> "1",
        "name"=> "ao phong den",
        "sku"=> "dirtycoins",
        "price"=> "400000",
        "cost"=> "350000",
    ),
    array(
        "id"=> "2",
        "name"=> "ao phong trang",
        "sku"=> "dirtycoins",
        "price"=> "450000",
        "cost"=> "400000",
    ),
);
$danhSachThoaMan = array();

if (!isset($_GET["tenSanPham"]) || $_GET["tenSanPham"] == "") {
    $danhSachThoaMan = $danhsachsanpham;
}  else {
    $tenTimKiem = $_GET["tenSanPham"];
    foreach ($danhsachsanpham as $value) {
        $ten = $value["name"];
        
        if (stripos($ten, $tenTimKiem) !== false) {
            $danhSachThoaMan[] = $value;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <style>
    td,th{
        border: 1px solid black;
        padding: 30px;
        
    }
   </style>
<body>
<div>
        <div>Bộ lọc tương đối</div>
       
        <form action="" method="GET">
            <span>Tên sản phẩm: </span>
            <input type="text" name="tenSanPham">
            <button type="submit"> Tìm kiếm </button>
        </form> 
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Sku</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($danhSachThoaMan as $sp) {
                    echo "<tr>";
                    echo "<td>" .$sp["id"]. "</td>";
                    echo "<td>". $sp["name"]. "</td>";
                    echo "<td>". $sp["price"]. "</td>";
                    echo "<td>". $sp["sku"]. "</td>";
                    echo "<td>". $sp["cost"]. "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>