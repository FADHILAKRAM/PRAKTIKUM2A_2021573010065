<?php
// session_start();
if (empty($_SESSION['username_decafe'])) {
    header('location:login');
}

include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM db_user where username = '$_SESSION[username_decafe]'");
$hasil = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="img/style.css" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- navbar -->
    <?php
    include("navbar.php");
    ?>
    <!-- end navbar -->
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <div class="col-3 mt-3">
                <?php
                include("sidebar.php");
                ?>
            </div>
            <!-- end sidebar -->


            <!-- KONTEN -->

            <?php
            include $page;
            ?>

            <!-- END KONTEN -->

            <!-- foooter -->

            <div class="container-fluid fixed-bottom">
                <div class="card text-center border-0 mb-2">
                    Copyright 2022 Muge Website
                </div>
            </div>
</body>

</html>