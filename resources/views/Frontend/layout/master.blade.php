<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resurces/css/app.css')
    <title>Document</title>
  </head>
  <body>
    <div class="container my-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 rounded shadow">
        <a href="#" class="navbar-brand">Yemek Tarifleri</a>
        <button class="navbar-toggler border-0" type="button" name="button" data-toggle="collapse" data-target="#navbar-container">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-container">
          <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link">Tarifler</a>
            <a href="#" class="nav-item nav-link active">Popüler Yemekler</a>
            <a href="#" class="nav-item nav-link">Tatlılar</a>
            <a href="#" class="nav-item nav-link">Salatalar</a>
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
            <div class="col-md-4">
              <img src="images/2.jpg" class="img-fluid" />
              <h6 class="text-center my-2">Yemek Adı ve Tarifi</h6>
            </div>
            <div class="col-md-4">
              <img src="images/3.jpg" class="img-fluid" />
              <h6>Yemek Adı ve Tarifi</h6>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4">
              <img src="images/4.jpg" class="img-fluid" />
              <h6 class="text-center my-2">Yemek Adı ve Tarifi</h6>
            </div>

            <div class="col-md-4">
              <img src="images/5.jpg" class="img-fluid" />
              <h6 class="text-center my-2">Yemek Adı ve Tarifi</h6>
            </div>
            <div class="col-md-4">
              <img src="images/6.jpg" class="img-fluid" />
              <h6 class="text-center my-2">Yemek Adı ve Tarifi</h6>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item list list-group-item-action">KATEGORİLER</a>
            <a href="#" class="list-group-item list list-group-item-action list-group-item-success">Yemek Tarifleri</a>
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
