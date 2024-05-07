<?php
/* ASM 1
- Tạo 1 mảng dữ liệu sản phẩm (mảng 2 chiều) có các thuộc tính:
Mã sản phẩm, Tên sản phẩm, Số lượng, Giá, Ngày nhập, Trạng thái 
(0 là hết hàng, 1 là còn háng)
- Xây dựng giao diện trang danh sách sản phẩm
- Hiển thị tất cả dữ liệu trong sản phẩm trên ra bảng
ở trang danh sách sản phẩm
- Thực hiện tìm kiếm sản phẩm theo mã sản phẩm (Tìm kiếm tuyệt đối)
(Nội dung tìm kiếm khai báo giá trị vào 1 biến) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASM1_PHP</title>
    <link rel="stylesheet" href="./asm.css">
</head>
<body>
<div class="container">
        <?php
            $products = [
                [ "id"=> "SP01", "name"=> "Sản phẩm 1", "so_luong" => 20, "price" => 20000, "ngay_nhap" => "2024-03-21", "trang_thai" => "Còn hàng"],
                [ "id"=> "SP02", "name"=> "Sản phẩm 2", "so_luong" => 33, "price" => 10000, "ngay_nhap" => "2024-03-21", "trang_thai" => "Còn hàng"],
                [ "id"=> "SP03", "name"=> "Sản phẩm 3", "so_luong" => 0, "price" => 98000, "ngay_nhap" => "2024-03-21", "trang_thai" => "Hết hàng"]
            ];
       
        ?>
        <h3>Danh sách sản phẩm</h3>
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
            foreach ( $products as $product ) {
            ?>
                    <tr>
                        <td><?= $product["id"] ?></td>
                        <td><?= $product["name"] ?></td>
                        <td><?= $product["so_luong"] ?></td>
                        <td><?= $product["price"] ?></td>
                        <td><?= $product["ngay_nhap"] ?></td>
                        <td><?= $product["trang_thai"] == 1 ? "Còn hàng": "Hết hàng" ?></td>
                    </tr>    
            <?php
            }
            ?>
        </table>

        <?php
        // Thực hiện tìm kiếm sản phẩm theo mã sản phẩm (Tìm kiếm tuyệt đối)
        // (Nội dung tìm kiếm khai báo giá trị vào 1 biến)
         $search_sp = "SP002";
        ?>

        <h3>Kết quả tìm kiếm cho mã sản phẩm: <?= $search_sp ?></h3>
        <table>
            <?php
            foreach ( $products as $product ) {
                if ($product["id"] == $search_sp) {
                    ?>
                    <tr>
                        <td><?= $product["id"] ?></td>
                        <td><?= $product["name"] ?></td>
                        <td><?= $product["so_luong"] ?></td>
                        <td><?= $product["price"] ?></td>
                        <td><?= $product["ngay_nhap"] ?></td>
                        <td><?= $product["trang_thai"] == 1 ? "Còn hàng": "Hết hàng" ?></td>
                    </tr>                    
                    <?php
                }
            }
            ?>
        </table>
       
    </div>
</body>
</html>
    