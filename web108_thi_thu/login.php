<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h5>Đăng nhập</h5>

    <form action="" method="POST">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="username" required>
        </br>
        <label for="">Mật khẩu:</label>
        <input type="text" name="password" required>

        <button type="submit" name="login">SUBMIT</button>
    </form>

    <?php 
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if ($username == "DinhTV7" && $password == "12345678") {
                session_start();
                $_SESSION["username"] = $username;

                header("Location: index.php");
            } else {
                echo "<script>alert('Thông tin đăng nhập sai')</script>";
            }
        }
    ?>
</body>
</html>