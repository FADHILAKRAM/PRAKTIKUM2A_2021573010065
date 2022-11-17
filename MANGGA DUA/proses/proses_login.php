<?php
session_start();
include"connect.php";
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']): ""; 
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";
if(!empty($_POST['submit_validate'])){
    $query = mysqli_query($conn, "SELECT * FROM db_user WHERE username = '$username' && password = '$password'");
    $hasil = mysqli_fetch_array($query);
    if($hasil){
        $_SESSION['username_manggadua'] = $username;
        $_SESSION['level_manggadua'] = $hasil['level'];
        header('location:../home');
    }else{ ?>
    <script>
        alert('username dan password yang anda masukkan salah')
        window.location=history.go(-1);
    </script>
<?php
    }

    }
?>
