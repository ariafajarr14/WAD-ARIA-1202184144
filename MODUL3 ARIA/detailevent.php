<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="CSS/style.css">
    <?php
        include("koneksi.php");
        $query = "SELECT * FROM event";
        $select = mysqli_query($conn, $query);
        include("koneksi.php");

        if(isset($_POST['submit'])){
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

            $query = "UPDATE event SET nama='$nama',
            deskripsi='$deskripsi'
            gambar='$gambar'
            kategori='$kategori'
            tanggal='$tanggal'
            mulai='$mulai'
            berakhir='$berakhir'
            tempat='$tempat'
            harga='$harga'
            benefit='$benefit' WHERE id='$id'";
            $update = mysqli_query($conn, $query);
            include("koneksi.php");
        }
        include('koneksi.php');
        if(isset ($_POST['reset'])){
            $query = "DELETE FROM event";
            $delete = mysqli_query($conn, $query);
            header('Location: home.php');
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
        <h5 id="hhome">Detail Events!</h5>
    </div>

    <?php
    while($row = mysqli_fetch_assoc($select)){
    
    ?>

    <div class="card mb-2 carddetail">
        <img src="<?php echo $row['gambar']; ?>" alt="" style="height: 400px;">
        <div class="card-body">
            <p class="card-title" style="font-size: 20px;"><?php echo $row['nama']; ?></p>
            <br>
            <div>
                <p class="card-text"><b>Deskripsi</b></p>
                <p class="card-text"><?php echo $row['deskripsi']; ?></p>
            </div>
            <br>
            <div class="row" style="margin-left: auto; margin-right:auto;">
                <div style="height:auto; width:50%; position:relative;">
                    <p class="card-text"><b>Informasi Event</b></p>
                    <p><img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png" alt=""
                            style="width:7%;">&nbsp; <?php echo $row['tanggal']; ?></p>
                    <p><img src="https://i.pinimg.com/originals/30/98/49/309849c5815761081926477e5e872f1e.png" alt=""
                            style="width:6%;">&nbsp;&nbsp; <?php echo $row['tempat']; ?></p>
                    <p><img src="https://cdn.iconscout.com/icon/free/png-256/clock-1605637-1360989.png" alt=""
                            style="width:6%;">&nbsp;&nbsp; <?php echo $row['mulai']; ?> -
                        <?php echo $row['berakhir']; ?></p>
                    <p class="card-text"><b>Kategori:</b> &nbsp;&nbsp;&nbsp; <?php echo $row['kategori']; ?></p>
                    <p class="card-text"><b>HTM Rp.</b> <?php echo $row['harga']; ?></p>
                </div>
                <div style="height:auto; width:50%; position:relative;">
                    <p class="card-text"><b>Benefit</b></p>
                    <li><?php echo $row['benefit']; ?></li>
                </div>
            </div>
        </div>

        <div class="mr-auto ml-auto">
            <button type="button" style="width:120px; " class="btn btn-primary" data-toggle="modal"
                data-target="#modalEdit">
                Edit
            </button>
            <form method="POST">
                <button type="submit" style="width:120px; " class="btn btn-danger" name="reset" id="reset">
                    Delete
                </button>
            </form>

        </div>
        <br>

        <!-- MODAL EDIT-->
        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Edit Content Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form method="post">
                        <div class="row rowcard">
                            <div class="col-sm-6">
                                <div class="card cardkiri">
                                    <div class="card-header kiri">
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="<?php echo $row['id']?>" />
                                        <div class="form-group">
                                            <label for="nama">Name</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="<?php echo $row['nama'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi"
                                                    value="<?php echo $row['deskripsi'] ?>" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="upload">
                                            <label for="gambar">Upload Gambar</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar"
                                                    value="<?php echo $row['gambar'] ?>" required="">
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="kat">
                                            <label for="kategori">Kategori</label>
                                            <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="kategori"
                                                    class="custom-control-input" value="Online">
                                                <label class="custom-control-label"
                                                    for="customRadioInline1">Online</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="kategori"
                                                    class="custom-control-input" value="Offline">
                                                <label class="custom-control-label"
                                                    for="customRadioInline2">Offline</label>
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
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                value="<?=$row['tanggal']?>">
                                        </div>
                                        <div class="row">
                                            <div class="form-group jam">
                                                <label for="mulai">Jam Mulai</label>
                                                <input type="time" class="form-control" id="mulai" name="mulai"
                                                    value="<?=$row['mulai']?>">
                                            </div>
                                            <div class="form-group jam">
                                                <label for="berakhir">Jam Berakhir</label>
                                                <input type="time" class="form-control" id="berakhir" name="berakhir"
                                                    value="<?=$row['berakhir']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat">Tempat</label>
                                            <input type="text" class="form-control" id="tempat" name="tempat"
                                                value="<?=$row['tempat']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga"
                                                value="<?=$row['harga']?>">
                                        </div>
                                        <div>
                                            <div><label for="customCheck">Benefit</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" name="benefit[]"
                                                    id="customCheck1" value="Snacks">
                                                <label class="custom-control-label" for="customCheck1">Snacks</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" name="benefit[]"
                                                    id="customCheck2" value="Sertifikat">
                                                <label class="custom-control-label"
                                                    for="customCheck2">Sertifikat</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" name="benefit[]"
                                                    id="customCheck3" value="Souvenir">
                                                <label class="custom-control-label" for="customCheck3">Souvenir</label>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger" id="submit" name="submit">Oke</button>
                        </div>
                    </form>
                    <br>

                </div>
            </div>
        </div>




        <!-- Contoh Modal -->
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDeleteLabel">Judul Modal Di Sini</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Halo, ini modal sederhana.
                        <br />
                        Seri Tutorial Bootstrap 4 lengkap dari dasar sampai mahir.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Oke</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <?php
    }
    mysqli_close($conn);
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>