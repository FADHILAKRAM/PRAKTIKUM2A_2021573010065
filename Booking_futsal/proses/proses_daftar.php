<?php
include "connect.php";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$email = (isset($_POST['email'])) ? htmlentities($_POST['email']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
$passwordcon = (isset($_POST['passwordcon'])) ? htmlentities($_POST['passwordcon']) : "";

if (!empty($_POST['pendaftaran_validate'])) {

    if ($password = $passwordcon) {
        $query = mysqli_query($conn, "INSERT INTO tb_user (nama,email,nohp,alamat,password) values('$name','$email','$nohp','$alamat','$password')");

        $message = '<script>alert("DATA BERHASIL DIMASUKKAN ");
        window.location="../user"</script>
        </script>';
    } else {
        $message = '<script>alert("DATA GAGAL DIMASUKKAN,")</script>';
    }
} else {
    $message = '<script>alert("DATA GAGAL DIMASUKKAN,HARAP MASUKKAN PASSWORD YANG BENAR")</script>';
}
echo $message;
?>

<!-- if(!empty($_POST['pendaftaran_validate'])){
$select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
if(mysqli_num_rows($select) > 0){
$message = '
<script>alert("USERNAME YANG DIMASUKKAN TELAH ADA");
    window.location = "../user"</script>
</script>';
}else{
$query = mysqli_query($conn, "INSERT INTO tb_user (nama,username,level,nohp,alamat,password)
values('$name','$username','$level','$nohp','$alamat','$password')");
if($query){
$message = '
<script>alert("DATA BERHASIL DIMASUKKAN ");
    window.location = "../user"</script>
</script>';
}else{
$message = '
<script>alert("DATA GAGAL DIMASUKKAN")</script>';
}
}
}echo $message;
?> -->