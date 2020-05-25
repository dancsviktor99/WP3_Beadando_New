<!DOCTYPE html>
<html lang="hu">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HungarianDishShop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">HungarianDishShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dishNavbar" aria-controls="dishNavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="dishNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav font-italic">
        <a class="nav-link" href="<?=base_url()?>">Összes termék</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php if(!$this->ion_auth->logged_in()): ?>
      <li class="nav-item">
        <a href="<?php echo base_url('auth/login'); ?>" class="nav-link font-weight-bold, font-italic">Bejelentkezés</a>
      </li>
      <li class="nav-item">
          <a href="<?php echo base_url('register'); ?>" class="nav-link font-weight-bold, font-italic">Regisztráció</a>
      </li>
      <?php else: ?>
      <li class="nav-item mr-3">
        <a href="<?php echo base_url('cart'); ?>" class="nav-link">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown nav-item" href="#" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->ion_auth->user()->row()->username; ?></a>
            <div class="dropdown-header"></div>
            <a class="nav-link" href="<?php echo base_url('orders'); ?>">Rendeléseim</a>
            <div class="dropdown-header"></div>
            <a class="nav-link" href="<?php echo base_url('auth/change_password'); ?>">Jelszó módosítása</a>
            <div class="dropdown-header"></div>
            <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">Kilépés</a>
        </div>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<main class="container">

