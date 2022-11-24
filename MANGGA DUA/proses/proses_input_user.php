<?php
include"connect.php";
$name = (isset($_POST['name'])) ? htmlentities($_POST['name']): "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']): ""; 
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']): ""; 
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']): "";  
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']): ""; 
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

if(!empty($_POST['input_user_validate'])) {
    $query = mysqli_query ($conn, "INSERT INTO db_user (nama,username,level,nohp,alamat,password)value('$name','$username','$level','$nohp','$alamat','$password')");
    if(!$query){
        $message = '<script>alert("data gagal dimasukkan")</script>';
    }else{
        $message = '<script>alert("data berhasil dimasukkan");
                    window.location="../user"</script>
        </script>';
    }
}echo $message;
?>