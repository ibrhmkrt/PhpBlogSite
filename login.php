<?php
include("database.php");
ob_start();
session_start();
$kadi = $_POST['username'];
$sifre = $_POST['password'];
$sorgu=$db ->query("SELECT * FROM kullanicilar WHERE Kullanici_Adi='$kadi' and Sifre='$sifre'" , PDO::FETCH_ASSOC);
  if($sorgu -> rowCount()){
   $_SESSION["login"] = true;
   $_SESSION["user"] = $kadi;
   $_SESSION["pass"] = $sifre;
   header("Location:index.php");
 }
 else{
   if(empty($kadi) or empty($sifre)) {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Dön</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Dön</a></center>";
    }

 }
 ob_end_flush();
?>
