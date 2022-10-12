<?php
    $kolom=$_POST['kolom'];
    $cari=$_POST['cari'];
    $conn=mysqli_connect("127.0.0.1:3307","root","","db_kelas_2a_2022");
    $hasil=mysqli_query($conn,"select * from bukutamu where $kolom like '$%cari%' ");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan $jumlah";
    echo "<br>";
    while ($baris=mysqli_fetch_array($hasil))
    {
        echo "Nama : ";
        echo $baris[0];
        echo "<br>";
        echo "Email";
        echo $baris[1];
        echo "<br>";
        echo "Komentar :";
        echo $baris[2];
    }
    ?>