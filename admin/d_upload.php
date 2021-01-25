 <?php
include("../koneksi.php");
$kode = $_GET["kode"];
$proses = mysql_query("delete from upload_komik where id_komik='$kode'");
if ($proses) {
	header("location:upload_komik.php?Pesan=Berhasil di hapus");
}else{
	echo "<script>alert('Gagal terhapus');</script>";
}
?>