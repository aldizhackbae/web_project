<?php
include_once("header.php");
?>
        <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card my-4">
            <h5 class="card-header">Tambah User</h5>
            <div class="card-body">
              <div class="input-group">
                <form action="" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama" required autofocus>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="user" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <select name="status" class="form-control">
                      <option value="user">User</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div>
                  <div>
                    <button type="submit" name="save" class="btn btn-info">Save</button>
                    <a href="user_control.php">back</a>
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
if(isset($_POST["save"])){
    $nama = $_POST["nama"];
    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);
    $status = $_POST['status'];
    $proses = mysql_query("insert into login value('','$nama','$user','$pass','$status')");
    if($proses > 0){
        echo "<script>alert('Berhasil di simpan');</script>";
    }else{
        echo "<script>alert('Gagal di simpan');</script>";
    }
}
?>

<?php
include_once("footer.php");
?>