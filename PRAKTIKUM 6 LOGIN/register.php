<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <h1>REGISTER</h1>
    <?php

    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];
    $password =md5($_POST["password"]);
    $password2 =md5($_POST["password2"]);
    $conn=mysqli_connect("127.0.0.1:3307","root","","db_kelas_2a_2022") 
    or die ("Konesi gagal");

if (empty($password) && empty($password2)) {
    echo "ISI DULU LAH PASSWORDNYA";
}
else if ($password!=$password2) {
    echo "KOK PASSWORDNYA BEDA SIH";
}
else{
    $hasil = mysqli_query($conn,"INSERT INTO mahasiswa (nama,nim,kelas,alamat,password) 
    values ('$nama','$nim','$kelas','$alamat','$password')");
    echo "SELAMAT ANDA BERHASIL DAFTAR";
}
    ?>
</body>
</html>