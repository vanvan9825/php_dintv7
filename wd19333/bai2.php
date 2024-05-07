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
    $danhSachsanpham = array();

    // 2. Kiểm tra giá trị nhập vào
    // TH1: ko điên dữ liệu => Gán toàn bộ mảng vào danh sách thỏa mãn
    // TH2: Có điền dữ liệu => Duyệt mảng gốc để tìm được phần tử thỏa mãn
    if (!isset($_GET["tenSanPham"]) || $_GET["tenSanPham"] == "") {
        $danhsachthoaman = $danhsachsanpham;
    }  else {
         // 3. Lấy giá trị người dùng cần tìm kiếm hiển thị trên url
        $tenTimKiem = $_GET["tenSanPham"];
        echo "<br>";
        echo "Giá trị nhập vào là: ". $tenTimKiem;
        foreach ($danhsachsanpham as $value) {
            $ten = $value["name"];

            // So sánh với nội dung nhập vào để tìm được phần tử có tên = tên mong muốn
            $tensptrim = trim($ten);
            $tentimtrim =  trim($tenTimKiem);
            if (strcasecmp ( $tensptrim, $tentimtrim) == 0) {
                // Push dữ liệu vào mảng thỏa mãn
                array_push($danhsachsanpham, $value);
                // var_dump($danhSachThoaMan);
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
        <div>Bộ lọc tuyệt đối</div>
       
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
                foreach($danhsachsanpham as $sp) {
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