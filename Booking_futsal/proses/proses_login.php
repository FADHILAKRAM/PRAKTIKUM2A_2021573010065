<?php
session_start();
include "connect.php";
$email = (isset($_POST['email'])) ? htmlentities($_POST['email']) : "";
$password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
if (!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' && password = '$password'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        $_SESSION['username_decafe'] = $email;
        $_SESSION['level_decafe'] = $hasil['level'];
        header('location:../home');
    } else { ?>
<script>
    alert('username atau password salah');
    window.location = '../login'
</script>

<?php
    }
}
?>