<?php
session_start();

include_once("konfigurasi.php");

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}

if (isset($_POST['login'])) {
    login($_POST);
}

if (!empty($_COOKIE['rememberMe'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $rememberMe = $_COOKIE['rememberMe'];
} else {
    $email = null;
    $password = null;
    $rememberMe = null;
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
                        <h4 class="card-title text-center mt-4 pb-2">Login</h4>
                        <hr>
                        <div class="card-body pt-0">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="E-mail" value="<?= $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Kata Sandi" value="<?= $password; ?>">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe"
                                        <?= $rememberMe; ?>>
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                                <div class="text-center pt-2">
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                                    <p class="mt-3">Belum punya akun? <a href="register.php"
                                            class="text-secondary">Registrasi</a></p>
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