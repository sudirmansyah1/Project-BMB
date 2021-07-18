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
$kontrak = $_POST['kontrak'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('Y-m-d');
//------------------------------------------------------//
$t = time();

mysqli_query($conn, "UPDATE tb_courses SET kontrak_perkuliahan = '$kontrak' WHERE course_id = '$crsid' ");
header("location:../mycourses.php?crsid=$crsid");