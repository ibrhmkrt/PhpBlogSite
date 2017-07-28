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
    foreach ($sorgu as $row) {
      header("Location:index.php");
 }
 }
 else{
   if(empty($kadi) or empty($sifre)) {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Dön</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Dön</a></center>";
    }

 }

 $sorgu=$db ->query("SELECT * FROM kullanicilar WHERE Kullanici_Adi='$kadi' and Sifre='$sifre'" , PDO::FETCH_ASSOC) -> fetch();
 $_SESSION["adi"] = $sorgu['AdiSoyadi'];
 $_SESSION["id"] = $sorgu['id'];
 $_SESSION["tip"] = $sorgu['tipi'];
 ob_end_flush();
?>
