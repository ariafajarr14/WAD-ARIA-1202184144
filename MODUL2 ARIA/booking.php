<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {}

    ul.navbar-nav {
      margin: auto;

    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav content-center">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container" style=" height:100%; width:100%; margin-top:40px;">
    <div class="kiri" style=" width:380px; display:inline-block; margin-bottom:10px; margin-left:50px;">
      <form action="mybooking.php" method="post">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="inputnama" name="nama" style="height:35px;">
        </div>
        <div class="form-group">
          <label for="checkin">Check-in</label>
          <input type="date" class="form-control" id="inputcekin" name="cekin" style="height:35px;">
        </div>
        <div class="form-group">
          <label for="inputdurasi">Duration
            <input type="text" class="form-control" id="inputdurasi" name="durasi" style="height:35px;">
            <label for="labelhari" style="font-size:11px;">Day(s)</label>
        </div>
        <div class="form-group">
          <label for="pilihroom">Room Type</label>
          <?php
          if (isset($_POST['cek'])){
            $cek = $_POST['cek'];
          }
          if (!empty($cek)) {
            echo '<input type="text" class="form-control" id="StandardRoom" name="cek" readonly value='.$cek.'>';
          }
          else{
            echo '<select id="disabledSelect" class="form-control" name="cek">';
            echo '<option value="Standard" >Standard </option>';
            echo '<option value="Superior" selected>Superior </option>';
            echo '<option value="Luxury" >Luxury </option>';
            echo '</select>';
          }
          ?>
        </div>
        <label for="labelservice">Add Service(s)</label><br>
        <label for="labelharga" style="font-size:11px;">$ 20/Service</label>
        <div class="form-group form-check">
          <label><input type="checkbox" class="form-check-input" name="servis[]" value="Room Service">
            Room Service</label>
        </div>
        <div class="form-group form-check">
          <label><input type="checkbox" class="form-check-input" name="servis[]" value="Breakfast">
            Breakfast</label>
        </div>
        <div class="form-group">
          <label for="inputno">Phone Number</label>
          <input type="text" class="form-control" id="inputnohp" name="nohp" style="height:35px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;" name="boking" value="boking">Book</button>
      </form>
    </div>

    <div class="kanan" style=" height:500px; width:500px; display:inline-block;margin-right:60px;float:right;">
      <?php
          if(empty($cek)){
            echo '<img src="img/gambar1.png">';
          }else{
            $cek = $_POST['cek'];
          
          if ($cek === "Standard"){
            echo '<img src="img/gambar1.png">';
          } else if ($cek === "Superior") {
            echo '<img src="img/gambar2.png">';
          } else if ($cek === "Luxury") {
            echo '<img src="img/gambar3.png">';
          } else {
            echo '<img src="img/gambar1.png">';
          }
        }
      ?>
    </div>
  </div>
</body>

</html>