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
$crsid = $_POST['crsid'];
$pertemuan = $_POST['pertemuan'];
$waktu = $_POST['waktu'];
$judul = $_POST['judul'];
$pertemuanke = $_POST['pertemuanke'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('Y-m-d');
//------------------------------------------------------//
$t = time();

mysqli_query($conn, "UPDATE tb_pertemuan SET waktu = '$waktu', judul_pertemuan = '$judul', pertemuanke = '$pertemuanke' WHERE course_id = '$crsid' AND pertemuan_id = '$pertemuan'");
header("location:../pertemuan.php?pertemuanid=$pertemuan");