<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <style>
    img{
        width: 55%;
    }
    .konten{
        padding: 50px;
    }
  </style>
  <?php 
  require 'config/daftar.php';
  if(isset($_POST["daftar"])) {
    if(daftar($_POST) > 0)  {
        echo "<script>
                alert('Registrasi Berhasil')
            </script>
        ";
    } else{
        echo_myqli_error($conn);
    }
  }
  ?>
  <body>
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <img src="image/Background.webp" alt="">
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <div class="konten">
                <h2>Registrasi</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="password2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"  name="No_hp">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                    </div>
                </form>
                <p>Anda sudah punya akun?<a href="Login-Bagas.php">Login</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>