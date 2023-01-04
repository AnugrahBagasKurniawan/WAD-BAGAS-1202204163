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
<style>
    #konten{
        padding: 20px 100px;
    }
    img{
        width: 50%;
    }
</style>
<body>
    <section id="header">
        <div class="">
            <ul class="navbar">
                <li><a href="{{route('Home2-Bagas')}}">Home</a></li>
                <li><a href="">MyCar</a></li>
            </ul>
        </div>
        <a href="{{route('Add-Bagas')}}"><button type="button" class="btn btn-light" >Add Car</button></a>
    </section>
    <section id="konten">
        <h2>My Show Room</h2>
        <p>List Show Rom Bagas_1202204163</p>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="card">
            @foreach ($showroom as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('image/'. $item->foto_mobil)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nama_mobil}}</h5>
                            <p class="card-text">{{$item->deskripsi}}</p>
                            <a href=" " class="btn btn-primary rounded-pill">Edit</a>
                            <a href="" class="btn btn-danger rounded-pill">Hapus</a>
                        </div>
                    </div>
                </div>  
            @endforeach 
        </div>
    </section>
</body>
</html>