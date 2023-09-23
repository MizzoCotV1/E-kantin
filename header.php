<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg bg-body-success"> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Kantin Kita</a>
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-light border-bottom">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center fs-5 flex-grow-1 pe-3">
          <li class="nav-item mx-2">
            <a class="nav-link active " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link active " aria-current="page" href="shoping-cart.php">Keranjang</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link active " aria-current="page" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 " href="#">Link</a>
          </li>
        </ul>
        <!-- login/logout -->
        <div class="d-flex justify-content-center align-items-center gap-3">
          <a href="login.php" class="text-white px-3 py-1 rounded-3"  style="background-color:#008000" >Login</a>
          <a href="#sign up" class="text-white text-decoration-none- px-3 py-1 rounded-3" style="background-color: #008000">Sign Up</a>
        </div>
       
      </div>
    </div>
  </div>
</nav>
</nav>
</body>
</html>