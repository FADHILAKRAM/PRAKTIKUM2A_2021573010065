<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      date_default_timezone_set('asia/jakarta');
      $d = date("D");
      $date = date("d_m-y H:i:s");
      if ($d== "mon") {    
          $d= "senin";
          echo "selamat belajar <br>";
     } else
            echo"ini hari $d <br>";
        echo $d. " " . $date; 
    ?>
</body>
</html>