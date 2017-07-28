<?php include_once "header.php" ?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="current"><a href="tables.php"><i class="glyphicon glyphicon-list"></i> İçerik Ekle</a></li>
                    <li><a href="buttons.php"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.php"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.php"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li><a href="../index.php"><i class="glyphicon glyphicon-log-out"></i> Anasayfaya Dön</a></li>

                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

		  	<div class="row">
          <div class="col-md-6">
            <div class="content-box-large">
              <div class="panel-heading">
                    <div class="panel-title">İçerik Ekleme</div>

                    <div class="panel-options">
                      <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                      <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
              <div class="panel-body">
                <form  method="post" action="ekle.php">
                <fieldset>
                  <div class="form-group">
                    <label>Yazı Başlığınız</label>
                    <input class="form-control" placeholder="Text field" type="text" name="baslik" >
                  </div>

                  <div class="form-group">
                    <label>Yazı İçeriği</label>
                    <textarea class="form-control" placeholder="Textarea" rows="3" name="icerik"></textarea>
                  </div>
                  <div class="form-group">
                    <label >Yazı Kategori</label>
                    <div >

                      <select class="form-control" id="select-1" name="kategori" >
                        <option value="PHP" >PHP</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS" >CSS</option>
                        <option value="JAVA Script" >JAVA Script</option>

                      </select>

                    </div>
                  </div>

                </fieldset>

                  <div>

                    <button type="submit" class="btn btn-primary" style="" >Ekle</button>
                </div>
              </form>
              </div>
            </div>
          </div>

  			</div>



		  </div>
		</div>
    </div>



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
  </body>
</html>
