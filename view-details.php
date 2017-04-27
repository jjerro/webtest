<?php
    require_once "controller/admin-class.php";

// Get the application settings and parameters

require_once "controller/params.php";
require_once "controller/dbconfig.php";
//require_once ROOT."../includes/classes/commons.php";

// Start the session if it's not yet started 
// and make it available on 
// all pages which include the header.php

// Get some common objects ready for various files
$dbh    = new Dbconnect();

    // This could be a counstant
    $numberOfProductsToFetch = 25;

    $admins     = new Admins($dbh);
    $products = $admins->fetchProducts($numberOfProductsToFetch);

?>


<!DOCTYPE html>
<html lang="id">
<head>
  <title>Aplikasi Database Koleksi Museum NTT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="web-css.css">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo-nav.png" height="60" width="300"></a>
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Koleksi</a></li>
        <li><a href="#">Pengguna</a></li>
        <li><a href="#">Katalog</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <img src="img/logo-nav.png" height="60" width="300" style="padding-top: 7px; margin: auto;">

      <ul class="nav nav-pills nav-stacked" style="padding-top:7px;">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Koleksi</a></li>
        <li><a href="#section3">Pengguna</a></li>
        <li><a href="#section3">Katalog</a></li>
      </ul><br>
    </div>
    <br>
    
 <div class="col-sm-9">

<?php include "menus.php";?>
      
<?php include "details.php";?>

      <!--div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div-->
    </div>


  </div>
</div>
<hr>
<?php include "footer.php"; ?>
</body>
</html>
