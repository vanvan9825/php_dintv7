<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 
        Tạo mảng thông tin 3 sinh viên gồm các thuộc tính
        Họ tên, Năm sinh, Điểm trung bình
        Hiển thị toàn bộ thông tin sinh viên ra HTML dưới dạng table

        Tạo 1 cốt Trạng thái ở cuối bảng hiển thị
        Nếu điểm TB < 5 hiển thị "Toạch", >= 5 hiển thị "Qua môn"

        Tạo 1 cột Tuổi ở cuối bảng
        Thực tính tuổi và hiển thị ra
        Nếu tuổi < 18 thì màu backgroub là màu đỏ
        Nếu tuổi >= 18 thì màu backgroub là màu xanh (green)
     -->

     <?php
    $sinh_vien = [
        [
            "ho_ten" => "DinhTv7",
            "nam_sinh" => 2007,
            "diem_tb" => 8.5
        ],
        [
            "ho_ten" => "AnhND120",
            "nam_sinh" => 1997,
            "diem_tb" => 4.5
        ],
        [
            "ho_ten" => "LoanTT",
            "nam_sinh" => 1968,
            "diem_tb" => 8.5
        ]
    ]
    ?>
    <h2>Danh sách sinh viên</h2>

    <table border="1">
        <thead>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Năm sinh</th>
            <th>Điểm TB</th>
            <th>Tuổi</th>
            <th>Trạng thái</th>
        </thead>
        <tbody>
            <?php
            foreach ($sinh_vien as $key => $sv) {
                $tuoi = date("Y") - $sv["nam_sinh"];
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $sv["ho_ten"] ?></td>
                    <td><?= $sv["nam_sinh"] ?></td>
                    <td><?= $sv["diem_tb"] ?></td>
                    <td style="background-color: <?= $tuoi < 18 ? 'red' : 'green' ?>;"><?= $tuoi ?></td>
                    <td><?= $sv["diem_tb"] < 5 ? 'Toạch' : 'Qua môn' ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h2>Search tuyệt đối</h2>
    <form action="" method="GET">
        <label for="">Search tuyệt đối:</label>
        <input type="text" name="tuyet_doi">

        <button type="submit">SUBMIT</button>
    </form>

    <?php
    // Kiểm tra xem người dùng có điền giá trị hay ko
    $key_tuyet_doi = isset($_GET["tuyet_doi"]) ? $_GET["tuyet_doi"] : '';

    // Tạo 1 mảng để chứa dữ liệu sau khi tìm kiếm
    $searchSV = [];
    // Tìm kiếm tuyệt đối
    foreach ($sinh_vien as $sv) {
        if ($sv["ho_ten"] == $key_tuyet_doi || $sv["nam_sinh"] == $key_tuyet_doi || $sv["diem_tb"] == $key_tuyet_doi) {
            # Hiển thị toàn bộ thông tin sinh viên
            // Thêm những SV có thông tin tìm kiếm vào 1 mảng
            array_push($searchSV, $sv);
        }
    }
    print_r($searchSV);

    // isset: trả về TRUE nếu biến tồn tại và có giá trị khác null
    // empty: trả về TRUE nếu bến KHÔNG tồn tại hoặc có giá trị rỗng

    if (!empty($searchSV)) {

    ?>
        <table border="1">
            <thead>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Năm sinh</th>
                <th>Điểm TB</th>
                <th>Tuổi</th>
                <th>Trạng thái</th>
            </thead>
            <tbody>
                <?php
                foreach ($searchSV as $key => $sv) {
                    $tuoi = date("Y") - $sv["nam_sinh"];
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $sv["ho_ten"] ?></td>
                        <td><?= $sv["nam_sinh"] ?></td>
                        <td><?= $sv["diem_tb"] ?></td>
                        <td style="background-color: <?= $tuoi < 18 ? 'red' : 'green' ?>;"><?= $tuoi ?></td>
                        <td><?= $sv["diem_tb"] < 5 ? 'Toạch' : 'Qua môn' ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>

    <h2>Search tương đối</h2>
    <form action="" method="GET">
        <label for="">Search tương đối:</label>
        <input type="text" name="tuong_doi">

        <button type="submit">SUBMIT</button>
    </form>

    <?php
    // strpos(): Tìm kiếm 1 chuỗi con nằm trong 1 chuỗi khác
    // strpos(Chuỗi mẹ, Chuỗi con muốn tìm kiếm);
    // Nếu có thì trả về vị trí đầu tiên của chuỗi con trong chuỗi mẹ
    // Nếu ko có thì trả về FALSE

    // Lấy ra giá trị từ form nhập vào
    $key_tuong_doi = isset($_GET["tuong_doi"]) ? $_GET["tuong_doi"] : '';

    $searchSV_2 = [];

    foreach ($sinh_vien as $sv){
        if (
            // Nếu có giá trị thỏa mãn thì khác FALSE
            strpos($sv["ho_ten"], $key_tuong_doi) !== FALSE ||
            strpos($sv["nam_sinh"], $key_tuong_doi) !== FALSE ||
            strpos($sv["diem_tb"], $key_tuong_doi) !== FALSE
        ) {
            array_push($searchSV_2, $sv);
        }
    }

    if (!empty($searchSV_2)) {
    ?>
    <table border="1">
            <thead>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Năm sinh</th>
                <th>Điểm TB</th>
                <th>Tuổi</th>
                <th>Trạng thái</th>
            </thead>
            <tbody>
                <?php
                foreach ($searchSV_2 as $key => $sv) {
                    $tuoi = date("Y") - $sv["nam_sinh"];
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $sv["ho_ten"] ?></td>
                        <td><?= $sv["nam_sinh"] ?></td>
                        <td><?= $sv["diem_tb"] ?></td>
                        <td style="background-color: <?= $tuoi < 18 ? 'red' : 'green' ?>;"><?= $tuoi ?></td>
                        <td><?= $sv["diem_tb"] < 5 ? 'Toạch' : 'Qua môn' ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>


 </body>

</html>