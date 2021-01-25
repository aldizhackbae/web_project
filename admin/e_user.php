<?php
include_once("header.php");
$kode = $_GET["kode"];
$sql = mysql_query("select * from login where id_login='$kode'");
$r = mysql_fetch_array($sql);
?>
        <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card my-4">
            <h5 class="card-header">Edit User</h5>
            <div class="card-body">
              <div class="input-group">
                <form action="" method="post">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?=$r['0'];?>" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama" value="<?=$r['1'];?>" placeholder="Nama" required autofocus>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="user" value="<?=$r['2'];?>" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="pass" value="<?=$r['3'];?>" placeholder="Password" required>
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
      if (isset($_POST["save"])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $user = $_POST["user"];
        $pass = md5($_POST["pass"]);
        $status = $_POST['status'];
        $proses = mysql_query("update login set nama='$nama',username='$user',password='$pass',status='$status' where id_login='$id'");
        if($proses > 0){
            echo "<script>alert('Berhasil di Edit');</script>";
        }else{
            echo "<script>alert('Gagal id Edit');</script>";
        }
      }
      ?>

<?php
include_once("footer.php");
?>