<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Shop</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          <form action="{{ route('logout')}}" method="post" class="d-flex" role="search">
            @csrf
            <button class="btn btn-outline-success" type="submit">logout</button>
          </form>
        </div>
    </nav>

    <div class="container d-flex justify-content-around">
        @foreach ($products as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/'.$item['image']) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $item['name'] }}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{ route('order',$item['id']) }}" class="btn btn-primary">Order now</a>
            </div>
          </div>
        @endforeach
    </div>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
