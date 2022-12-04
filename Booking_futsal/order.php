<?php
// include "Proses/connect.php";
// $query = mysqli_query($conn, "SELECT * FROM tb_booking LEFT JOIN tb_user ON tb_user.id=tb_booking.id");
?>

<div class="col-lg-9 mt-2">
    <h1 class="text-center text-light">BOOKING</h1>
    <div class="container">
        <form class="row g-3 text-light" action="Proses/proses_booking.php" method="POST">
        <input type="hidden" value="<?php echo $row['id']?>" name="id">  
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
                <input type="number" class="form-control" id="inputPassword4" name="biaya">
            </div>
            

            <div class="col-12">
                <div class="form-check ">
                    <input class="form-check-input " type="checkbox" id="gridCheck">
                    <label class="form-check-label " for="gridCheck">
                        Menyetujui Persyaratan
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success" name="booking_validate" value="12345">DAFTAR</button>
            </div>
        </form>
    </div>
</div>