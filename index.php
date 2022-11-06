<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Bootstrap 5.2</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

<nav class="navbar navbar-expand-md bg-primary navbar-dark">

    <div class="container-fluid">

        <div class="text-white">Discover bootstrap 5.2</div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-0" id="mynavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Categories</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Photos</a></li>
                        <li><a class="dropdown-item" href="#">Articles</a></li>
                        <li><a class="dropdown-item" href="#">Projects</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid mt-5">
    <div class="row">
        <h1 class="text-center">Journey into Bootstrap classes</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <img src="assets/images/forest.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Visit this forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="col-12 btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <img src="assets/images/cascade.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">See water in flowers</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="col-12 btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <img src="assets/images/mountain.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Quiet time</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="col-12 btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12 ">
            <div class="card">
                <img src="assets/images/river.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">River  and sun</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="col-12 btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid mt-5">
    <div class="row">
        <p class="text-center fs-3 "><strong>The css frameworks are very usefull</strong></p>
        <p class="text-center">learning them comes practice</p>
    </div>
</div>

<footer>
    <div class="container-fluid bg-primary fixed-bottom">
        <ul class="d-flex flex-row justify-content-center navbar-nav ">
            <li class="nav-item me-1">
                <a class="text-white nav-link"><strong>© 2022 wilders | images</strong></a>
            </li>
            <li class="nav-item">
                <a class="text-white nav-link" href="https://pixabay.com/"> pixabay.com</a>
            </li>
        </ul>
    </div>
</footer>
