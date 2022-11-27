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
        <form class="row g-3" action="daftar.php" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Depan</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nama Belakang</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Confirmasi Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-6">
                <label for="input" class="form-label">NOMOR Telepon</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Alamat 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
                <button type="submit" class="btn btn-primary">DAFTAR</button>
            </div>
        </form>
    </div>
</body>

</html>