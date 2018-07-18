<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Barebones</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('styles/main.css') ?>">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>


<nav class="navbar navbar-expand-lg fixed-top justify-content-between">
  <div class="sub-navbar">
  <p>450.465.14261 <span>1.888.708.5582</span></p>
  <ul>
    <li><a href="#">Review us on Google</a></li>
    <li><a href="#">Gift Certificates</a></li>
    <li><a href="#">Français</a></li>
  </ul>
</div>
  <a class="navbar-brand" href="#">
    <span class="navbar-text"> <img src="<?= asset('images/logo.svg') ?>" alt="">TOTAL HOME TRAINING</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Services</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Locations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>