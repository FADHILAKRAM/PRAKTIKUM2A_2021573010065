<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONEKSI DATABASE MYSQL</title>
</head>
<body>
    <h1>DEMO KONEKSI DATABASE MYSQL</h1>
    <?php
        $conn=mysqli_connect("127.0.0.1:3307","root","");
        if($conn){
            echo "Server terkoneksi";
        }else{
            echo "Server tidak terkoneksi";
        }
    ?>
</body>
</html>