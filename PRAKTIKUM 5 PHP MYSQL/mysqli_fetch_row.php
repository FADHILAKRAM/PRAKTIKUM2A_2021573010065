<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONEKSI DATABASE MYSQL</title>
</head>
<body>
    <h1>KONEKSI DATABASE DENGAN MYSQLI FETCH ROW</h1>
    <?php
    $conn=mysqli_connect("127.0.0.1:3307","root","","db_kelas_2a_2022")
    or die ("koneksi gagal");
    $hasil = mysqli_query($conn, "select * from liga",$conn);
    while ($row=mysqli_fetch_row($hasil)){
        echo "Liga" .$row[1];
        echo " mempunyai " .$row[2];
        echo " wakil di liga champion <br>";
    }
    ?>
</body>
</html>