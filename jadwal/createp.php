<?php
session_start();
include '../settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:../index.php");
}
if(!isset($_POST['crsid'])){
    header("location:../mycourses.php");
}
if($_SESSION['group'] != 'dosen'){
    header("location:../dashboard.php");
}
//------------------------------------------------------//
$dosenid = $_SESSION['id'];
//------------------------------------------------------//
$crsid = $_POST['crsid'];
$waktu = $_POST['waktu'];
$judul = $_POST['judul'];
$pertemuan = $_POST['pertemuan'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('Y-m-d');
//------------------------------------------------------//
$t = time();

mysqli_query($conn, "INSERT INTO tb_pertemuan VALUES(NULL,'$crsid','$dosenid','$waktu','$judul','$tanggal','$pertemuan')");
header("location:../mycourses.php?crsid=$crsid");