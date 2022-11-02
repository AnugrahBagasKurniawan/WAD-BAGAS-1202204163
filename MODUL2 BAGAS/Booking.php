<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
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
  .card-footer{
    text-align: center;
  }
  .bagidua{
    display: flex;
    align-items: center;
    justify-content: space-evenly;

  }
  .bagidua img{
    width: 50%;
  }
</style>
    <?php
    $daftarmobil = [
        ["mobil"=>"Toyota Rush", "harga"=>"200.000","img"=>"https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png"],
        ["mobil"=>"Daihatsu Ayla", "harga"=>"150.000","img"=>"https://kadekbalicarrental.com/uploads/images/cars/slider/551259_new-ayla.png"],
        ["mobil"=>"Honda Brio", "harga"=>"150.000","img"=>"https://asset.honda-indonesia.com/variants/images/Vos4HUL6XFLHnM2dhTzGbzdNHpvNTnBNBKhZwxc0.png"],
        
    ]
    ?>

<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="">Booking</a></li>
        </ul>
    </div>
    <div class="teks1">
        <h4>RENT YOUR CAR NOW</h4>
    </div>
    <div class="bagidua">
        <div>
            <?php
                if (isset($_GET["img"])) {
                ?><img class="" width="100%" src="<?= $_GET["img"]; ?>" alt="">
                <?php
                } else {
                ?><img width="100%" src="<?php echo $daftarmobil[0]["img"]?>" alt="">
                <?php } 
            ?>
        </div>
        <div class="container">
            <form action="MyBooking.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Book Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="tanggal">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="" name="jam">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Duration(Days)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="durasi">
                </div>
                <div>
                    <label for="pilihmobil">Car Type</label>
                    <select class="form-select" aria-label="Default select example" id="pilihmobil" name="mobil">
                        <option selected>Pilih Mobil</option>
                        <option value="1">Toyota Rush</option>
                        <option value="2">Daihatsu Ayla</option>
                        <option value="3">Honda Brio</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" min="0" name="telepon">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Book</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer">
    Created By AnugrahBagasKurniawan_1202204163
    </div>
</body>
</html>