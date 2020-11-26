<?php


include_once("konfigurasi.php");

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}

if (isset($_SESSION['email'])) {
    list($carts, $totalHarga) = show();
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

    <title>Cart</title>
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
                    <img src="img/cart.png" alt="cart" style="width: 36px; height:36px;">
                </a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown mr-auto">
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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!is_null($carts)) : ?>
                <?php
                    $i = 1;
                    foreach ($carts as $cart) {
                    ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $cart['nama_barang']; ?></td>
                    <td>Rp. <?= $cart['harga']; ?></td>
                    <td><a href="konfigurasi.php?id=<?= $cart['id']; ?>" class="btn btn-danger btn-sm" role="button"
                            name="hapus">
                            Hapus
                        </a></td>
                </tr>
                <?php
                        $i++;
                    }
                    ?>
                <tr>
                    <th colspan="2" scope="col" class="">Total</th>
                    <th colspan="2" scope="col">Rp. <?= $totalHarga; ?></th>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

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