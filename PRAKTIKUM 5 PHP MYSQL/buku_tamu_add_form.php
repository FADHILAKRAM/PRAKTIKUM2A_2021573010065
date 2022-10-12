<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUKU TAMU</title>
</head>
<body>
    <h1>SIMPAN BUKU TAMU MYSQL</h1>
    <?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $conn=mysqli_connect("127.0.0.1:3307","root","","db_kelas_2a_2022") 
    or die ("Konesi gagal");
    echo "Nama       : $nama <br>";
    echo "Emali      : $email <br>";
    echo "Komentar   : $komentar <br>";
    $hasil = mysqli_query($conn,"insert into bukutamu (nama,email,komentar} 
    values ('$nama','$email','$komentar')");
    echo "Simpan bukutamu berhasil dilakukan";
    ?>
</body>
</html>