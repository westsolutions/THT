<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Barebones</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= asset('styles/main.css') ?>">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>

<div class="sub-navbar">
  <div class="container">
    <div class="sub-navbar-block">
      <p><a href="#"><span>450.465.14261</span></a> <a href="#">1.888.708.5582</a></p>
      <ul>
        <li><a href="#">Review us on Google</a></li>
        <li><a href="#">Gift Certificates</a></li>
        <li><a href="#">Français</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="fixed-top main-navbar">
  <div class="container">
    <nav class="navbar navbar-expand-lg justify-content-between">
      <a class="navbar-brand" href="/">
        <img src="<?= asset('images/logo.svg') ?>" alt="" class="logo"> <img src="<?= asset('images/logo-dark.svg') ?>" alt="" class="logo-dark">
        <span class="navbar-text"> TOTAL HOME TRAINING</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Services</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="locations-landing.php">Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>