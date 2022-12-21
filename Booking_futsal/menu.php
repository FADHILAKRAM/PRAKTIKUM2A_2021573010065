<div class="col-lg-9 mt-2">




<h1 class="text-light">Jadwal Yang Telah Di Booking</h1>
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
      $sql = mysqli_query($conn, "SELECT * from booking JOIN tb_user ON tb_user.email= booking.email where booking.tanggal='$tanggal'");
    }else{
      $sql = mysqli_query($conn, "SELECT * from booking JOIN tb_user ON tb_user.email= booking.email");
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

<!-- <div class="col-lg-9 mt-2">
<div class="card-body text-light">
<center><h1>JADWAL GALAXY FUTSAL</h1></center>
<table class="table table-bordered bordered-success text-center text-light">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">jam</th>
      <th scope="col">senin</th>
      <th scope="col">selasa</th>
      <th scope="col">rabu</th>
      <th scope="col">kamis</th>
      <th scope="col">jum'at</th>
      <th scope="col">sabtu</th>
      <th scope="col">minggu</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>01:00</td>
      <td>
        <?php if($row['jam']== "01:00:00") {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        } else {
          echo '<button class="btn btn-success">pesan</button>';
          
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark btn-success">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>02:00 - 03:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>03:00 - 04:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
       <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>04:00 - 05:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">5</th>
      <td>05:00 - 06:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
    <th scope="row">6</th>
      <td>06:00 - 07:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>07:00 - 08:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">8</th>
      <td>08:00 - 09:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">telah dipesan
    </tr>
    <tr>
    <th scope="row">9</th>
      <td>09:00 - 10:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>10:00 - 11:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
    <th scope="row">11</th>
      <td>11:00 - 12:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
    <th scope="row">12</th>
      <td>12:00 - 13:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>13:00 - 14:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">14</th>
      <td>14:00 - 15:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">15</th>
      <td>15:00 - 16:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>16:00 - 17:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">17</th>
      <td>17:00 - 18:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">18</th>
      <td>18:00 - 19:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>19:00 - 20:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">20</th>
      <td>20:00 - 21:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
    <th scope="row">21</th>
      <td>21:00 - 22:00</td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td>22:00 - 23:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
    </tr>
    <tr>
    <th scope="row">23</th>
      <td>23:00 - 00:00</td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
      <td>
        <button class="btn btn-dark">pesan</button>
      </td>
      <td>
        <?php if (empty(mysqli_num_rows($select))) {
          echo '<button class="btn btn-success">pesan</button>';
        } else {
          echo '<button class="btn btn-danger">telah dipesan</button>';
        }
       
        ?>
      </td>
    </tr>
    </tr>
  </tbody>
</table>
  </div>
</div> -->
