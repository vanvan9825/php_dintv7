<?php
require_once('connect.php');
if(isset($_GET["id_user"])){
    $id = $_GET["id_user"];
    echo $id;

    // viet cau truy van

    $sql_delete = "DELETE FROM users WHERE id = '$id' ";
    $stmt_delete = $pdo->prepare($sql_delete);
    $stmt_delete->execute();

    // quay veè trạng thái index sau khi xóa
    header("location: buoi14.php");
}

?>