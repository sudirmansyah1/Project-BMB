<?php 
session_start();

include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($conn,"select * from tb_users where username='$username' and password='$password'");
$check = mysqli_num_rows($data);

if($check > 0){
    $row=mysqli_fetch_array($data);
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['photo'] = $row['photo'];
    $_SESSION['group'] = $row['group'];
    $_SESSION['status'] = 'login';
	header("location:../index.php");
}else{
	header("location:../index.php");
}
?>