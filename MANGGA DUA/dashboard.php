<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <?php
        include("navbar.php");
    ?>
<!-- end navbar -->
<div class="container" style="height:3000px;">
    <div class="row">
<!-- sidebar -->
        <div class="col-3 mt-3">
        <?php
        include("sidebar.php");
        ?>
    </div>
<!-- end sidebar -->
        <div class="col-9">
        <div class="card">
        <div class="card-header">
            dashboard
        </div>

  <!-- KONTEN -->

  <div class="card-body">
    <h5 class="card-title">dashboard</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>

<!-- END KONTEN -->

<!-- foooter -->

<div class="container-fluid fixed-bottom">
 <div class="card text-center border-0 mb-2">
    Copyright 2022 FADHIL AKRAM - Teknik Informatika
 </div>
</div>
</body>
</html>