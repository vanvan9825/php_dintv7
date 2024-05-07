<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container table {
            border-collapse: collapse;
            width: 60%;
            margin: 0 auto;
            padding: 0;
        }

        .container table tr:nth-child(2n + 1) {
            background-color: pink;
        }

        .container table tr:nth-child(2n) {
            background-color: violet;
        }

        .container table tr td,
        .container table tr th {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php

        $list = [
            ["Masp" => "sp1003", "tensp" => "samsung", "soluong" => 100,  "gia" => 12000, "ngaynhap" => "2/2/2024", "trangthai" => "1"],
            ["Masp" => "sp1004", "tensp" => "IP14", "soluong" => 98, "gia" => 18000, "ngaynhap" => "2/1/2024", "trangthai" => "1"],
            ["Masp" => "sp1005", "tensp" => "oppo", "soluong" => 150, "gia" => 12000, "ngaynhap" => "18/3/2024", "trangthai" => "0"],
            ["Masp" => "sp1006", "tensp" => "xiaomi", "soluong" => 80, "gia" => 12000, "ngaynhap" => "20/1/2024", "trangthai" => "1"]
        ];



        ?>

        <h1>Danh sách sản phẩm</h1>
        <table border="1px">
            <thead>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Ngày nhập</th>
                <th>Trạng thái</th>
            </thead>
            <?php
            foreach ($list as $product) {
            ?>
                <tbody>
                    <td><?= $product["Masp"] ?></td>
                    <td><?= $product["tensp"] ?></td>
                    <td><?= $product["soluong"] ?></td>
                    <td><?= $product["gia"] ?></td>
                    <td><?= $product["ngaynhap"] ?></td>
                    <td><?= $product["trangthai"] == 1 ? "Còn hàng" : "Hết hàng" ?></td>
                </tbody>
            <?php
            }
            ?>
            <br>
        </table>








        <form action="" method="GET">
            <label for=""> Tìm Kiếm Tuyệt Đối: </label>
            <input type="text" name="tuyet_doi" id="">
            <button type="submit">SUBMIT</button>
        </form>

        <table border="1px">

            <?php 
            $key_tuyet_doi = isset($_GET["tuyet_doi"]) ? isset($_GET['tuyet_doi']) : '';
            $search = [];
            foreach($list as $li) :

                if(
                    $key_tuyet_doi == $li['Masp'] ||
                    $key_tuyet_doi == $li['tensp'] ||
                    $key_tuyet_doi == $li['soluong'] ||
                    $key_tuyet_doi == $li['gia'] ||
                    $key_tuyet_doi == $li['ngaynhap'] ||
                    $key_tuyet_doi == $li['trangthai'] 
                ){
                    array_push($search,$li);
                }
                ?>

            <?php 
            endforeach;

        


            if (!empty($searchsp)) {
            ?>

                <thead>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Ngày nhập</th>
                    <th>Trạng thái</th>
                </thead>
                <?php
                foreach ($searchsp as $key => $li) :
                ?>
                    <tbody>

                        <td><?= $li["Masp"] ?></td>
                        <td><?= $li["tensp"] ?></td>
                        <td><?= $li["soluong"] ?></td>
                        <td><?= $li["gia"] ?></td>
                        <td><?= $li["ngaynhap"] ?></td>
                        <td><?= $li["trangthai"] == 1 ? "Còn hàng" : "Hết hàng" ?></td>
                    </tbody>

            <?php
                endforeach;
            }

            ?>
        </table>


        <form action="" method="GET">
            <label for=""> Tìm Kiếm Tương Đối: </label>
            <input type="text" name="tuong_doi" id="">
            <button type="submit" name="bt">SUBMIT</button>
        </form>

       <table>
       <?php
       if ( isset($_GET['bt'])) {
        if (isset($_GET['tuong_doi'])) {
            $key_tuong_doi = trim($_GET['tuong_doi']);
            $search2 = [];
            foreach ($list as $li) {
                if (
                    strpos($li['Masp'], $key_tuong_doi) !== FALSE ||
                    strpos($li['tensp'], $key_tuong_doi) !== FALSE ||
                    strpos($li['soluong'], $key_tuong_doi) !== FALSE ||
                    strpos($li['gia'], $key_tuong_doi) !== FALSE ||
                    strpos($li['ngaynhap'], $key_tuong_doi) !== FALSE ||
                    strpos($li['trangthai'], $key_tuong_doi) !== FALSE
                ) {
                    array_push($search2, $li);
                }
            }
        }
       }
        if (!empty($search2)) {
        ?>
           
               
                <thead>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Ngày nhập</th>
                    <th>Trạng thái</th>
                </thead>
                <?php
                foreach ($search2 ?: $list as $key => $li) :
                ?>
                    <tbody>

                        <td><?= $li["Masp"] ?></td>
                        <td><?= $li["tensp"] ?></td>
                        <td><?= $li["soluong"] ?></td>
                        <td><?= $li["gia"] ?></td>
                        <td><?= $li["ngaynhap"] ?></td>
                        <td><?= $li["trangthai"] == 1 ? "Còn hàng" : "Hết hàng" ?></td>
                    </tbody>
              
            <?php
                endforeach;
            }
            ?>
            

       </table>
    </div>




    <div class="logout">
        <a href="logout.php">Đăng xuất</a>
    </div>
</body>

</html>