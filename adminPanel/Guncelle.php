<?php include_once "header.php" ?>
<?php
ob_start();
if(!isset($_SESSION["adi"])){
    header("Location:../giris.php");
}
else {
?>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['guncelle']))
      $sorgu = $db->exec("UPDATE main SET yazi_baslik='".$_POST['baslik']."' ,yazi_icerigi='".$_POST['icerik']."' WHERE id=".$_POST['id']."");
  }
?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class=" glyphicon glyphicon-user"></i>Kullanıcılar</a></li>
                    <li ><a href="Ekleme.php"><i class=" glyphicon glyphicon-floppy-save"></i> İçerik Ekle</a></li>
                    <li><a href="Sil.php"><i class="glyphicon glyphicon-floppy-remove"></i> İçerik Sil</a></li>
                    <li class="current"><a href="Guncelle.php"><i class="glyphicon glyphicon-refresh"></i>Güncelle</a></li>
                    <li ><a href="yorumlar.php"><i class="glyphicon glyphicon-comment"></i>Yorumlar</a></li>
                    <li><a href="../index.php"><i class="glyphicon glyphicon-log-out"></i> Anasayfaya Dön</a></li>

                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

		  	<div class="row">
          <div class="col-md-12">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title">Yorumlar</div>

              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>
            </div>
              <div class="panel-body">

                <form action="" method="get">
                  <table class="table">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Yazı Başlık</th>
                            <th>Yazar</th>
                            <th>Yazı Tarihi</th>
                            <th>Yazı Kategori</th>
                            <th>Yazı İçeriği</th>

                          </tr>
                        </thead>
                        <tbody>

                            <?php
                             $sorgu = $db->query("SELECT id,yazi_baslik,yazar,yazi_tarih,yazi_kategori,yazi_icerigi FROM main" , PDO::FETCH_ASSOC);
                             if($sorgu -> rowCount()){
                               foreach ($sorgu as $row) {
                             ?>
                          <tr class="success">

                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['yazi_baslik'] ?></td>
                            <td><?php echo $row['yazar'] ?></td>
                            <td><?php echo $row['yazi_tarih'] ?></td>
                            <td><?php echo $row['yazi_kategori'] ?></td>
                            <td><?php echo htmlspecialchars(substr($row['yazi_icerigi'], 0, 28)) ?></td>
                            <td><button type="submit" name="duzenle"  class="btn btn-primary" value="<?php echo $row['id'] ?>" >Düzenle</button></td>


                          </tr>
                          <?php
                        } ?>
                        </tbody>
                      </table>

                  </form>
                    <?php
                }
                    ?>
              </div>
            </div>
          </div>
          <?php if (isset($_GET['duzenle'])) {
            $sorgu = $db->query("SELECT id,yazi_baslik,yazar,yazi_tarih,yazi_kategori,yazi_icerigi FROM main WHERE id=".$_GET['duzenle'] , PDO::FETCH_ASSOC) -> fetch();
          ?>
          <div class="col-md-12">
            <div class="content-box-large">
              <div class="panel-heading">
                    <div class="panel-title">İçerik Guncelle</div>

                    <div class="panel-options">
                      <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                      <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
              <div class="panel-body">
                <form  method="post" action="#">
                <input type="hidden" name="id" value="<?php echo $sorgu['id'] ?>">
                <fieldset>
                  <div class="form-group">
                    <label>Yazı Başlığınız</label>
                    <input class="form-control"  type="text" name="baslik" value="<?php echo $sorgu['yazi_baslik'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Yazı İçeriği</label>
                    <textarea id="ckeditor_full"  rows="3" name="icerik"><?php echo $sorgu['yazi_icerigi'] ?></textarea>
                  </div>
                </fieldset>
                  <div>
                    <button type="submit" class="btn btn-primary" name="guncelle" value="1" style="" >Güncelle</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <?php } ?>
  			</div>



		  </div>
		</div>
    </div>
    <?php } ?>


          <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="vendors/datatables/dataTables.bootstrap.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/tables.js"></script>
        <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
       <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
       <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
       <script src="vendors/ckeditor/ckeditor.js"></script>
       <script src="vendors/ckeditor/adapters/jquery.js"></script>
       <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
       <script src="js/editors.js"></script>


  </body>
</html>
