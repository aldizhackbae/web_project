<?php
include_once("header.php");
?>
        <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card my-4">
            <h5 class="card-header">Tambah Komik</h5>
            <div class="card-body">
              <div class="input-group">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control" name="judul" placeholder="Judul" required autofocus>
                  </div>
                  <div class="form-group">
                    <select name="genre" class="form-control" required>
                      <option>- Pilih Genre -</option>
                      <option value="Humor">Humor</option>
                      <option value="Romance">Romance</option>
                      <option value="Action">Action</option>
                    </select>
                  </div>
                  <div class="form-group">
                    Gambar Cover (Format : png, jpg)
                    <input type="file" class="form-control" name="cover" required>
                  </div>
                  <div class="form-group">
                    File Komik (Format : pdf)
                    <input type="file" class="form-control" name="file" required>
                  </div>
                  <div>
                    <button type="submit" name="upload" class="btn btn-info">Save</button>
                    <a href="upload_komik.php">back</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->
<?php
if(isset($_POST['upload'])){
  $allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'png', 'jpg');
  $file_cover    = $_FILES['cover']['name'];
  $file_name    = $_FILES['file']['name'];
  $file_ext   = strtolower(end(explode('.', $file_name)));
  $file_size    = $_FILES['file']['size'];
  $file_tmp_cover   = $_FILES['cover']['tmp_name'];
  $file_tmp   = $_FILES['file']['tmp_name'];

  $judul      = $_POST['judul'];
  $genre      = $_POST['genre'];
  $sql = "INSERT INTO upload_komik (judul,genre) VALUES ('$judul','$genre')";
  mysql_query($sql); 

  $query = mysql_query("SELECT id_komik FROM upload_komik ORDER BY id_komik DESC LIMIT 1");
  $data  = mysql_fetch_array($query);

  $nama_baru = "file_".$data['id_komik'].".pdf"; //hasil contoh: file_1.pdf
  $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
  $folder    = "file";

  if(in_array($file_ext, $allowed_ext) === true){
    if($file_size <= 5044070){
      move_uploaded_file($file_tmp_cover, "$folder/$file_cover");
      move_uploaded_file($file_tmp, "$folder/$nama_baru");
      $in = mysql_query("UPDATE upload_komik SET cover='$file_cover', komik='$nama_baru', ukuran ='$file_size' WHERE id_komik='$data[id_komik]'");
      if($in){
        echo "<script>alert('SUCCESS: File berhasil di Upload!');</script>";
      }else{
        echo "<script>alert('ERROR: Gagal upload file!');</script>";
      }
    }else{
      echo "<script>alert('ERROR: Besar ukuran file (file size) maksimal 50 Mb!');</script>";
    }
  }else{
    echo "<script>alert('ERROR: Ekstensi file tidak di izinkan!');</script>";
  }
}
?>

<?php
include_once("footer.php");
?>