
  <?php
    if(isset($_GET['x']) && $_GET['x']=='home') {
      $page = "home.php";
      include "main.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='order') {
      $page = "order.php";
      include "main.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='user') {
      $page = "user.php";
      include "main.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='costumer') {
      $page = "costumer.php";
      include "main.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='menu') {
      $page = "menu.php";
      include "main.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='report') {
      if($_SESSION['level_manggadua']==1){
        $page = "report.php";
        include "main.php";
      }else{
        $page = "home.php";
        include "main.php";} 
      }
    elseif(isset($_GET['x']) && $_GET['x']=='login') {
      include "login.php";}
    elseif(isset($_GET['x']) && $_GET['x']=='logout') {
      include "proses/proses_logout.php";}
    else{
      $page = "home.php";
      include "main.php";} 
    ?>