<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $product = [
        [
            'id' => 'sp001',
            'ten' => 'san pham 1',
            'gia' => 120000,
            'nhap' => 7000
        ],
        [
            'id' => 'sp002',
            'ten' => 'san pham 2',
            'gia' => 180000,
            'nhap' => 9000
        ],
        [
            'id' => 'sp003',
            'ten' => 'san pham 3',
            'gia' => 100000,
            'nhap' => 5000
        ]
        ];

    session_start();

    if(isset($_SESSION['username'])){
        echo " xin chao " . $_SESSION['username'] ;
    } else {
        header("Location: login.php" );
    }





    ?>

    

    <h3>danh sach san pham</h3>
    <a href="logout.php"> dang xuat</a>
    <form action="" method="GET">
        <input type="text" name="keysearch">
        <button type="submit" name="search"> submit</button>
    </form>





    <table border="1px">
        <thead>
            <th>STT</th>
            <th>ten</th>
            <th>id</th>
            <th>gia</th>
            <th>nhap</th>
        </thead>
        <tbody>
            <?php 
            if(isset($_GET['keysearch']) && isset($_GET['search'])){
                $keysearch = $_GET['keysearch'];
                $kq = [];
                foreach($product as $pro){
                    // if(
                    //     $keysearch == $pro['id'] ||
                    //     $keysearch == $pro['ten'] ||
                    //     $keysearch == $pro['gia'] ||
                    //     $keysearch == $pro['nhap'] 
                    // ){
                    //     array_push($kq, $pro);
                    // }


                    if(
                        strpos( $pro['id'],$keysearch) !== FALSE ||
                        strpos( $pro['ten'],$keysearch) !== FALSE ||
                        strpos( $pro['gia'],$keysearch) !== FALSE ||
                        strpos( $pro['nhap'],$keysearch) !== FALSE 
                    ){
                        array_push($kq, $pro);
                    }
                }

            }

            ?>  

            <?php 
            foreach(!empty($kq) ? $kq : $product as $key => $pro) :
                ?>
                <tr>
                    <td><?= ++ $key ?></td>
                    <td><?=  $pro['ten']?></td>
                    <td><?=  $pro['id']?></td>
                    <td><?=  $pro['gia']?></td>
                    <td><?=  $pro['nhap']?></td>
                </tr>

            
            
            
            
            
            
            
            <?php endforeach
            ?>
        </tbody>
    </table>





</body>
</html>