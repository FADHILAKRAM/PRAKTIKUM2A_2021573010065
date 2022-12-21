<div class="col-lg-9 mt-2">

                <div class="card">
                    <div class="card-header">
                        laporan mingguan
                    </div>
                    <div class="card-body">
                    <?php
include 'proses/connect.php';
$nows=strtotime(date('Y-m-d'));
$start=date('Y-m-d',strtotime('-7 day',$nows));
$end=date('Y-m-d');
echo 'daftar transaksi 7 hari terakhir periode '.$start. ' hingga '.$end;
$dtr = "SELECT * FROM booking WHERE tanggal between '$start' AND '$end' ORDER BY id_book DESC";
$result = mysqli_query($conn,$dtr);
 
?>
<table class="table table-bordered bordered-success text-center text-dark">
    <tr><th>id</th><th>email</th><th>tanggal</th><th>jam</th></tr>
<?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr><td><?php echo $row['id_book']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['tanggal']; ?></td><td><?php echo $row['jam']; ?></td></tr>
<?php } ?>
 </table>
                </div>
            </div>

            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        laporan bulanan
                    </div>
                    <div class="card-body">
                    <?php
include 'proses/connect.php';
$nows=strtotime(date('Y-m-d'));
$start=date('Y-m-d',strtotime('-30 day',$nows));
$end=date('Y-m-d');
echo 'daftar transaksi 7 hari terakhir periode '.$start. ' hingga '.$end;
$dtr = "SELECT * FROM booking WHERE tanggal between '$start' AND '$end' ORDER BY id_book DESC";
$result = mysqli_query($conn,$dtr);
 
?>
<table class="table table-bordered bordered-success text-center text-dark">
    <tr><th>id</th><th>email</th><th>tanggal</th><th>jam</th></tr>
<?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr><td><?php echo $row['id_book']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['tanggal']; ?></td><td><?php echo $row['jam']; ?></td></tr>
<?php } ?>
 </table>
                    </div>
                </div>
            </div>