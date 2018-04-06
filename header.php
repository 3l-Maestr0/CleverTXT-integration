<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>CleverTXT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- ***************************************************
      Menu
    **************************************************** -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <ul class="nav justify-content-end">
          <li class="nav-item text-secondary"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Fonctionnalités</a></li>
          <li class="nav-item text-dark"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong>Exemples</strong></a></li>
          <li class="nav-item text-secondary"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Tarifs</a></li>
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button" class="btn btn-outline-primary" style="margin-left : 10px; border-radius : 40px">Connexion</a></li>
          <li class="nav-item"><a href=" <?php echo esc_url( home_url( '/' ) ); ?>" role="button" class="btn btn-primary" style="margin-left : 10px; border-radius : 40px">Créer un compte <span class="badge badge-light">BÊTA</span></a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid" style="width : 100%; padding-right : 0px; padding-left : 0px; margin-bottom: 50px;">
