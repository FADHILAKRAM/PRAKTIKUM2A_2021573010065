<?php
    $conn = mysqli_connect("127.0.0.1:3307","root",""); //buka koneksi database
    if($conn){
        echo"koneksi berhasil"."<br>";
    }else{
        echo"koneksi gagal"."<br>";
    }
    mysqli_select_db($conn,"fadhilakram");

    $select = mysqli_query($conn,"SELECT*FROM mahasiswa");
    $data = mysqli_fetch_array($select);

    echo "NIM : ".$data['NIM']."<br>";
    echo "NAMA : ".$data['NAMA']."<br>";
    echo "KELAS : ".$data['2']."<br>";
    echo "ALAMAT : ".$data['3']."<br>";
    echo "IPK : ".$data['IPK']."<br>";
?>
    ?>