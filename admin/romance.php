<?php
include_once("header.php");
?>
        <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card my-4">
              <h5 class="card-header">Romance</h5>
            </div>
          </div>
        </div>

        <div class="row">
          <?php
          include("../koneksi.php");
          include("config.php");
          $data = "romance";
          $sql = mysql_query("select * from upload_komik where genre='$data' order by id_komik desc");
          $record = mysql_num_rows($sql);
          while ($r = mysql_fetch_array($sql)) {
          ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="file/<?=$r['3']?>" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <?=$r['1']?>
                </h4>
                  Genre &nbsp;&nbsp;: <?=$r['2']?><br>
                  Ukuran : <?=formatBytes($r['5'])?>
              </div>
              <div class="card-footer">
                <a href="file/<?=$r['4']?>">view</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

<?php
include_once("footer.php");
?>