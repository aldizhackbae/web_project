<?php
session_start();
if(isset($_SESSION['username'])){
  include("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kawai Manga</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Eci Manga</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manga_list.php">Manga List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" onclick="return confirm('are you sure');">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Genre</h1>
        <div class="list-group">
          <a href="humor.php" class="list-group-item">Humor</a>
          <a href="romance.php" class="list-group-item">Romance</a>
          <a href="action.php" class="list-group-item">Action</a>
        </div>

        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <form action="manga_list.php" method="POST">
              <div class="input-group">
                <input type="text" class="form-control" name="cari" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="botton" name="search">Go!</button>
                </span>
              </div>
            </form>
          </div>
        </div>
<?php
if($_SESSION['status'] == "admin"){
?>
        <div class="card my-4">
          <h5 class="card-header">Control</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="upload_komik.php">Upload Komik</a>
                  </li>
                  <li>
                    <a href="user_control.php">User Control</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<?php } ?>
      </div>
      <!-- /.col-lg-3 -->
       <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="header.png " style="margin-left: 90px;" width="600px;" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="header.png " style="margin-left: 90px;" width="600px;" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="header.png " style="margin-left: 90px;" width="600px;" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

<?php
}else{
  header("location:../login.php");
}
?>