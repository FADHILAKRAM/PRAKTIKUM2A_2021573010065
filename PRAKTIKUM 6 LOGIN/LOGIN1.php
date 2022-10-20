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
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="LOGIN.PHP" method="post">
        USERNAME:<input type="text" name="username" size="35" maxlength="50"> <br>
        PASSWORD :<input type="text" name="password" size="35" maxlength="50"> <br></textarea>
        <br>
        <input type="submit" value="MASUK">
        <BR>
        <tr>BELUM PUNYA AKUN?</tr>
        <TR> <a href="register1.php">DAFTAR DISINI</a></TR>
    </BR>
    </form>
</body>
</html>