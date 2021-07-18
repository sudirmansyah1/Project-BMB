<?php
session_start();
include '../settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:../index.php");
}
if(!isset($_POST['isipertemuanid'])){
    header("location:../pertemuan.php");
}
if($_SESSION['group'] != 'dosen'){
    header("location:../pertemuan.php");
}
$isipertemuanid = $_POST['isipertemuanid'];
$pertemuanid = $_POST['pertemuanid'];
$sqlp = "SELECT * FROM tb_isipertemuan WHERE id = '$isipertemuanid'";
$queryp = $conn->query($sqlp);
$datap = $queryp->fetch_assoc();
//------------------------------------------------------//
$courseid = $data['course_id'];
//------------------------------------------------------//
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$soaltest = $_POST['soal'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('Y-m-d');
//------------------------------------------------------//
$judul = $_POST['judul'];
$t = time();

if($soaltest == 'y'){
    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest' WHERE id = '$isipertemuanid'");
    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
}
elseif($soaltest == 'n'){
    if ($_FILES["file"]["error"] == 4){
        if($_FILES["gambar"]["error"] == 4){
            if($_FILES["video"]["error"] == 4){
                mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest' WHERE id = '$isipertemuanid'");
                header("location:../pertemuan.php?pertemuanid=$pertemuanid");
            } else{            
                $videoname = $_FILES['video']['name'];
                $videoukuran = $_FILES['video']['size'];
                $videoext = pathinfo($videoname, PATHINFO_EXTENSION);
                $videoname2 =  $videoname.'_'.$t.'.'.$videoext;
                if($videoukuran <= 41943040 ){
                    move_uploaded_file($_FILES['video']['tmp_name'], '../assets/videos/pertemuan/'.$videoname.'_'.$t.'.'.$videoext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', video = '$videoname2' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            }
        } else{
            if($_FILES["video"]["error"] == 4){
                $gambarname = $_FILES['gambar']['name'];
                $gambarukuran = $_FILES['gambar']['size'];
                $gambarext = pathinfo($gambarname, PATHINFO_EXTENSION);
                $gambarname2 =  $gambarname.'_'.$t.'.'.$gambarext;
                if($gambarukuran <= 41943040 ){
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/img/pertemuan/'.$gambarname.'_'.$t.'.'.$gambarext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', gambar = '$gambarname2' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            } else{            
                $videoname = $_FILES['video']['name'];
                $videoukuran = $_FILES['video']['size'];
                $videoext = pathinfo($videoname, PATHINFO_EXTENSION);
                $videoname2 =  $videoname.'_'.$t.'.'.$videoext;
                $gambarname = $_FILES['gambar']['name'];
                $gambarukuran = $_FILES['gambar']['size'];
                $gambarext = pathinfo($gambarname, PATHINFO_EXTENSION);
                $gambarname2 =  $gambarname.'_'.$t.'.'.$gambarext;
                if($gambarukuran <= 41943040 and  $videoukuran <= 41943040){
                    move_uploaded_file($_FILES['video']['tmp_name'], '../assets/videos/pertemuan/'.$videoname.'_'.$t.'.'.$videoext);
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/img/pertemuan/'.$gambarname.'_'.$t.'.'.$gambarext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', gambar = '$gambarname2', video = '$videoname2' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            }
        }
    }else{
        if($_FILES["gambar"]["error"] == 4){
            if($_FILES["video"]["error"] == 4){
                $filename = $_FILES['file']['name'];
                $fileukuran = $_FILES['file']['size'];
                $fileext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename2 =  $filename.'_'.$t.'.'.$fileext;
                if($fileukuran <= 41943040){
                    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/files/pertemuan/'.$filename.'_'.$t.'.'.$fileext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', `file` = '$filename2', judul_file = '$filename' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            } else{            
                $videoname = $_FILES['video']['name'];
                $videoukuran = $_FILES['video']['size'];
                $videoext = pathinfo($videoname, PATHINFO_EXTENSION);
                $videoname2 =  $videoname.'_'.$t.'.'.$videoext;
                $filename = $_FILES['file']['name'];
                $fileukuran = $_FILES['file']['size'];
                $fileext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename2 =  $filename.'_'.$t.'.'.$fileext;
                if($fileukuran <= 41943040 and  $videoukuran <= 41943040){
                    move_uploaded_file($_FILES['video']['tmp_name'], '../assets/videos/pertemuan/'.$videoname.'_'.$t.'.'.$videoext);
                    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/files/pertemuan/'.$filename.'_'.$t.'.'.$fileext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', `file` = '$filename2', judul_file = '$filename', video = '$videoname2' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            }
        } else{
            if($_FILES["video"]["error"] == 4){
                $gambarname = $_FILES['gambar']['name'];
                $gambarukuran = $_FILES['gambar']['size'];
                $gambarext = pathinfo($gambarname, PATHINFO_EXTENSION);
                $gambarname2 =  $gambarname.'_'.$t.'.'.$gambarext;
                $filename = $_FILES['file']['name'];
                $fileukuran = $_FILES['file']['size'];
                $fileext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename2 =  $filename.'_'.$t.'.'.$fileext;
                if($fileukuran <= 41943040 and  $gambarukuran <= 41943040){
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/img/pertemuan/'.$gambarname.'_'.$t.'.'.$gambarext);
                    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/files/pertemuan/'.$filename.'_'.$t.'.'.$fileext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', `file` = '$filename2', judul_file = '$filename', gambar = '$gambarname2' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            } else{            
                $videoname = $_FILES['video']['name'];
                $videoukuran = $_FILES['video']['size'];
                $videoext = pathinfo($videoname, PATHINFO_EXTENSION);
                $videoname2 =  $videoname.'_'.$t.'.'.$videoext;
                $gambarname = $_FILES['gambar']['name'];
                $gambarukuran = $_FILES['gambar']['size'];
                $gambarext = pathinfo($gambarname, PATHINFO_EXTENSION);
                $gambarname2 =  $gambarname.'_'.$t.'.'.$gambarext;
                $filename = $_FILES['file']['name'];
                $fileukuran = $_FILES['file']['size'];
                $fileext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename2 =  $filename.'_'.$t.'.'.$fileext;
                if($fileukuran <= 41943040 and  $gambarukuran <= 41943040 and $videoukuran <= 41943040){
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/img/pertemuan/'.$gambarname.'_'.$t.'.'.$gambarext);
                    move_uploaded_file($_FILES['video']['tmp_name'], '../assets/videos/pertemuan/'.$videoname.'_'.$t.'.'.$videoext);
                    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/files/pertemuan/'.$filename.'_'.$t.'.'.$fileext);
                    mysqli_query($conn, "UPDATE tb_isipertemuan SET judul = '$judul', isi = '$isi', isQuestion = '$soaltest', `file` = '$filename2', judul_file = '$filename', gambar = '$gambarname2', video = '$videoname2' WHERE id = '$isipertemuanid'");
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }else{
                    header("location:../pertemuan.php?pertemuanid=$pertemuanid");
                }
            }
        }

    }
}