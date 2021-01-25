<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Login | Kawai Manga</title>

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
                <form action="" name="login_form" method="post" class="well well-lg"  onSubmit="validasi()" style="-webkit-box-shadow: 0px 0px 20px #888888;">
                    <h2>K-<b> Manga</b></h2>
                    <br>

 					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Username" autofocus required>
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                    </div>
                    <br>
		            <button class="btn btn-warning btn-flat btn-block" name="login" type="submit"><i class="fa fa-lock"></i>  LOGIN</button>
                    <br>
                    <p><a href="create_account.php">Create new account</a></p>
		        </div>
		      </form>	  	
	  	</div>
	  </div>

	<script type="text/javascript">
    	function validasi() {
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;       
        if (user != "" && pass!="") {
            return true;
        }else{
            alert('Username dan Password harus di isi !');
            return false;
        }
    }
    </script>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>



<?php
session_start();
include("koneksi.php");
if(isset($_POST["login"])){
    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);
    $proses = mysql_query("select * from login where username='$user' and password='$pass'");
    $login = mysql_num_rows($proses);
    $data = mysql_fetch_array($proses);
    $nama = $data['nama'];
    $status = $data['status'];
    if($login > 0){
        $_SESSION['nama'] = $nama;
        $_SESSION["username"] = $user;
        $_SESSION['status'] = $status;
        header("location:admin/index.php");
    }else{
        echo "<script>alert('Invailed Username and Password');</script>";
    }
}
?>

