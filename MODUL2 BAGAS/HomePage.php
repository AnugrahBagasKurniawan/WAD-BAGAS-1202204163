<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomePage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
  .header{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2px;
    background-color: black;
    position: sticky;
    font-size: larger;
  }
  .navbar{
    display: flex;
  }
  .navbar li{
    list-style: none;
    padding: 0 20px;
    position: relative;
  }
  .navbar li a{
    text-decoration: none;
    color: white;
  }
  .teks1{
    text-align: center;
    padding: 10px;
  }
  .daftarmobil{
    padding:0 60px;
  }
  .card-footer{
    text-align: center;
  }
</style>
<body>
  <?php
  $daftarmobil = [
    ["mobil"=>"Toyota Rush", "harga"=>"200.000","img"=>"https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png"],
    ["mobil"=>"Daihatsu Ayla", "harga"=>"150.000","img"=>"https://kadekbalicarrental.com/uploads/images/cars/slider/551259_new-ayla.png"],
    ["mobil"=>"Honda Brio", "harga"=>"150.000","img"=>"https://asset.honda-indonesia.com/variants/images/Vos4HUL6XFLHnM2dhTzGbzdNHpvNTnBNBKhZwxc0.png"],
    
  ]
  ?>
  <div class="header">
    <ul class="navbar">
      <li><a href="">Home</a></li>
      <li><a href="Booking.php">Booking</a></li>
    </ul>
  </div>
  <div class="teks1">
    <h4>WELCOME TO EAD RENT</h4>
    <p>Find Your Best Deal, Here!</p>
  </div>
  <div class="daftarmobil">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $daftarmobil[0]["img"]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $daftarmobil[0]["mobil"]?></h5>
            <p class="card-text"><?php echo $daftarmobil[0]["harga"]?></p>
          </div>
          <div class="cardfooter1">
            <div class="card-footer">
              <small class="text-muted">7 Kursi</small>
            </div>
            <div class="card-footer">
              <small class="text-muted">1500 CC</small>
            </div>
            <div class="card-footer">
              <small class="text-muted">Manual</small>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-sm">Book Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $daftarmobil[1]["img"]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $daftarmobil[1]["mobil"]?></h5>
            <p class="card-text"><?php echo $daftarmobil[1]["harga"]?></p>
          </div>
          <div class="cardfooter1">
            <div class="card-footer">
              <small class="text-muted">5 Kursi</small>
            </div>
            <div class="card-footer">
              <small class="text-muted">2500 CC</small>
            </div>
            <div class="card-footer">
              <small class="text-muted">Manual</small>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-sm">Book Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $daftarmobil[2]["img"]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $daftarmobil[2]["mobil"]?></h5>
            <p class="card-text"><?php echo $daftarmobil[2]["harga"]?></p>
          </div>
          <div class="cardfooter1">
            <div class="card-footer">
              <small class="text-muted">5 Kursi</small>
            </div>
            <div class="card-footer">
              <small class="text-muted">1200 CC</small>
            </div>
            <div class="card-footer">
              <small class="text-muted">Automatic</small>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-sm">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    Created By AnugrahBagasKurniawan_1202204163
  </div>
</body>
</html>