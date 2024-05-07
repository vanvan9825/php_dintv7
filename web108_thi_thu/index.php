<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $products = [
        [
            "id" => 1,
            "name" => "Sản phẩm 1",
            "sku" => "SP001",
            "price" => 12000,
            "cost" => 10000
        ],
        [
            "id" => 2,
            "name" => "Sản phẩm 2",
            "sku" => "SP002",
            "price" => 15000,
            "cost" => 11000
        ]
    ];

    // Câu đăng nhập
    session_start();

    if (isset($_SESSION["username"])) {
        echo "Xin chào " . $_SESSION["username"];
    } else {
        header("Location: login.php");
    }

    ?>
    <h3>Danh sách sản phẩm</h3>

    <a href="logout.php">Đăng xuất</a>

    <form action="" method="GET">
        <input type="text" name="keysearch1">

        <button type="submit" name="search1">SEARCH</button>
    </form>
  

    <table border="1">
        <thead>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số hiệu</th>
            <th>Giá bán</th>
            <th>Giá nhập</th>
        </thead>
        <tbody>
            <?php
            if (isset($_GET["search1"]) && isset($_GET["keysearch1"])) {
                $keysearch = $_GET["keysearch1"];
                $ket_qua = [];
                foreach ($products as $pro) {
                    // Tìm kiếm tuyệt đối
                    // if (
                    //     $pro["name"] == $keysearch ||
                    //     $pro["sku"] == $keysearch ||
                    //     $pro["price"] == $keysearch ||
                    //     $pro["cost"] == $keysearch
                    // ) 
                    // {
                    //     array_push($ket_qua, $pro);
                    // }
                    // Hết tìm kiếm tuyệt đối

                    // -------------------------------------//

                    // Tìm kiếm tương đối
                    if (
                        // strpos(): Tìm kiếm 1 chuỗi con trong chuỗi mẹ
                        // Nếu có trả về vị trí của kí tự đầu tiên
                        // Nếu ko có thì trả về FALSE
                        strpos($pro["name"], $keysearch) !== FALSE ||
                        strpos($pro["sku"], $keysearch) !== FALSE ||
                        strpos($pro["price"], $keysearch) !== FALSE ||
                        strpos($pro["cost"], $keysearch) !== FALSE
                    ) {
                        array_push($ket_qua, $pro);
                    }
                }
                // Nếu ko có sản phẩm nào thì hiển thị thông báo
                if (empty($ket_qua)) {
                    echo "<script>alert('Không có sản phẩm nào')</script>";
                }
            }

            foreach (!empty($ket_qua) ? $ket_qua : $products as $key => $pro) {
            ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $pro["name"] ?></td>
                    <td><?= $pro["sku"] ?></td>
                    <td><?= $pro["price"] ?></td>
                    <td><?= $pro["cost"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>
<!-- Thứ 3,5,7: ca 4,5 phòng P302 và P309 -->