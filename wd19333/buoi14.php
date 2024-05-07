<?php

   // hiển thị danh sách người dùng trong database
   // require();
   // include();
   // require_once();
   // include_once();

   require_once('connect.php');
   // echo "file index";

   $sql_listuser = 'SELECT * FROM users';
   // chuan bi truy van
   $sql_listuser = $pdo->prepare($sql_listuser);

   // chay cau truy van
   $sql_listuser->execute();
   // hieenr thi laay du lieu 
   // fetchall dùng để trả ra nhiều dữ liệu
   $listuser =   $sql_listuser->fetchAll(PDO::FETCH_ASSOC);
   // PDO::FETCH_ASSOC dùng xóa các key thừa có trong db

   // var_dump($listuser);
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h3>danh sach nguoi dung</h3>
   <h2>them nguoi dung</h2>
   <button>
      <a href="cre.php">thêm</a>
   </button>
  
   <table border="1px">
      <thead>
         <td>ID</td>
         <td>Họ Tên</td>
         <td>Email</td>
         <td>Phone</td>
         <td>status</td>
         <td>Action: </td>
      </thead>
      <tbody>
         <?php
         foreach ($listuser as $list){
            ?>
            <tr>
            <td><?=$list['id']?></td>
            <td><?=$list['name']?></td>
            <td><?=$list['email']?></td>
            <td><?=$list['phone']?></td>
            <td><?=$list['status'] == 0 ? "đang thất học" : "đang mất dạy"?></td>
            <td>
               <a href="delete.php?id_user=<?=$list['id']?>" onclick="return confirm('bạn có muốn xóa hay không')">
            <button type="">xóa</button>
            </td>
            <td>
               <a href="update.php?id_user=<?=$list['id']?>" onclick="return confirm('bạn có muốn sửa hay không')">
            <button type="">sửa</button>
            </td>
   
            </tr>
           


    <?php
         }
         ?>
      </tbody>
   </table>

   <!-- btvn
    tạo 2 nút thêm sau khi ấn vào nút thêm sẽ chuyển sang trang 
    thêm người dùng (tạo 1 form có đầy đủ các ô input của các trường)
    sử dụng phương thưcs post để hiển thị ra thông tin đã nhập 
   -->
</body>
</html>