<?php
include("../koneksi.php");
$kode = $_GET["kode"];
$proses = mysql_query("delete from login where id_login='$kode'");
if ($proses) {
	header("location:user_control.php?Pesan=Berhasil di hapus");
}else{
	echo "<script>alert('Gagal terhapus');</script>";
}
?>