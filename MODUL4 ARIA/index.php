<?php
session_start();

include_once("konfigurasi.php");

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}

if (isset($_SESSION['email'])) {
    
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

    <title>Home</title>
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

    <div class="container mt-3">
        <div class="jumbotron jumbotron-fluid py-4 bg-gradient-primary mb-0"
            style="background-image: linear-gradient(to right, #35DCE5 , #FFEA85);">
            <div class="container text-center">
                <h1 class="display-4">WAD Beauty</h1>
                <p class="lead">Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
            </div>
        </div>

        <div class="card-group mb-2">
            <div class="card">
                <img src="img/gambarsatu.jpeg" class="card-img-top"
                    alt="Biore UV Aqua Rich Watery Essence SPF 50+/PA+++">
                <div class="card-body">
                    <h5 class="card-title">Biore UV Aqua Rich Watery Essence SPF 50+/PA+++</h5>
                    <p class="card-text">Dilengkapi kandungan Aqua
                        Micro Capsule yang memberikan hasil yang sejuk sehingga mampu menjaga kelembutan kulit wajah
                        kamu lebih lama. Terdapat juga kandungan Hyaluronic Acid & Citrus Essence agar tetap menjaga
                        kulit tetap segar tanpa rasa lengket serta mudah menyerap ke dalam kulit.</p>
                    <hr>
                    <h6>Rp. 120.000</h6>
                </div>
                <div class="card-footer">
                    <a href="konfigurasi.php?produk=Biore UV Aqua Rich Watery Essence SPF 50+/PA+++&harga=120000"
                        type="submit" class="btn btn-primary btn-block" role="button">Tambahkan ke Keranjang</a>
                </div>
            </div>
            <div class="card">
                <img src="img/gambardua.jpg" class="card-img-top"
                    alt="L’oreal Paris Men Expert Hydra Energetic Multi Action Moisturizer">
                <div class="card-body">
                    <h5 class="card-title">L’oreal Paris Men Expert Hydra Energetic Multi Action Moisturizer</h5>
                    <p class="card-text">Memiliki kandungan vitamin C yang berarti dapat mencegah dan mengurangi
                        tanda kulit kelelahan kamu yang sudah beraktivitas seharian di luar ruangan serta akan
                        memberikan efek lembap sepanjang hari, menjadikan kulit lebih lembut, ringan, dan
                        mencerahkan.</p>
                    <hr>
                    <h6>Rp. 250.000</h6>
                </div>
                <div class="card-footer">
                    <a href="konfigurasi.php?produk=L’oreal Paris Men Expert Hydra Energetic Multi Action Moisturizer&harga=250000"
                        type="submit" class="btn btn-primary btn-block" role="button">Tambahkan ke Keranjang</a>
                </div>
            </div>
            <div class="card">
                <img src="img/gambartiga.jpg" class="card-img-top" alt="Laneige Homme Blue Energy Skin Toner">
                <div class="card-body">
                    <h5 class="card-title">Laneige Homme Blue Energy Skin Toner</h5>
                    <p class="card-text">Toner antipenuaan bertekstur gel yang mengisi kembali kelembapan dan
                        menenangkan kulit yang tampak stres agar terlihat lebih sehat dan jernih.</p>
                    <hr>
                    <h6>Rp. 364.000</h6>
                </div>
                <div class="card-footer">
                    <a href="konfigurasi.php?produk=Laneige Homme Blue Energy Skin Toner&harga=364000" type="submit"
                        class="btn btn-primary btn-block" role="button">Tambahkan ke Keranjang</a>
                </div>
            </div>
        </div>

    </div>


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