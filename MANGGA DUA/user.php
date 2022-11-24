<?php
  include"proses/connect.php";
  $query = mysqli_query($conn, "SELECT * FROM db_user");
  while($record = mysqli_fetch_array($query)){
    $result[] = $record;
  }
?>
<div class="col-lg-9 mt-2">
  <div class="card">
  <div class="card-heade">
    halaman user
  </div>
<div class="card-body">
  <div class="row">
    <div class="col d-flex justify-content-end">
      <button class ="btn btn-warning"data-bs-toggle="modal" data-bs-target="#modaltambahuser"
>TAMBAH USER</button>
    </div>
  </div>

  <!-- Modal tambah user baru-->
<div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullscree-md-down">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">tambah user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
          <div class="row">
            <div class="col-lg-6">
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="your name" name="nama" required>
  <label for="floatingInput">nama</label>
  <div class="invalid-feedback">
        masukkan nama
      </div>
</div>
</div>
<div class="col-lg-6">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"name="username" required> 
  <label for="floatingInput">username</label>
  <div class="invalid-feedback">
        masukkan username
      </div>
</div>
</div>
</div>
<div class="row">
          <div class="col-lg-4">
          <div class="form-floating">
          <select class="form-select" aria-label="Default select example"name="level" required>
  <option selected hidden value="0">pilih level user</option>
  <option value="1">owner/admin</option>
  <option value="2">kasir</option>
  <option value="3">pelayan</option>
  <option value="4">dapur</option>
</select>
<label for="floatingInput">level user</label>
<div class="invalid-feedback">
        pilih level user
      </div>
</div>
</div>
<div class="col-lg-8">
<div class="form-floating mb-3"name="no hp">
  <input type="number" class="form-control" id="floatingInput" placeholder="089265345162">
  <label for="floatingInput">no hp</label>
</div>
</div>
</div>
          <div class="row">
            <div class="col-lg-12">
      <div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingInput" placeholder="password" disable value="12345"name="password" >
  <label for="floatingpassword">password</label>
</div>
</div>
</div>
<div class="form-floating">
 <textarea class="form-control" name="" id="" style="height:100px"name="alamat"></textarea>
  <label for="floatinginput">alamat</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
  <!-- akhir Modal tambah user baru-->

<!-- Modal view -->
<div class="modal fade" id="Modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullscree-md-down">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">data user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal view -->

<?php
  if(empty($result)){
    echo "data user tidak ada";
  }else{

?>
  <div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">USERNAME</th>
      <th scope="col">LEVEL</th>
      <th scope="col">NO HP</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no =1;
      foreach ($result as $row){

      ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['level'] ?></td>
      <td><?php echo $row['nohp'] ?></td>
      <td class="d-flex">
        <BUtton class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#Modalview"><i class="bi bi-eye"></i></BUtton>
        <BUtton class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil-square"></i></BUtton>
        <BUtton class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></i></BUtton>
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


<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

