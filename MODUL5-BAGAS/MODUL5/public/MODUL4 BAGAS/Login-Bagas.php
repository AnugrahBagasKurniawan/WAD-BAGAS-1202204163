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
  session_start();
  require 'config/login.php';
  //cek cookie
  if (isset($_COOKIE['id']) && isset($_COOKIE['nama'])) {
    $id = $_COOKIE['id'];
    $nama = $_COOKIE['nama'];

    $result = mysqli_query($conn, "SELECT nama FROM user_bagas WHERE id=$id" );
    $row = mysqli_fetch_assoc($result);

    if($nama === $row['nama']) {
        $_SESSION['nama'] = $nama;
        $_SESSION['login'] =true;
    }

  }
  if (isset($_SESSION["login"])) {
      $_SESSION['nama'] = $nama;
      $_SESSION['id'] = $id;
      header("Location: Home2-Bagas.php");
      exit;
  }

  $hasil = query("SELECT * FROM user_bagas");
  if(isset($_POST["login"])) {
    if(login($_POST) > 0)  {
        echo "<script>
                alert('Login Berhasil')
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
                <h2>Login</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="password">
                    </div>
                    <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ingat Saya
                            </label>
                    </div>
                    <div class="mb-3">
                        <a href=""></a><button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
                <p>Anda Belum punya akun?<a href="Registrasi.php">Daftar</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>