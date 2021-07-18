<?php
session_start();
include '../settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:../index.php");
}
if($_SESSION['group'] != 'dosen'){
    header("location:../dashboard.php");
}
//------------------------------------------------------//
$dosenid = $_SESSION['id'];
//------------------------------------------------------//
$judul = $_POST['judul'];
$tentang = $_POST['tentang'];
$jadwal = $_POST['jadwal'];
$ruang = $_POST['ruang'];
$kontrak = $_POST['kontrak'];
$pengumuman = $_POST['pengumuman'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('Y-m-d');
//------------------------------------------------------//
$t = time();

mysqli_query($conn, "INSERT INTO tb_courses VALUES(NULL,'$dosenid','$judul','$tentang','$jadwal','$ruang','$kontrak','$pengumuman')");
header("location:../dashboard.php");