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
<body>
    <section id="header">
        <div class="">
            <ul class="navbar">
                <li><a href="">Home</a></li>
                <li><a href="ListCar-Bagas.php">MyCar</a></li>
            </ul>
        </div>
        <div class="kanan">
            <a href="{{route('loginpage')}}" style="color: white; text-decoration: none;">Login</a>
        </div>
    </section>
    <section id="bagidua">
        <div class="home">
            <h2>Selamat Datang Di Show Room Bagas</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure qui rerum, tenetur praesentium dolorum nihil earum dolore commodi voluptates saepe, similique corrupti reiciendis officiis et at porro facilis optio doloribus!</p>
            <a href="Add-Bagas.php"><button type="button" class="btn btn-primary">MyCar</button></a>
        </div>
        <div>
            <img src="image/car1.webp" alt="">
        </div>
    </section>
</body>
</html>