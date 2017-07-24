<?php
include("database.php");
ob_start();
session_start();
$AdiSoyadi = $_POST['name'];
$email = $_POST['email'];
$Kullanici_Adi = $_POST['username'];
$Sifre = $_POST['password'];


function kayitekle($AdiSoyadi,$email,$Kullanici_Adi,$Sifre)
{
global $db;
$ekle =$db -> prepare("INSERT INTO kullanicilar(AdiSoyadi,email,Kullanici_Adi,Sifre) VALUES(?,?,?,?)");
$ekle->execute(array($AdiSoyadi,$email,$Kullanici_Adi,$Sifre));
echo "Kayıt eklendi";
sleep(2);
header("Location:kayitol.php");
}
kayitekle($AdiSoyadi,$email,$Kullanici_Adi,$Sifre);

ob_end_flush();

?>
