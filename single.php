
    <?php include_once "header.php" ?>
    <?php
    if (isset($_POST)) {
      if(!empty($_POST['gonderi']) AND !empty($_POST['cMessage'])){
        $ekle =$db -> prepare("INSERT INTO yorumlar(yapilan_yorum,kullanici_id,icerik_id) VALUES(?,?,?)");
        $ekle->execute(array($_POST['cMessage'],$_SESSION["id"],$_POST['gonderi']));
      }
    }
    ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

   			<article class="entry">
          <?php
          if (isset($_GET['gonderi'])) {
            $sorgu = $db->query("SELECT * FROM main WHERE main.id=".$_GET['gonderi']."  ORDER BY yazi_tarih DESC " , PDO::FETCH_ASSOC);
          }
          else {
            header ("Location:blog.php");

          }
          if($sorgu -> rowCount()){
            foreach ($sorgu as $row) {
          ?>

					<header class="entry-header">

						<h2 class="entry-title">
							<?php echo $row['yazi_baslik'] ?>
						</h2>

						<div class="entry-meta">
							<ul>
								<li><?php echo $row['yazi_tarih'] ?></li>
								<span class="meta-sep">&bull;</span>
								<li>
									<a href="#" title="" rel="category tag"><?php echo $row['yazi_kategori'] ?></a>
								</li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['yazar'] ?></li>
							</ul>
						</div>

					</header>



					<div class="entry-content">



						<p class="lead"><?php echo $row['yazi_icerigi'] ?></p>


					</div>

				<?php
        }
        }

        ?>

				</article>

				<!-- Comments
            ================================================== -->
            <div id="comments">
              <?php
              $sorgu=$db -> query ("SELECT count(yorumlar.id) as adet
                                    FROM yorumlar INNER JOIN main ON main.id=yorumlar.icerik_id
                                      WHERE main.id=".$_GET['gonderi']." AND  yorumlar.yayinla=1 ", PDO::FETCH_ASSOC) -> fetch();
              if ($sorgu['adet'] > 0) {
                  echo "<h4>".$sorgu['adet']." Yorum</h4>";
                  $sorgu=$db -> query ("SELECT yorumlar.yapilan_yorum AS yorum, yorumlar.yorum_tarihi AS tarih , kullanicilar.AdiSoyadi AS yazar
                                        FROM yorumlar INNER JOIN main ON main.id=yorumlar.icerik_id INNER JOIN kullanicilar ON yorumlar.kullanici_id=kullanicilar.id
                                        WHERE main.id=".$_GET['gonderi']." AND yorumlar.yayinla=1 ORDER BY yorumlar.yorum_tarihi " , PDO::FETCH_ASSOC) -> fetchAll();
                  foreach ($sorgu as $row) {


               ?>

               <!-- commentlist -->
               <ol class="commentlist">

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite><?php print $row['yazar']; ?></cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime=""><?php print $row['tarih']; ?></time>

	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p><?php print $row['yorum']; ?></p>
	                     </div>

	                  </div>

                  </li>




               </ol> <!-- Commentlist End -->
               <?php }

                } ?>

               <!-- respond -->
               <?php if (isset($_SESSION["adi"])) { ?>
               <div class="respond">

                  <h3>Yorum Yap</h3>

                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="">
                    <input type="hidden" name="gonderi" value="<?php print $_GET['gonderi']; ?>" />
  					   <fieldset>

                     <div class="message group">
                        <label  for="cMessage">Message <span class="required">*</span></label>
                        <textarea name="cMessage"  id="cMessage" rows="10" cols="50" ></textarea>
                     </div>

                     <button type="submit" class="submit">Gönder</button>

  					   </fieldset>
  				      </form> <!-- Form End -->

               </div> <!-- Respond End -->
               <?php } ?>
            </div>  <!-- Comments End -->


   		</div> <!-- main End -->

   		<?php include_once "sidebar.php" ?>

  		</div> <!-- end row -->

   </div> <!-- end content-wrap -->

   <!-- Footer
   ================================================== -->
   <?php include_once "footer.php" ?>

	<!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
