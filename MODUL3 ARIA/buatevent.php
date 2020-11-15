<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <?php
        include ('koneksi.php');

        if (isset($_POST['submit'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $deskripsi = $_POST['deskripsi'];
            $gambar = $_POST['gambar'];
            if (isset($_POST['kategori'])){
                $kategori = $_POST['kategori'];
            }
            $tanggal = $_POST['tanggal'];
            $mulai = $_POST['mulai'];
            $berakhir = $_POST['berakhir'];
            $tempat = $_POST['tempat'];
            $harga = $_POST['harga'];
            $benefit = implode(", ", $_POST['benefit']);

            $query = "INSERT INTO event (id, nama, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit)
                        VALUES ('$id', '$nama', '$deskripsi', '$gambar', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')";
            $insert = mysqli_query($conn, $query);
            if($insert){
                header('Location: home.php?status=sukses');
            }else{
                header('Location: home.php?status=gagal');
            }
        }
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="home.php">EAD EVENTS</a>
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
        </ul>
        <a href="buatevent.php"><button name="buat" id="buat" class="btn btn-outline-light mr-3" type="submit">Buat
                Event</button>
        </a>
        </a>
    </nav>

    <div class="content">
        <h5 id="hbuat">Buat Event</h5>
    </div>

    <form method="post">
        <div class="row rowcard">
            <div class="col-sm-6">
                <div class="card cardkiri">
                    <div class="card-header kiri">
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="upload">
                            <label for="gambar">Upload Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar" required="">
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
                        </div>
                        <br>
                        <div class="kat">
                            <label for="kategori">Kategori</label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="kategori" class="custom-control-input"
                                    value="Online">
                                <label class="custom-control-label" for="customRadioInline1">Online</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="kategori" class="custom-control-input"
                                    value="Offline">
                                <label class="custom-control-label" for="customRadioInline2">Offline</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card cardkanan">
                    <div class="card-header kanan">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="row">
                            <div class="form-group jam">
                                <label for="mulai">Jam Mulai</label>
                                <input type="time" class="form-control" id="mulai" name="mulai">
                            </div>
                            <div class="form-group jam">
                                <label for="berakhir">Jam Berakhir</label>
                                <input type="time" class="form-control" id="berakhir" name="berakhir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" id="tempat" name="tempat">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                        <div>
                            <div><label for="customCheck">Benefit</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="benefit[]" id="customCheck1"
                                    value="Snacks">
                                <label class="custom-control-label" for="customCheck1">Snacks</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="benefit[]" id="customCheck2"
                                    value="Sertifikat">
                                <label class="custom-control-label" for="customCheck2">Sertifikat</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="benefit[]" id="customCheck3"
                                    value="Souvenir">
                                <label class="custom-control-label" for="customCheck3">Souvenir</label>
                            </div>
                        </div>
                        <br>
                        <div class="row button">
                            <div class="buttonkiri">
                                <button type="submit" class="btn btn-primary pull-right" id="submit"
                                    name="submit">Submit</button>
                            </div>
                            <div class="buttonkanan">
                                <button type="submit" class="btn btn-danger pull-right" id="cancel"
                                    name="cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
</body>

</html>