<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Mine
 * @subpackage BootSTheme
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>CleverTXT</title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?> /style.css" />
  <?php
  wp_head();
  ?>
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
        <li class="nav-item text-secondary"><a class="nav-link" href="#">Fonctionnalités</a></li>
        <li class="nav-item text-dark"><a class="nav-link" href="#">Exemples</a></li>
        <li class="nav-item text-secondary"><a class="nav-link" href="#">Tarifs</a></li>
        <li class="nav-item"><a href="#" role="button" class="btn btn-outline-default">Connexion</a></li>
        <li class="nav-item"><a href=" #" role="button" class="btn btn-default">Créer un compte <span class="badge badge-light">BÊTA</span></a></li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid" id="myPage"> <!-- page -->
