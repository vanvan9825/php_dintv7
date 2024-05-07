<?php
// Làm việc với mảng 2 chiều
// GET, POST
// SESSION, COOKIE
// Kết nối CSDL

$arr = [1, 2, 1, 3, 3, 4, 5, 3, 6, 7, 8, 9];
$arr_2 = [
    "ho_ten" => "DinhTV7",
    "lop" => "WD12345"
];

// Các hàm dùng sẵn làm việc với mảng
// count: đếm tổng số các phần tử trong mảng
echo count($arr);

// array_keys: Lấy các key (vị trí) của phần tử trong mảng mảng 
// và đưa chúng vào 1 mảng khác
print_r(array_keys($arr));
echo "</br>";
print_r(array_keys($arr_2));
echo "</br>";

// array_values: Lấy các giá trị của các phần tử trong mảng
// Và đưa chúng vào 1 mảng khác
print_r(array_values($arr_2));
echo "</br>";

// Thêm 1 hoặc nhiều phần tử vào cuối mảng
// array_push($arr, 20, 21, 22, "DinhTV7 ĐZ");

// Xóa 1 phần tử cuối cùng trong mảng
// array_pop($arr);

// Xóa phần tử đầu tiên trong mảng
// array_shift($arr);

// Thêm 1 hoặc nhiều phần tử vào đầu mảng
// array_unshift($arr, "DinhDZ", "ABC", 222);

// Tìm kiếm giá trị trong mảng
// Nếu có thì sẽ trả về vị trí của phần tử đó trong mảng chứa nó
// array_search(giá trị tìm kiếm, mảng tìm kiếm)
echo array_search(9, $arr); // Tìm kiếm đúng tuyệt đối
echo "</br>";

echo array_search("DinhTV7", $arr_2);
echo "</br>";

// Loại bỏ các phần tử có giá trị bằng nhau nhưng vị trị các phần khác sẽ ko thay đổi
// array_unique
print_r(array_unique($arr));
echo "</br>";

// Tìm giá trị trong mảng
// Kiểm tra xem trong mảng có tồn tại giá trị nào đó hay ko
// Nếu có thì trả về TRUE còn ko có thì trả về FALSE
var_dump(in_array(20, $arr));

// Kiểm tra xem đây có phải là 1 mảng hay không
// Nếu là 1 mảng thì trả ra TRUE còn ngược lại trả ra FALSE
var_dump(is_array($arr));

print_r($arr);
?>

<!-- Form (GET, POST) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Form là 1 cách để người dùng có thể tương tác với dữ liệu -->
    <form action="" method="">
        <!-- 
            action: chỉ đích đến của dữ liệu sau khi người dùng ấn gửi
                    (Nếu ko điền thì dữ liệu sẽ được xử lý ở trang hiện)
            method: xác định phương thức HTTP sử dụng. (GET và POST)
         -->
        <input type="text" name="ho_ten">
        <!-- 
            name: là key
            sử dụng để xác định tên của các trường dữ liệu khi gửi lên SERVER
          -->

        <button type="submit">SUBMIT</button>
    </form>
    <h1>Phương thức GET</h1>
    <!-- 
        - Dữ liệu được gửi thông qua URL, và sẽ được hiển thị trức tiếp trên URL
        - Ưu điểm: truyền tải dữ liệu nhanh, hiện hữu
        - Nhược điểm: Không bảo mật thường được sử dụng trong các tác vụ nhỏ
                    ko cần đến độ bảo mật cao
                    (search, truyền dữ liệu qua lại giữa các trang)
     -->
    <form action="test_buoi4.php" method="GET">
        <label for="">Họ và tên:</label>
        <input type="text" name="ho_ten">
        <label for="">Lớp:</label>
        <input type="text" name="lop">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
        // GET:
        // - Dữ liệu sẽ đc truyền lên URL, nó sẽ ở dưới dạng 1 mảng liên hợp
        // - Key chính là trường name ở trong ô input
        // - Giá trị chính là dữ liệu mà các bạn nhập vào ô input

        // Lấy ra toàn bộ giá trị
        var_dump($_GET);

        // Lấy ra từng giá trị
        // Bắt bộc trc in ra giá trị thì phải kiểm tra
        if (isset($_GET["ho_ten"])) {
            echo $_GET["ho_ten"];
        }
    ?>

    <h1>Phương thức POST</h1>
    <!-- 
        - Dữ liệu nó sẽ được gửi ngầm về phía server
        - Có độ bảo mật tốt hơn GET
        - Thường được sử dụng trong các tác vụ khi làm việc 
        với dữ liệu quan trọng (Thêm dữ liệu, sửa dữ liệu, đăng nhặp đăng ký)
     -->
    <form action="" method="POST">
        <label for="">Họ và tên:</label>
        <input type="text" name="ho_ten">
        <label for="">Lớp:</label>
        <input type="text" name="lop">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
        // POST:
        // - Dữ liệu sẽ đc gửi ngầm lên server
        // - nó sẽ ở dưới dạng 1 mảng liên hợp
        // - Key chính là trường name ở trong ô input
        // - Giá trị chính là dữ liệu mà các bạn nhập vào ô input

        // Lấy ra toàn bộ thông tịn gửi đi
        var_dump($_POST);

        // Lấy ra từng giá trị
        // Bắt bộc trc in ra giá trị thì phải kiểm tra
        if (isset($_POST["ho_ten"])) {
            echo $_POST["ho_ten"];
        }
    ?>
    <!-- 
        Tạo 1 form đăng nhập sử dụng method POST
        Yêu cầu nhập vào 2 thông tin username, password
        Nếu username = "thaydinhdeptrai", password = "12345678"
        In ra Xin chào thầy định đẹp tả
        Ko đúng thì in ra chúc bạn may mắn lần sau
     -->
</body>

</html>