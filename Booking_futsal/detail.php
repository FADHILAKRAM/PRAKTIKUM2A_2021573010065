<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM booking");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

foreach ($result as $row) {
    echo $row['username'];
    }?>


