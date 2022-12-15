<?php

include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user");
$record = mysqli_fetch_array($query);
$result[] = $record;
// while ($record = mysqli_fetch_array($query)) {
//     $result[] = $record;
// }

?>

<div class="col-lg-9 mt-2">
    <h1 class="text-center text-light">BOOKING</h1>
    <div class="container">
    <?php foreach ($result as $row) { ?>
        <form class="row g-3 text-light" action="Proses/proses_booking.php" method="POST">
        <input type="hidden" value="<?php echo $row['email']?>" name="email">  
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">tanggal</label>
                <input type="date" class="form-control" id="inputEmail4" name="tanggal">
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">jam</label>
                <input type="time" class="form-control" id="inputEmail4" name="jam">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">durasi</label>
                <input type="number" class="form-control" id="inputPassword4" name="durasi">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">biaya</label>
                <input disabled type="number" class="form-control" id="inputPassword4" name="biaya" value="100.000">
            </div>
            

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Menyetujui Persyaratan
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="booking_validate" value="12345">BOOKING</button>
            </div>
        </form>
        <?php
}?>
    </div>
</div>

