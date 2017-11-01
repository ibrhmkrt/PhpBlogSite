<?php include_once "database.php" ?>
<?php session_start(); ?>

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


          <p id='intro'><?php echo  $row['Slogan'] ?></p>;

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
         ?>
			   	<ul id="nav" class="nav">
            <?php  foreach ($sorgu as $row) { ?>
			      	<li <?php if("http://localhost".$_SERVER['PHP_SELF'] == $row['menuAdres']) print "class='current'"; ?>><a href="<?php echo $row['menuAdres'] ?>"><?php echo $row['menuAdi'] ?></a></li>
            <?php } ?>
              <?php
              if(isset($_SESSION["adi"]))
                  echo "<li><a style='font-size:11px; position:absolute ; left: 430px; width: 300px; text-align: right;'> $_SESSION[adi]</a></li>";
              ?>
              <?php
              if(isset($_SESSION["adi"]) and $_SESSION["tip"]==1 ) {
                  echo "<li><a href='adminPanel/index.php' style='font-size:10px; color:#3CB371; position:absolute ; left: 300px; width: 300px; text-align: right;'>Admin Paneline Git</a></li>";
                }
              ?>


              <?php if (isset($_SESSION["login"]))
                        echo "<li><a href='logout.php' class='fa fa-sign-out' aria-hidden='true' style='font-size:30px; position:absolute ; left:720px;'></a></li>";
                    else
                        echo "<li><a href='giris.php' class='fa fa-sign-in' aria-hidden='true' style='font-size:30px; position:absolute ; left:720px;'></a></li>";
              ?>
          </ul> <!-- end #nav -->
          <?php
          }
          ?>
	   	</div>

	   </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->
