<?php
    session_start();
    if(empty($_SESSION['username_xyz'])){
        header("location:LOGIN1.php");
        exit();
    }
?>
<!D
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>INI HALAMAN KEDUA</h2>
    <tr><a href="logout.php">logout</a></tr>
</body>
</html>