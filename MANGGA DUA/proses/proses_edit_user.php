<?php
include"connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']): "";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']): "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']): ""; 
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']): ""; 
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']): "";  
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']): ""; 
$password = md5('password');

if(!empty($_POST['input_user_validate'])) {
    $query = mysqli_query ($conn,"UPDATE db_user SET nama = '$name', username = '$username', level = '$level', nohp ='$nohp',alamat ='$alamat' WHERE id = '$id'");
    if(!$query){
        $message = '<script>alert("data gagal di update")</script>';
    }else{
        $message = '<script>alert("data berhasil update");
        window.location="../user"</script>
</script>';
    }
}echo $message;
?>