
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <style>
    .all{
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        width: 420px;
        border: 1px solid black;
        padding: 20px 20px ;
        height: auto;
    }

  </style>
<body>
    <div class="all">
    <h3>Trang đăng nhập</h3>
   
    <form action=""method="POST">
  
       <div>
          <span>Email:</span>
          <input type="text"name="email">
       </div>
       <br>

       <div>
        <span>Pass:</span>
        <input type="text" name="pass">
        </div>
        <br>
         <button type="submit">Đăng nhập</button>
            
    </form>
    </div>

    <?php
    // khởi tạo  1 session 
    session_start();
    // code logic php
    // kiểm tra giá trị nhập vào
    var_dump($_POST);
    // lấy gía trị các o input
    $email ="";
    if(isset( $_POST["email"] ) && $_POST["email"]!= ""){
      $email = $_POST["email"];
    }
    $pass ="";
    if(isset( $_POST["pass"] ) && $_POST["pass"]!= ""){
        $pass = trim( $_POST["pass"]);
    }
    // log thử giá trj người dùng nhập vào sau khi validate
    echo"<br>";
    echo"log giá trị người dùng nhập vào sau kho validate";
    var_dump($email);
    var_dump($pass);

    // xử lí đăng nhập
    $thonbao ="";
    if ($email!== "" && $pass !=="") {
        if($email=="admin@fpt.edu.vn" && $pass == "123456") {
            echo"Đăng nhập thành công";
            // lưu trử thông tin đăng nhập vào session
            //1.khởi tạo 
            // lưu giá trị vaod session
            $_SESSION["email"] = "$email";
            $_SESSION["pass"] = "$pass";
            // đièu hướng tới trang khác, danh sách sản phẩm
            header("Location:danhsachsanpham.php");

        } else{
            echo"Đăng nhập không thành công";
        }

        
    } else{
        echo $thongao = "đăng nhập không thành công. Mời bạn nhâp thông tin";
    }
?>
</body>
</html>