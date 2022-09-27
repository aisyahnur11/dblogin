<?php

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$db = new PDO('mysql:host=localhost;dbname=sekolah','root','');
$query = $db->query("INSERT INTO `siswa` VALUES ('$nis','$nama','$kelas')");

 if($query){
    header('location:crud.php');
 }