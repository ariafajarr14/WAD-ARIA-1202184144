<?php
session_start();

include_once("konfigurasi.php");

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}

if (isset($_POST['register'])) {
    registrasi($_POST);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg justify-content-between bg-<?= $navbar; ?> navbar-<?= $navbar; ?>">
        <a class="navbar-brand" href="index.php" style="color: #A3A9A7;">WAD Beauty</a>
        <!-- navbar home -->
        <ul class="navbar-nav font-weight-bold">
            <li class="nav-item">
                <a class="nav-link" href="login.php" style="color: #A3A9A7;">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php" style="color: #A3A9A7;">Register</a>
            </li>
        </ul>
    </nav>
    <!-- navbar -->

    <?php if (isset($_SESSION['message'])) : ?>
    <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
        <?= $_SESSION['message']; ?>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <div class="container" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <h4 class="card-title text-center mt-4 pb-2">Registrasi</h4>
                        <hr>
                        <div class="card-body pt-0">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukkan Alamat E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No. Handphone</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp"
                                        placeholder="Masukkan Nomor Handphone">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Buat Kata Sandi">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control " id="password2"
                                        name="password2" placeholder="Konfirmasi Kata Sandi">
                                </div>
                                <div class="text-center pt-2">
                                    <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                                    <p class="mt-3">Sudah punya akun? <a href="login.php"
                                            class="text-secondary">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>