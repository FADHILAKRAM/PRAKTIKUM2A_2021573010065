
<div class="col-lg-9 mt-2">




<h1 class="text-light">INI PESANAN ANDA</h1>
<form method="POST">
			<label class="text-light">PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>.
<?php

$nama=mysqli_query($conn, "SELECT booking.email, tb_user.nama FROM booking JOIN tb_user ON tb_user.email= booking.email ");
// $select = mysqli_query($conn, "SELECT * from booking ");

    if(isset($_POST['tanggal'])){
      $tanggal = $_POST['tanggal'];
      $sql = mysqli_query($conn, "SELECT * from booking JOIN tb_user ON tb_user.email= booking.email where booking.tanggal='$tanggal' and booking.email='$_SESSION[username_decafe]'");
    }else{
      $sql = mysqli_query($conn, "SELECT * from booking JOIN tb_user ON tb_user.email= booking.email where booking.email='$_SESSION[username_decafe]'");
    }?>
    <table class="table table-bordered bordered-success text-center text-light">
    <thead>
                              <tr>
                                  <th scope="col">tanggal</th>
                                  <th scope="col">jam</th>
                                  <th scope="col">Nama</th>                               
                              </tr>
                          </thead>
                          <?php
while ($row = mysqli_fetch_array($sql)) {
  echo '
  
  <tr>
  <td>' . $row['tanggal'] . '</td>
  <td>' . $row['jam'] . '</td>
  <td>' . $row['nama'] . '</td>
  </tr>
 ';
  
}
?>
 </table>






<?php
// while ($row = mysqli_fetch_array($sql)) {

//   echo '<table class="table table-bordered bordered-success text-center text-light">
//   <tr>
//   <td>'.$row['jam'].'</td>
//   </tr>
//   </table>';
// }
?>



</div>