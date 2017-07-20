
<?php
include("database.php");
ob_start();
session_start();
if(!isset($_SESSION["login"])){
  header("Location:giris.php");
}
else {

?>
<!-- header -->
  <?php include_once "header.php" ?>


   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">
        <!-- main-->
        <?php include_once "main.php" ?>

        <!-- sidebar-->
   		 <?php include_once "sidebar.php" ?>

   <!-- Footer -->
   <?php include_once "footer.php" ?>

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/main.js"></script>
<?php } ?>
</body>

</html>
