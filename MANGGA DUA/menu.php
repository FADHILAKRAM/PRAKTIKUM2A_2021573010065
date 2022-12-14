<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu
    LEFT JOIN tb_kategori_menu ON tb_kategori_menu.id_kat_menu = tb_daftar_menu.kategori");
    
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
$select_kat_menu = mysqli_query($conn, "SELECT id_kat_menu,kategori_menu FROM tb_kategori_menu");
?>

<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            NYOE HALAMAN MENU
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> TAMBAHKAN MENU</button>
                </div>
            </div>
            <!-- Modal Tambah menu Baru -->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAHKAN MENU MAKANAN DAN MINUMAN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="uploadfot" placeholder="Your Name" name="foto" required>
                                            <label class="input-group-text" for="uploadfot">UPLOAD FOTO MENU</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN FILE FOTO MENU
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="nama menu" name="nama_menu" required>
                                            <label for="floatingInput">NAMA MENU</label>
                                            <div class="invalid-feedback">
                                                MMASUKKAN NAMA MENU
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan">
                                            <label for=" floatingPassword">KETERANGAN</label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="kat_menu" required>
                                                <option selected hidden value="">PILIH KATEGORI MENU</option>
                                            <?php
                                            foreach ($select_kat_menu as $value) {
                                                echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                            }
                                            ?>
                                            </select>
                                            <label for="floatingInput">KATEGORI MAKANAN ATAU MINUMAN</label>
                                            <div class="invalid-feedback">
                                                PILIH MENU MAKANAN ATAU MINUMAN.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="HARGA" name="HARGA" required>
                                            <label for="floatingInput">HARGA</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN HARGA MENU
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="STOK" name="STOK" required>
                                            <label for="floatingInput">STOK</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN STOK
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Tambah menu Baru -->

            <?php foreach ($result as $row) { ?>
                <!-- Modal View -->
            <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAHKAN MENU MAKANAN DAN MINUMAN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"  value="<?php echo $row['nama_menu'] ?>">
                                            <label for="floatingInput">NAMA MENU</label>
                                            <div class="invalid-feedback">
                                                MMASUKKAN NAMA MENU
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['keterangan'] ?>">>
                                            <label for=" floatingPassword">KETERANGAN</label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select disabled class="form-select" aria-label="Default select example" >
                                                <option selected hidden value="">PILIH KATEGORI MENU</option>
                                            <?php
                                            foreach ($select_kat_menu as $value) {
                                                if($row['kategori'] == $value['id_kat_menu']) {
                                                    echo "<option  selected value=". $value['id_kat_menu']. "> $value[kategori_menu]</option>";
                                                } else {
                                                    echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                }
                                            }
                                            ?>
                                            </select>
                                            <label for="floatingInput">KATEGORI MAKANAN ATAU MINUMAN</label>
                                            <div class="invalid-feedback">
                                                PILIH MENU MAKANAN ATAU MINUMAN.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['harga'] ?>">
                                            <label for="floatingInput">HARGA</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN HARGA MENU
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['stok'] ?>">
                                            <label for="floatingInput">STOK</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN STOK
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal View -->

                <!-- Modal Edit -->
                <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAHKAN MENU MAKANAN DAN MINUMAN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_edit_menu.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="uploadfot" placeholder="Your Name" name="foto" required>
                                            <label class="input-group-text" for="uploadfot">UPLOAD FOTO MENU</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN FILE FOTO MENU
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="nama menu" name="nama_menu" required  value="<?php echo $row['nama_menu'] ?>">
                                            <label for="floatingInput">NAMA MENU</label>
                                            <div class="invalid-feedback">
                                                MMASUKKAN NAMA MENU
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan"  value="<?php echo $row['keterangan'] ?>">
                                            <label for=" floatingPassword">KETERANGAN</label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" >
                                                <option selected hidden value="">PILIH KATEGORI MENU</option>
                                            <?php
                                            foreach ($select_kat_menu as $value) {
                                                if($row['kategori'] == $value['id_kat_menu']) {
                                                    echo "<option  selected value=". $value['id_kat_menu']. "> $value[kategori_menu]</option>";
                                                } else {
                                                    echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                }
                                            }
                                            ?>
                                            </select>
                                            <label for="floatingInput">KATEGORI MAKANAN ATAU MINUMAN</label>
                                            <div class="invalid-feedback">
                                                PILIH MENU MAKANAN ATAU MINUMAN.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="HARGA" name="HARGA" required  value="<?php echo $row['harga'] ?>">
                                            <label for="floatingInput">HARGA</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN HARGA MENU
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="STOK" name="STOK" required  value="<?php echo $row['stok'] ?>">
                                            <label for="floatingInput">STOK</label>
                                            <div class="invalid-feedback">
                                                MASUKKAN STOK
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Edit -->

                <!-- Modal Delete -->
                <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_user.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="col-lg-12">
                                        <?php if ($row['username'] == $_SESSION['username_decafe']) {
                                            echo '<div class="alert alert-danger">You cannot delete yourself.</div>';
                                        } else {
                                            echo "apakah anda yakin ingin menghapus data ini? <b>$row[username]</b>";
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345" <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?>>Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Delete -->

                <!-- Modal Reset Password -->
                <div class="modal fade" id="ModalResetPassword<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_reset_password.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="col-lg-12">
                                        <?php if ($row['username'] == $_SESSION['username_decafe']) {
                                            echo '<div class="alert alert-danger">Anda tidak dapat mereset password sendiri</div>';
                                        } else {
                                            echo "apakah anda yakin ingin mereset password ini? <b>$row[username]</b> menjadi password bawaan sistem yaitu<b> password</b>";
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="input_user_validate" value="12345" <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?>>Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Reset Password  -->
            <?php
            }
            if (empty($result)) {
                echo "Data user Tidak Ada";
            } else {
            ?>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No</th>
                                <th scope="col">Foto Menu</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">jenis menu</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    <td>
                                        <div style="width:90px">
                                            <img src="assets/img/<?php echo $row['foto'] ?>" class="img-thumbnail" alt="...">
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_menu'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['keterangan'] ?>
                                    </td>
                                    <td>
                                        <?php echo ($row['jenis_menu']== 1) ? "MAKANAN" : "MINUMAN" ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kategori_menu'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['harga'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['stok'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash3"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>