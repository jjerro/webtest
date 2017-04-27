<!DOCTYPE html>
<html lang="id">
<head>
  <title>Aplikasi Database Koleksi Museum NTT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

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
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="contents.php">Koleksi</a></li>
        <li><a href="users.php">Pengguna</a></li>
        <li><a href="#">Katalog</a></li>
        <li><a href="#">Tentang</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <a href="index.php"><img src="img/logo-nav.png" height="60" width="300" style="padding-top: 7px; margin: auto;"> </a>

      <ul class="nav nav-pills nav-stacked" style="padding-top:7px;">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="contents.php">Koleksi</a></li>
        <li><a href="users.php">Pengguna</a></li>
        <li><a href="#">Katalog</a></li>
        <li><a href="#">Tentang</a></li>
      </ul><br>
    </div>
    <br>