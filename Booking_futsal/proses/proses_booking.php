<?php
include "connect.php";

$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$tanggal = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : "";
$jam = (isset($_POST['jam'])) ? htmlentities($_POST['jam']) : "";
$durasi = (isset($_POST['durasi'])) ? htmlentities($_POST['durasi']) : "";
$biaya = (isset($_POST['biaya'])) ? htmlentities($_POST['biaya']) : "";

if (!empty($_POST['username_decafe'])) {
    if (!empty($_POST['booking_validate'])) {
        $select = mysqli_query($conn, "SELECT jam,tanggal FROM tb_booking WHERE jam = '$jam'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("jadwal yang anda pesan tidak tersedia, pesan jadwal lain");
        window.location="../order"</script>
        </script>';
        } else {
            $query = mysqli_query($conn, "INSERT INTO tb_booking (id,tanggal,jam,durasi,biaya) values('$id','$tanggal','$jam','$durasi','$biaya')");
            if ($query) {
                $message = '<script>alert("pembookingan berhasil");
        window.location="../order"</script>';

            } else {
                $message = '<script>alert("pembookingan gagal")</script>;
        window.location="../order"</script>';
            }
        }
    }else{
        $message = '<script>alert("lengkapi semua data");
        window.location="../order"</script>';

    }
}

// if (!empty($_POST['username_decafe'])) {

//     if ($jam != $passwordcon) {
//         $query = mysqli_query($conn, "INSERT INTO tb_user (nama,email,nohp,alamat,password) values('$name','$email','$nohp','$alamat','$password')");

//         $message = '<script>alert("DATA BERHASIL DIMASUKKAN ");
//         window.location="../user"</script>
//         </script>';
//     } else {
//         $message = '<script>alert("DATA GAGAL DIMASUKKAN,")</script>';
//     }
// } else {
//     $message = '<script>alert("DATA GAGAL DIMASUKKAN,HARAP MASUKKAN PASSWORD YANG BENAR")</script>';
// }
// echo $message;
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