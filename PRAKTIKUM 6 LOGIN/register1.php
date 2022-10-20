<?php
    session_start();
    if(!empty($_SESSION['username_xyz'])){
        header("location:dashboard.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <h1>REGISTER DATA</h1>
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" ></td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td><input type="text" name="kelas" ></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" ></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr>
                <td>CONFIRM PASSWORD</td>
                <td><input type="password" name="password2" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="daftar"></td>
            </tr>
        </table>                    
    </form>
</body>
</html>