<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="POST">
        <label for="" >username</label>
        <input type="text" name="username" require>
        <label for="" >password</label>
        <input type="password" name="password" require>
        <button type="submit" name="login">submit</button>
    </form>

    <?php 
  
    $list=[
        [
            'username' => 'tvan195',
            'password' => '12345678'
        ],
        [
            'username' => 'dinhtv7',
            'password' => '123456'
        ],
        [
            'username' => 'namtt23',
            'password' => '1234567890'
        ]
        ];
  





    if(isset($_POST['login'])){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        foreach($list as $pro){
            if($user == $pro['username'] && $pass == $pro['password']){
                session_start();
                $_SESSION['username'] = $user;
                header('Location: thithu.php');
            } else {
                echo "<script>alert('Thông tin đăng nhập sai')</script>";
            }
        }
    }
    
    
    
    ?>


 

</body>
</html>