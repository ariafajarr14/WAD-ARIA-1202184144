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

  <h4 style="color: #569ABC;">EAD HOTEL</h4>
  <h6 style="color: #569ABC;">Welcome To 5 Star Hotel</h6><br>

  <div class="container">
    <div class="card" style="width: 15rem; " id="card1">
      <img src="img/gambar1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title" style="text-align:center;">Standard</h4>
        <h5 class="card-title" style="text-align:center; color:#3970A1;">$ 90/Day</h5>
      </div>
      <div class="listcontainer" style=" background-color:; margin:auto; text-align:center; width:200px;">
        <div style="padding-top:13px; background-color:#F7F7F7;">
          <p>Facilities</p>
          <hr>
        </div>
        <div>
          <p>1 Single Bed</p>
          <hr>
        </div>
        <div ">
          <p>1 Bathroom</p>
        </div>
      </div>
      
      <div class=" card-body text-center" style="background-color:#F7F7F7; ">
          <form action="booking.php" method="POST"><button type="submit" class="btn btn-primary" name="cek"
              value="Standard">Book
              Now</button>
          </form>
        </div>
      </div>

      <div class="card" style="width: 15rem; " id="card2">
        <img src="img/gambar2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title" style="text-align:center;">Superior</h4>
          <h5 class="card-title" style="text-align:center; color:#3970A1;">$ 150/Day</h5>
        </div>
        <div class="listcontainer" style=" background-color:; margin:auto; text-align:center; width:200px;">
          <div style="padding-top:13px; background-color:#F7F7F7;">
            <p>Facilities</p>
            <hr>
          </div>
          <div>
            <p>1 Double Bed</p>
            <hr>
          </div>
          <div>
            <p>1 Television and Wi-Fi</p>
            <hr>
          </div>
          <div>
            <p>1 Bathroom with hot water</p>
          </div>
        </div>
        <div class="card-body text-center" style="background-color:#F7F7F7; ">
          <form action="booking.php" method="POST"><button type=" submit" class="btn btn-primary" name="cek"
              value="Superior">Book
              Now</button>
          </form>
        </div>
      </div>

      <div class="card" style="width: 15rem;" id="card3">
        <img src="img/gambar3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title" style="text-align:center;">Luxury</h4>
          <h5 class="card-title" style="text-align:center; color:#3970A1;">$ 200/Day</h5>
        </div>
        <div class="listcontainer" style=" background-color:; margin:auto; text-align:center; width:200px;">
          <div style="padding-top:13px; background-color:#F7F7F7;">
            <p>Facilities</p>
            <hr>
          </div>
          <div>
            <p>2 Double Bed</p>
            <hr>
          </div>
          <div>
            <p>2 Bathroom with hot water</p>
            <hr>
          </div>
          <div>
            <p>1 Kitchen</p>
            <hr>
          </div>
          <div>
            <p>1 Television and Wi-Fi</p>
            <hr>
          </div>
          <div>
            <p>1 Workroom</p>

          </div>
        </div>
        <div class="card-body text-center" style="background-color:#F7F7F7; ">
          <form action="booking.php" method="POST"><button type=" submit" class="btn btn-primary" name="cek"
              value="Luxury">Book
              Now</button>
          </form>
        </div>
      </div>

    </div>




</body>

</html>