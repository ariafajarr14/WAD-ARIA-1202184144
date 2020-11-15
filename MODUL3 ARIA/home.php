<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <?php
        require 'koneksi.php';
        $show = mysqli_query($conn, "SELECT * FROM event");
        $cek = mysqli_num_rows($show);
        $query = "SELECT * FROM event";
        $select = mysqli_query($conn, $query);
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
    <h5 id="hhome">WELCOME TO EAD EVENTS!</h5>
  </div>

  <?php
  if ($cek == 0){
echo "No Events Found!";
}
  
    while($row = mysqli_fetch_assoc($select)) :
    
    ?>

  <p>&nbsp;</p>
  <div class="card" style="width: 17rem; margin-left:200px;">
    <img src="<?php echo $row['gambar']; ?>" alt="" style="width: auto; height:18rem;">
    <div class="card-body">
      <h5 class="card-title" name="nama" id="nama"><?php echo $row['nama']; ?></h5>
      <p><img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png" alt=""
          style="width:7%;">&nbsp; <?php echo $row['tanggal']; ?> </p>
      <p><img src="https://i.pinimg.com/originals/30/98/49/309849c5815761081926477e5e872f1e.png" alt=""
          style="width:6%;">&nbsp;&nbsp; <?php echo $row['tempat']; ?></p>
      <p class="card-text">Kategori: <?php echo $row['kategori']; ?></p>
      <hr>
      <a href="detailevent.php" class="btn btn-primary" style="float: right; width:100px">Detail</a>
    </div>
  </div>
    <?php endwhile; ?>
    
  <br>
  <br>
  <br>
  <br>
  <br>
</body>

</html>