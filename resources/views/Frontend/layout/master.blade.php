<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resurces/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="container mt-2">
        <nav class="navbar navbar-expand-lg bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#"
                                class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-item nav-link">Tarifler</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-item nav-link">Popüler Yemekler</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-item nav-link">Tatlılar</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-item nav-link">Salatalar</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-9">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <img src="images/1.jpg" class="img-fluid" />
                        <h6 class="text-center my-2">Yemek Adı ve Tarifi</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list list-group-item-action">KATEGORİLER</a>
                    <a href="#" class="list-group-item list list-group-item-action list-group-item-success">Yemek
                        Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action active">Yemek Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action">Yemek Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action">Yemek Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action">Yemek Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action">Yemek Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action">Yemek Tarifleri</a>
                    <a href="#" class="list-group-item list list-group-item-action">Yemek Tarifleri</a>
                </div>
            </div>
        </div>

        <footer class="mt-3 position-absolute bottom-0 w-100 container">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <span class="float-left">
                        <b>Yemek Tarifleri</b>
                    </span>
                </div>
                <div class="card-footer text-center">
                    <small>Yemek Tarifleri tüm hakları saklıdır. Copyright 2023</small>
                </div>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    @vite('resources/js/app.js')
</body>

</html>
