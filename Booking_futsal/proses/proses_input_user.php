<?php
include "connect.php";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$no_hp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = md5('password');

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO db_user (nama,username,level,nohp,alamat,password) values ('$nama','$username','$level','$nohp','$alamat','$password')");
    if (!$query) {
        $message = '<script>alert("data gagal di masukkan")</script>';

    } else {
        $message = '<script>alert("data berhasil di masukkan")
        window.location="../user"
        </script>';
    }
}
echo $message;

?>