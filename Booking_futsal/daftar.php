<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">DAFTAR</h1>
    <div class="container">
        <form class="row g-3" action="Proses/proses_daftar.php" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama</label>
                <input type="text" class="form-control" id="inputEmail4" name="nama">
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Confirmasi Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="passwordcon">
            </div>
            <div class="col-md-6">
                <label for="input" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="" name="nohp">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="jln,kec,kab,prov" name="alamat">
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
            <button type="submit" class="btn btn-primary" name="pendaftaran_validate" value="12345">DAFTAR</button>
            </div>
        </form>
    </div>
</body>
</html>