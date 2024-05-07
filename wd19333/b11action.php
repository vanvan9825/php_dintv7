<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xin chao</h1>

    <?php
    
if (isset($_GET["ho_ten"])) {
    $name = $_GET["ho_ten"] ;
}
echo"<br>";
if (isset($_GET["lop"])) {
    $class= $_GET["lop"] ;
} 
    ?>







<h1><?=$name?></h1>
<h1><?=$class?></h1>
</body>
</html>