<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootswatch -->
  <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
  <!-- inserimento file css -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
  <title>PHP E-commerce</title>
</head>

<body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:aqua">
    <div class="container">
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>public?page=homepage">PHP E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo ROOT_URL; ?>public?page=about">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>public?page=services">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>public?page=about">Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>public?page=contacts">Contatti</a>
          </li>
        </ul>

        <!-- spostamento a destra del dropdown -->
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
