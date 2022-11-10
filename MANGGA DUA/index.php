<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
            Featured
        </div>

  <!-- KONTEN -->

  <?php 
    if(isset($_GET['x']) && $_GET['x']=='home') {include "home.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='order') {include "order.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='product') {include "menu.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='costumer') {include "costumer.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='report') {include "report.php";}
    ?>

<!-- END KONTEN -->

<!-- foooter -->

<div class="container-fluid fixed-bottom">
 <div class="card text-center border-0 mb-2">
    Copyright 2022 Rizki Aulia - Teknik Informatika
 </div>
</div>
</body>
</html>