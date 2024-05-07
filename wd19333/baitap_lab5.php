<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $info = [
        [
            'ho_ten' => 'Trịnh Thị Vân',
            'nam_sinh' => 2005,
            'diem_tb' => 8.9
        ],
        [
            'ho_ten' => 'Trương Nguyễn Ánh Tuyết',
            'nam_sinh' => 2005,
            'diem_tb' => 8.0
        ],
        [
            'ho_ten' => 'Bùi Đình Thuân',
            'nam_sinh' => 2007,
            'diem_tb' => 4.5
        ],
        [
            'ho_ten' => 'Vũ Thùy Duyên',
            'nam_sinh' => 200,
            'diem_tb' => 4.9
        ]
    ]
    
    ?>
   <table border="1px">
    <thead>
        <th>STT</th>
        <th>Họ Tên</th>
        <th>Năm Sinh</th>
        <th>Điểm TB</th>
        <th>Tuổi</th>
        <th>Trạng Thái</th>
    </thead>
    
   <tbody>
   <?php
     foreach($info as $key => $sv){
        $tuoi = date("Y") - $sv['nam_sinh'];
        ?>
     
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $sv['ho_ten']?></td>
            <td><?= $sv['nam_sinh']?></td>
            <td><?= $sv['diem_tb']?></td>
            <td style="background-color: <? $tuoi < 18 ? 'violet' : 'pink' ?>;"><?= $tuoi?></td>
            <td><?= $sv['diem_tb'] < 5 ? '-30$' : 'Pass' ?></td>
        </tr>


    <?php
     }


      ?>
   </tbody>
   </table>


   






</body>
</html>