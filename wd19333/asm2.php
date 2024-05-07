<?php
session_start();//Khởi tạo 1 session
include('info.php');

if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){ 
    header('Location: ASM.php'); 
}
if(isset($_POST['submit']) && $_POST['submit'] == 'login'){
    $username =$_POST['username'];
    $password = $_POST['password'];
    foreach($list as $row){
        if( $username == $row['username'] && $password == $row['password'] ){
            $_SESSION['logged'] = true;
            $_SESSION['username'] =  $username;
            header('Location: ASM.php');
        }else if (
            $username == $row["username"] ||
            $password == $row["password"]) {
                ?>
                <p style="color: red;"><?= "Sai thông tin đăng nhập"; ?></p>
                <?php
            }
    }
}
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login page</title>
        <style>
        form *{margin:10px;padding:5px;}
        </style>
    </head>
    <body>
        <h1>Đây là trang login</h1>
        <form method="post" action="">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username"><br>
            <label for="password">Mật khẩu: </label>
            <input type="password" name="password" id="password"><br>
            <button type="submit" name="submit" value="login">Đăng nhập</button>
        </form>
    </body>
</html>