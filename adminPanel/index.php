<?php include_once "header.php" ?>

<?php
ob_start();
if(!isset($_SESSION["adi"])){
    header("Location:../giris.php");
}
else {
?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class=" glyphicon glyphicon-user"></i>Kullanıcılar</a></li>
                    <li><a href="Ekleme.php"><i class=" glyphicon glyphicon-floppy-save"></i> İçerik Ekle</a></li>
                    <li><a href="Sil.php"><i class="glyphicon glyphicon-floppy-remove"></i> İçerik Sil</a></li>
                    <li ><a href="Guncelle.php"><i class="glyphicon glyphicon-refresh"></i>Güncelle</a></li>
                    <li ><a href="yorumlar.php"><i class="glyphicon glyphicon-comment"></i>Yorumlar</a></li>
                    <li><a href="../index.php"><i class="glyphicon glyphicon-log-out"></i> Anasayfaya Dön</a></li>

                </ul>
             </div>
		  </div>
      <div class="col-md-10">

        <div class="row">
          <div class="col-md-6">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title">Kullanıcılar</div>

              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>
            </div>
              <div class="panel-body">
                  <?php
                  if (isset($_GET['sil']) and isset($_GET['id'])) {
                    $sorgu = $db->exec("DELETE FROM kullanicilar WHERE kullanicilar.id=".$_GET['id']." " );
                  }
                  elseif (isset($_GET['adminyap']) and isset($_GET['id'])) {
                    $sorgu = $db->exec("UPDATE kullanicilar SET tipi=1  WHERE kullanicilar.id=".$_GET['id']." " );
                  }
                  elseif (isset($_GET['admincikar']) and isset($_GET['id'])) {
                    $sorgu = $db->exec("UPDATE kullanicilar SET tipi=0  WHERE kullanicilar.id=".$_GET['id']." " );
                  }

                   ?>

                <form action="" method="get">
                  <table class="table">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Kullanıcı Adı</th>
                            <th>Adı Soyadı</th>
                            <th>E-mail</th>
                            <th>Tipi</th>
                            <th>Seç</th>
                          </tr>
                        </thead>
                        <tbody>

                            <?php
                             $sorgu = $db->query("SELECT id,Kullanici_Adi,AdiSoyadi,email,tipi FROM kullanicilar ORDER BY id" , PDO::FETCH_ASSOC);
                             if($sorgu -> rowCount()){
                               foreach ($sorgu as $row) {
                             ?>
                          <tr class="success">

                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Kullanici_Adi'] ?></td>
                            <td><?php echo $row['AdiSoyadi'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['tipi'] ?></td>
                            <td><input type="checkbox" value="<?php echo $row['id'] ?>" name="id" /></td>

                          </tr>
                          <?php
                        } ?>
                        </tbody>
                      </table>
                      <div>
                        <button type="submit" name="sil" value="1" class="btn btn-primary" style="" >Sil</button>
                        <button type="submit" name="adminyap" value="1" class="btn btn-primary" style="" >Admin Yap</button>
                        <button type="submit" name="admincikar" value="1" class="btn btn-primary" style="" >Adminliği Al</button>
                    </div>

                  </form>
                    <?php
                }
                    ?>
              </div>
            </div>
          </div>

        </div>



      </div>
		  	</div>



		  </div>
      <?php } ?>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
