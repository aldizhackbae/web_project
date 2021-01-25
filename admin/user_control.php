<?php
include_once("header.php");
?>
        <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card my-4">
            <h5 class="card-header">User Control</h5>
            <div class="card-body">
            <a href="t_user.php"><button class="btn btn-info">Tambah</button></a>
            <div class="table-responsive">
            <br>
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Login</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                include("../koneksi.php");
                $sql = mysql_query("select * from login");
                $record = mysql_num_rows($sql);
                if (isset($_POST["search"])) {
                  $data = $_POST["cari"];
                  $sql = mysql_query("select * from login where nama like '%$data%'");
                }
                $i = 0;
                while ($r = mysql_fetch_array($sql)) {
                  $i++;
                ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['0'];?></td>
                    <td><?php echo $r['1'];?></td>
                    <td><?php echo $r['2'];?></td>
                    <td><?php echo $r['4'];?></td>
                    <td>
                      <a href="e_user.php?kode=<?php echo $r['0'];?>" title="Ubah">Edit</a> |
                      <a href="d_user.php?kode=<?php echo $r['0'];?>" onclick="return confirm('are you sure');" title="Hapus">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

<?php
include_once("footer.php");
?>