<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$email = (isset($_POST['email'])) ? htmlentities($_POST['email']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = ('password');

if(!empty($_POST['input_user_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("USERNAME YANG DIMASUKKAN TELAH ADA");
        window.location="../home"</script>
        </script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tb_user SET nama='$name', email='$email', level='$level', nohp='$nohp', alamat='$alamat' WHERE id='$id'");
    if($query){        
        $message = '<script>alert("DATA BERHASIL DI UPDATE");
        window.location="../home"</script>
        </script>';
        }else{
        $message = '<script>alert("DATA GAGAL DI UPDATE")</script>';
        } 
    }
}echo $message;
?>