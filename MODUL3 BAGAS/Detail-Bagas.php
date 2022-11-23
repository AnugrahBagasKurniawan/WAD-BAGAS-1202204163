<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<?php 
require 'config/edit.php';
$id_mobil = $_GET["id_mobil"];
$lstcar = query1("SELECT * FROM showroom_bagas_table WHERE id_mobil=$id_mobil")[0];

//udah pernah disubmit belom
if(isset($_POST["submit"])) {
    


    //cek data berhasil ditambahkan atau tidak
    if(edit($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah');
            
        </script>

        ";
        
    } else {
        echo "        
        <script>
            alert('data gagal diubah');
            
        </script>
    ";
    }

}
?>
<body>
    <section id="header">
        <div class="">
            <ul class="navbar">
                <li><a href="Home-Bagas.php">Home</a></li>
                <li><a href="">MyCar</a></li>
            </ul>
        </div>
    </section>
    <div class="container">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_mobil" value="<?= $lstcar["id_mobil"];?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BMW I4" name="nama_mobil" value="<?= $lstcar["nama_mobil"];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pemilik Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama-Nim" name="pemilik_mobil" value="<?= $lstcar["pemilik_mobil"];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BMW" name="merk_mobil" value="<?= $lstcar["merk_mobil"];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="11/12/2022" name="tanggal_beli" value="<?= $lstcar["tanggal_beli"];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <input class="form-control" type="text" id="formFile" name="deskripsi" value="<?= $lstcar["deskripsi"];?>">
                </div>  
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="foto_mobil" value="">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault1" value="Lunas"
                    <?php if($lstcar["status_pembayaran"] == 'Lunas') :?>
                        checked;
                        <?php endif ?>
                    >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault2" value="Belum Lunas"
                    <?php if($lstcar["status_pembayaran"] == 'Belum Lunas') :?>
                        checked;
                        <?php endif ?>
                    >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
    </div>
</body>
</html>