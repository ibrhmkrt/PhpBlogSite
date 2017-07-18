<?php include_once "database.php" ?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head>


   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>İbrahim KURT</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">
       <?php
        $sorgu = $db->query("SELECT * FROM header_yazi " , PDO::FETCH_ASSOC);
        if($sorgu -> rowCount()){
          foreach ($sorgu as $row) {
        ?>
		      <h1 id="logo-text"><a href="index.php" title=""><?php echo $row['Baslik'] ?></a></h1>
				<p id="intro"><?php echo $row ['Slogan'] ?></p>
        <?php
          }
        }
        ?>


			</div>

	   </div>

	   <nav id="nav-wrap">

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">
        <?php
         $sorgu = $db->query("SELECT * FROM menuler " , PDO::FETCH_ASSOC);
         if($sorgu -> rowCount()){
           foreach ($sorgu as $row) {
         ?>
			   	<ul id="nav" class="nav">
			      	<li class="current"><a href="index.php"><?php echo $row['Menu1'] ?></a></li>
	               <li><a href="demo.php"><?php echo $row['Menu2'] ?></a></li>
	               <li><a href="archives.php"><?php echo $row['Menu3'] ?></a></li>
			      	<li class="has-children"><a href="single.php"><?php echo $row['Menu4'] ?></a>
							<ul>
	                     <li><a href="blog.php">Blog Entries</a></li>
	                     <li><a href="single.php">Single Blog</a></li>
	                  </ul>
			      	</li>
			      	<li><a href="page.php"><?php echo $row['Menu5'] ?></a></li>
			   	</ul> <!-- end #nav -->
          <?php
            }
          }
          ?>
	   	</div>

	   </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->
