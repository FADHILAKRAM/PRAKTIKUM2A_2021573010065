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
                <select class="form-select" aria-label="Default select example" name="jam" required>
                                                <option selected hidden value="">Pilih Jam</option>
                                                <option value="00:00:00">00:00</option>
                                                <option value="01:00:00">01:00</option>
                                                <option value="02:00:00">02:00</option>
                                                <option value="03:00:00">03:00</option>
                                                <option value="04:00:00">04:00</option>
                                                <option value="05:00:00">05:00</option>
                                                <option value="07:00:00">07:00</option>
                                                <option value="08:00:00">08:00</option>
                                                <option value="09:00:00">09:00</option>
                                                <option value="10:00:00">10:00</option>
                                                <option value="11:00:00">11:00</option>
                                                <option value="12:00:00">12:00</option>
                                                <option value="13:00:00">13:00</option>
                                                <option value="14:00:00">14:00</option>
                                                <option value="15:00:00">15:00</option>
                                                <option value="16:00:00">16:00</option>
                                                <option value="17:00:00">17:00</option>
                                                <option value="18:00:00">18:00</option>
                                                <option value="19:00:00">19:00</option>
                                                <option value="20:00:00">20:00</option>
                                                <option value="21:00:00">21:00</option>
                                                <option value="22:00:00">22:00</option>
                                                <option value="23:00:00">23:00</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Pilih jam
                                            </div>
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">durasi</label>
                <input disabled type="text" class="form-control" id="inputPassword4" name="durasi" value="1 jam">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">biaya</label>
                <input disabled type="number" class="form-control" id="inputPassword4" name="biaya" value="100000">
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

