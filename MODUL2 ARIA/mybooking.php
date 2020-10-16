<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Booking</title>
  <style>
    body {}

    ul.navbar-nav {
      margin: auto;
    }

    h4 {
      text-align: center;
    }

    h6 {
      text-align: center;
    }

    .container {

      height: 900px;
    }

    .card {

      margin: 10px auto;
      position: absolute;
    }

    #card1 {
      margin-left: 100px;

    }

    #card2 {
      margin-left: 430px;

    }

    #card3 {
      margin-left: 760px;
    }
  </style>
</head>

<body>
<?php
    $nobooking = rand(100000000,199999999);
    $nama = $POST['nama'];
    $cekin = $_POST['cekin'];

    $date = $cekin;
    $dateNew = new DateTime($date);
    $durasi = $_POST['durasi'];
    $cekout = $dateNew->modify("+$durasi days");

    $cek = $_POST['cek'];
    $nohp = $_POST['nohp'];

    $price = 0;
    $addService = 0;
    ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav content-center">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>



  <table class="table" style="margin:40px auto auto auto; width:1200px;" >
    <thead>
      <tr>
        <th scope="col" style="width:155px">Booking Number</th>
        <th scope="col">Name</th>
        <th scope="col" style="width:110px">Check-in</th>
        <th scope="col" style="width:110px">Check-out</th>
        <th scope="col" style="width:110px">Room type</th>
        <th scope="col"  style="width:140px">Phone Number</th>
        <th scope="col"  style="width:150px">Service</th>
        <th scope="col">Total Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>$nobooking ?></td>
        <td><?= $nama ?></td>
        <td><?= $cekin ?></td>
        <td><?= $cekout->format("Y-m-d"); ?></td>
        <td><?= $cek ?></td>
        <td><?= $nohp ?></td>
        <td>
        <?php
        if(isset($_POST['servis'])){
          $servis = $_POST['servis'];
          foreach($servis as $key => $servis){
            echo "<li> $servis </li>";
            $addService +=20; 
          }
        }
        else{
          echo "no service";
        }
        
        ?>
        </td>
        <td>
          <?php
              if($cek === "Standard") {
                $price +=90;
              }else if ($cek === "Superior") {
                $price +=150;
              }else if ($cek === "Luxury") {
                $price +=200;
              }else{
                $price +=0;
              }
              $totalprice = ($price * $durasi) + $addService;
              echo "$ $totalprice";
          ?>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>

