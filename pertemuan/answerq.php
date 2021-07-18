<?php
session_start();
include '../settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:../index.php");
}
if(!isset($_POST['soal'])){
    header("location:../index.php");
}
if($_SESSION['group'] != 'dosen'){
    header("location:../dashboard.php");
}


//------------------------------------------------------//
$dosenid = $_POST['dosenid'];
$soalid = $_POST['soal'];
$pertemuanid = $_POST['pertemuan'];
$courseid = $_POST['crsid'];
$pertemuanid = $_POST['pertemuan'];
$jawaban = $_POST['answer'];
$uid = $_SESSION['id'];
//------------------------------------------------------//

//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d F Y H:i:s');
//------------------------------------------------------//

mysqli_query($conn, "INSERT INTO tb_jawaban VALUES(NULL,'$uid','$courseid','$pertemuanid','$soalid','$dosenid','$jawaban','$tanggal')");
header("location:../pertemuan.php?pertemuanid=$pertemuanid");