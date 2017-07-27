<?php  include_once "header.php" ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

   			<section class="page">

					<h2>Arsivler</h2>

					<p class="lead">Blogla ilgili arsivler asagida bulunmaktadır.</p>

					<div class="row archive-list">

						<div class="twelve columns">

							<h4>Etiketler</h4>
            
				      	<ul>

				      		<li><a href="">Dolor irure velit commodo cillum sit nulla</a></li>
				      		<li><a href="">laborum mollit quis nostrud sed</a></li>
				      		<li><a href="">consequat occaecat fugiat in adipisicing</a></li>
				      		<li><a href="">qui labore cillum sit in tempor veniam consequat</a></li>
				      		<li><a href="">quis nostrud sed sed</a></li>
				      		<li><a href="">quis proident ullamco ut dolore</a></li>
				      		<li><a href="">Dolor irure velit commodo cillum sit nulla</a></li>
				      		<li><a href="">veniam dolor dolor irure velit commodo cillum</a></li>
				      		<li><a href="">Dolor irure velit commodo cillum sit nulla</a></li>
				      		<li><a href="">voluptate enim veniam consequat occaecat</a></li>
				      	</ul>

						</div>

						<div class="twelve columns">

							<h4>Aylara göre arsiv</h4>
					      	<ul>
					        		<li><a href="">Temmuz 2017</a></li>
					      		<li><a href="">Agustos 2017</a></li>
					      		<li><a href="">Eylül 2017</a></li>
					      		<li><a href="">Ekim 2017</a></li>
					      		<li><a href="">Kasım 2017</a></li>
					      		<li><a href="">Aralık 2017</a></li>
					      	</ul>

						</div>

					</div> <!-- end row -->

			      <div class="row archive-list">

						<div class="twelve columns">

							<h4>Kategori Arsivleri</h4>

              <?php
               $sorgu = $db->query("SELECT kategoriler.id , kategoriler.Kategori_Adi,COUNT(*) as sayi
                                    FROM kategoriler INNER JOIN main	ON
                                    kategoriler.id=main.kategori_id
                                    GROUP BY main.kategori_id ORDER BY sayi DESC" , PDO::FETCH_ASSOC);
               if($sorgu -> rowCount()){
                 foreach ($sorgu as $row) {
               ?>
                <li><a href="index.php?kategori=<?php echo $row['id'] ?>" title=""><?php echo $row['Kategori_Adi'] ?></a> (<?php echo $row['sayi'] ?>)</li>
                <?php
                  }
                }
                ?>

						</div>

						<div class="twelve columns">
              <br>
							<h4>Site Haritası</h4>

				      	<ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="archives.php">Archives</a></li>
                  <li><a href="page.php">Page</a></li>
				      	</ul>

						</div>

			      </div>

				</section> <!-- End page -->

   		</div> <!-- End main -->


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
