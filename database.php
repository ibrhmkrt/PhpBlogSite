<?php
$dbhost="localhost";
$dbname="proje";
$user="root";
$pass="";

try {
  $db= new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$user,$pass);
} catch (PDOException $e) {
  print $e -> getMessage();
}
?>
