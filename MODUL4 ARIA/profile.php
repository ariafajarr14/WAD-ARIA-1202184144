<?php
session_start();

include_once("konfigurasi.php");

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
    $light = null;
    $dark = null;

    if ($_COOKIE['navbar'] == 'light') {
        $light = 'selected';
    } else {
        $dark = 'selected';
    }
} else {
    $navbar = 'light';
}

if (isset($_SESSION['email'])) {
    $profile_show = profile_show();

    if (isset($_POST['update'])) {
        setcookie('navbar', $_POST['navbar']);
        $navbar = $_COOKIE['navbar'];

        update($_POST);
    }
} else {
    header("Location: login.php");
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

    <title>Profile</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg justify-content-between bg-<?= $navbar; ?> navbar-<?= $navbar; ?>">
        <a class="navbar-brand" href="index.php" style="color: #A3A9A7;">WAD Beauty</a>
        <!-- navbar login -->
        <ul class="navbar-nav font-weight-bold">
            <li class="nav-item d-flex align-items-center mr-2">
                <!-- cart icon -->
                <a href="cart.php">
                    <img src="img/cart.png" alt="cart" style="width: 36px; height:36px">
                </a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown mr-4">
                <a class="nav-link dropdown-toggle font-weight-normal" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selamat Datang, <span class="text-primary"><?= $_SESSION['nama']; ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="konfigurasi.php?logout=yes">Logout</a>
                </div>
            </li>
            <!-- dropdown -->
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

    <div class="container mt-5">
        <div class="jumbotron bg-white" style="box-shadow: 1px 1px 3px #bababa;">
            <h3 class="text-center pb-4">Profile</h3>
            <form action="" method="POST">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="email" name="email"
                            value="<?= $profile_show['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                            value="<?= $profile_show['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone"
                            value="0<?= $profile_show['no_hp']; ?>">
                    </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password2" class="col-sm-2 col-form-label">Password Confirm</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password2" name="password2"
                            placeholder="Password Confirm">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="navbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10">
                        <select id="navbar" name="navbar">
                            <option value="light" <?= $light; ?>>Light</option>
                            <option value="dark" <?= $dark; ?>>Dark</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
                <a href="index.php" class="btn btn-light text-primary btn-block" role="button"
                    aria-pressed="true">Cancel</a>
            </form>
        </div>

    </div>

    <!-- Footer -->
    <footer class="page-footer container-fluid font-small">
        <div class="footer-copyright text-center py-3">©2020 Copyright: <a href="index.php">WAD Beauty</a></div>
    </footer>
    <!-- Footer -->

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