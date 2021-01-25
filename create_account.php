<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Create new account | Eci Manga</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

 <div align="center">
            <br>
            <div align="center" style="width:320px;margin-top:5%;">
                <form name="login_form" method="post" class="well well-lg"  onSubmit="validasi()" style="-webkit-box-shadow: 0px 0px 20px #888888;">
                    <h2>Eci<b> -Manga</b></h2>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" autofocus required>
                    </div>
                    <br>
 					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                    </div>
                    <br>
		            <button class="btn btn-warning btn-flat btn-block" name="proses" type="submit">Save</button>
                    <br>
                    <p><a href="login.php">Login</a></p>
		        </div>
		      </form>	  	
	  	</div>
	  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
session_start();
include("koneksi.php");
if(isset($_POST["proses"])){
    $nama = $_POST["nama"];
    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);
    $proses = mysql_query("insert into login value('','$nama','$user','$pass','1')");
    if($proses > 0){
        echo "<script>alert('Berhasil di simpan');</script>";
    }else{
        echo "<script>alert('Invailed Username and Password');</script>";
    }
}
?>
