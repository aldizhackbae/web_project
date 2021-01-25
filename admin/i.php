<?php
session_start();
if(isset($_SESSION['username'])){
	include("../koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Eci Manga</title>
</head>
<body>

Hello <?php echo $_SESSION['nama']; ?> <a href="logout.php">Log Out</a>

<?php
if($_SESSION['status'] == "admin"){
?>
<button>Simpan</button>
<?php
}
?>

</body>
</html>

<?php
}
?>