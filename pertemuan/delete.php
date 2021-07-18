<?php
session_start();
include '../settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:../index.php");
}
if($_SESSION['group'] != 'dosen'){
    header("location:../dashboard.php");
}
if(!isset($_GET['id'])){
    header("location:../pertemuan.php");
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_isipertemuan WHERE id = '$id'");
header("location:../mycourses.php");