<?php
include "../database.php";
ob_start();
session_start();
$Baslik = $_POST['baslik'];
$icerik = $_POST['icerik'];
$kategori = $_POST['kategori'];
$yazar=$_SESSION['adi'];

$kategori_id=$db->query("SELECT id FROM kategoriler WHERE Kategori_Adi='$kategori' ")->fetch()['id'];

function kayitekle($Baslik,$icerik,$kategori,$yazar,$kategori_id)
{
global $db;
$ekle =$db -> prepare("INSERT INTO main(yazi_baslik,yazi_icerigi,yazi_kategori,yazar,kategori_id) VALUES(?,?,?,?,?)");
$ekle->execute(array($Baslik,$icerik,$kategori,$yazar,$kategori_id));

echo 'Yazınız Başarıyla Paylaşılmıştır';
header('Refresh: 1; URL = Ekleme.php');

}
kayitekle($Baslik,$icerik,$kategori,$yazar,$kategori_id);

ob_end_flush();

?>
