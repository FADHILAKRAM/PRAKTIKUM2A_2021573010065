<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    //if($username == "FADHILAKRAM13" and $password =="123"){
      // header("location:dashboard.php");
    //}
    if(empty($username) || empty($password)){
        echo"<script>
        alert('ISI DULU DONG PASSWORDNYA');
        window.location=history.go(-1);
        </script>";
    }
    else{
        $conn=mysqli_connect("127.0.0.1:3307","root","","db_kelas_2a_2022");
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa where NIM='$username' && PASSWORD='$password'");
        $data = mysqli_fetch_array($query);
        if ($data) {
            $_SESSION['username_xyz']=$username;{
            header("location:dashboard.php");}
        }
        else{
            echo"<script>alert('MOHON MAAF ANDA GAGAL LOGIN')
            windows.history.back();
            </script>";
        }
    }
?>