<?php
    //var_dump($_GET);
    // print_r($_GET);;
    echo $_GET['nama']."<br>";
    echo $_GET['no_hp'],"<br>";
    echo $_GET['ranger'],"<br>";

    if(isset ($_GET['hobi1'])){
        echo"olahraga";
    }
    if(isset ($_GET['hobi2'])){
        echo"ngoding";
    }
    if(isset ($_GET['hobi3'])){
        echo"membaca";
    }
    echo $_GET['color'],"<br>";
    echo $_GET['date'],"<br>";
    echo $_GET['datetime-local'],"<br>";
    echo $_GET['email'],"<br>";
    echo $_GET['hidden'],"<br>";
    echo $_GET['month'],"<br>";
    echo $_GET['password'],"<br>";
    echo $_GET['radio'],"<br>";
    echo $_GET['reset'],"<br>";
    echo $_GET['search'],"<br>";
    echo $_GET['tel'],"<br>";
    echo $_GET['time'],"<br>";
    echo $_GET['url'],"<br>";
    echo $_GET['week'],"<br>";
?>