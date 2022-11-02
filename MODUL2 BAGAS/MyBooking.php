<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBooking</title>
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
</style>
<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="">Booking</a></li>
        </ul>
    </div>
    <div class="teks1">
        <h4>THANKYOU ANUGRAHBAGASKURNIAWAN_1202204163 FOR RESERVING</h4>
        <P>Please Double Check Your Reservation Detail!</P>
    </div>
    <?php
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $durasi = $_POST['durasi'];
    $mobil = $_POST['mobil'];
    $telepon = $_POST['telepon'];

    if ($mobil == "1"){
        $harga = 200000;
    } else{
        $harga = 150000;
    }

    $harga = $harga*$durasi;
    ?>
    
    <div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Star Time</th>
                <th scope="col">Duration(Days)</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>AnugrahBagasKurniawan_1202204163</td>
                <td><?php echo $tanggal ?></td>
                <td><?php echo $jam ?></td>
                <td><?php echo $durasi ?></td>
                <td><?php echo $mobil?></td>
                <td><?php echo $telepon?></td>
                <td><?php echo $harga?></td>
            </tr>
        </tbody>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary" style="margin-top: 10px"><a href="HomePage.php">Kembali</a></button>
    </div>
    <div class="card-footer">
    Created By AnugrahBagasKurniawan_1202204163
    </div>
</body>
</html>