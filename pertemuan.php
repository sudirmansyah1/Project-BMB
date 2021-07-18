<?php 
session_start();
include 'settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
if(!isset($_GET['pertemuanid'])){
    header("location:mycourses.php");
}
$pertemuanid = $_GET['pertemuanid'];
$sqlp = "SELECT * FROM tb_pertemuan WHERE pertemuan_id = '$pertemuanid'";
$queryp = $conn->query($sqlp);
$datap = $queryp->fetch_assoc();
$sql = "SELECT tb_courses.* FROM tb_courses INNER JOIN tb_pertemuan ON tb_courses.course_id = tb_pertemuan.course_id WHERE tb_pertemuan.pertemuan_id = '$pertemuanid'";
$query = $conn->query($sql);
$data = $query->fetch_assoc();
$dosenid = $data['dosen_id'];
$sql2 = "SELECT * FROM tb_users WHERE id = '$dosenid'";
$query2 = $conn->query($sql2);
$data2 = $query2->fetch_assoc();
?>

<html>
<head>
<title>Berkah Mandiri Belajar</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="assets/css/select2.css" />
<!-- Slict CSS -->
<link rel='stylesheet' href='assets/vendor/slick/slick-theme.css'>
<link rel='stylesheet' href='assets/vendor/slick/slick.css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/custom.css">
<!-- Data Tables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">


<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.min.css">
<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick JavaScript -->
<script src='assets/vendor/slick/slick.min.js'></script>
</head>
<body>
    <!-- HEADER SECTION -->
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container"><a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" height="60px" alt=""></a>
                <p class="nav-info"><span><i class="fa fa-calendar" style="color:28C2E4;"></i> Monday - Friday : 10:00 - 17:00</span><span style="margin-left:12px; margin-right:12px;">|</span><span><i class="fa fa-envelope-o" style="color:28C2E4;"></i> helpdek@mandiribelajar.co.id</span><span><i class="fa fa-facebook-square" style="color:28C2E4; margin-left:12px;"></i> <i class="fa fa-twitter-square" style="color:28C2E4; margin-left:7px;"></i> <i class="fa fa-google-plus-square" style="color:28C2E4;  margin-left:7px;"></i></span></p>
                <?php
                if(!isset($_SESSION['username'])){?>
                    <a href="#" class="btn btn-nav-log" data-toggle="modal" data-target="#myModal">LOGIN</a>
                <?php } else {?>
                    <span class="nav-info" ><img src="assets/img/user_avatar/<?php echo $_SESSION['photo'];?>" width="36px" height="36px" class="rounded-circle"> <?php echo $_SESSION['name'];?></span>
                <?php } ?>
                <select id="id_select2_example">
                    <option data-img_src="assets/img/english.png"> ENGLISH</option>
                    <option data-img_src="assets/img/indonesia.png"> INDONESIA</option>
                </select>
            </div>
        </nav>
        
    </header>
    <!-- END OF HEADER SECTION -->
    <!-- BREADCRUMB SECTION -->
    <section class="breadcrumbsec2">
        
        <div class="breadcrumb2">
            <div class="container">
                <p><i class="fa fa-home" aria-hidden="true"></i> <a href="#">Home</a> / <a href="#">Dashboard</a> / <a href="#">My Courses</a> / <b><a href="#">Pertemuan <?php echo $datap['pertemuanke'];?></a></b></p>
            </div>
        </div>
    </section>
    <!-- END OF BREADCRUMB SECTION -->
    <!-- HEADER TITLE -->
    <section class="titleheader">
        <div class="container ">
            <div class="title">
                <h1><?php echo $data['course_name'];?></h1>
                <p>P<?php echo $data['course_id'];?></p>
                <h4><?php echo $data['jadwal'];?> | Ruang <?php echo $data['ruang'];?></h4>
                <h4>Dosen: <?php echo $data2['name'];?></h4>
            </div>
        </div>
    </section>
    <!-- END OF HEADER TITLE -->
    <!-- -->
    <section class="pertemuanisi">
        <div class="container">
            <hr class="header-hr" style="text-align:left;margin-left:0;">
            <div class="row d-flex justify-content-between align-text-bottom">
                <div col="col-10" style="width:80%;">
                    <h4><?php echo $datap['waktu'];?> <?php echo date('Y', strtotime($datap['tanggal']));?></h4>
                    <h1 class="pengumuman-perkuliahan-title">Pertemuan <?php echo $datap['pertemuanke'];?><br>(<?php echo $datap['judul_pertemuan'];?>)</h1>
                </div>
                <div col="col-2">
                    <button onclick="Dropdownlay3()" id="btn3">Sembunyikan <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button> <?php if($_SESSION['group']=='dosen'){?><a href="jadwal/edit.php?pertemuanid=<?php echo $pertemuanid; ?>"><button>Edit <i class="fa fa-pencil" aria-hidden="true"></i></button></a><?php }?>
                </div>
            </div>
            <span id="dots3"></span>
            <div id="more3">
               <div class="pertemuanisi-isidalam">
                <?php 
                $pertemuanisi = $conn->query("SELECT * FROM tb_isipertemuan WHERE pertemuan_id = '$pertemuanid'");
                while($pertemuanx = mysqli_fetch_array($pertemuanisi)){
                ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-between align-text-bottom">
                                <div class="col-10"  style="width:100%;">
                                    <h3 class="card-title"><i class="fa fa-file-text icontext" aria-hidden="true"></i> <?php echo $pertemuanx['judul']; ?></h3>
                                    
                                </div>
                                <div class="col-2">
                                <?php if($_SESSION['group']=='dosen'){?><a href="pertemuan/edit.php?materi=<?php echo $pertemuanx['id'];?>"><button class="button-edit">Edit <i class="fa fa-pencil" aria-hidden="true"></i></button></a><?php } ?>
                                </div>
                            </div>
                            <p class="card-text"><?php echo $pertemuanx['isi']; ?></p>
                            <?php if($pertemuanx['isQuestion'] == 'y'){
                                if($_SESSION['group']=='mahasiswa'){
                                    $uidx = $_SESSION['id'];
                                    $prtidx = $pertemuanx['id'];
                                    $sqlisans = "SELECT COUNT(*) AS total FROM tb_jawaban WHERE user_id = '$uidx' AND pertanyaan_id = '$prtidx'";
                                    $queryisans = $conn->query($sqlisans);
                                    $dataisans = $queryisans->fetch_assoc(); 
                                    if($dataisans['total']<1){ ?>
                                
                                <div class="textarea-tugas">
                                    <form action="pertemuan/answerq.php" method="POST">
                                    <input type="hidden" name='soal' value="<?php echo $pertemuanx['id'];?>">
                                        <input type="hidden" name='pertemuan' value="<?php echo $pertemuanid;?>">
                                        <input type="hidden" name='crsid' value="<?php echo $data['course_id'];?>">
                                        <input type="hidden" name='dosenid' value="<?php echo $data['dosen_id'];?>">
                                        <textarea name="answer" id="" placeholder="Jawaban kamu..."></textarea>
                                        <button type="submit" class="btn btn-dark btn-lg pull-right" style="margin-top:20px;">Submit</button>
                                    </form>
                                </div>
                            <?php } else{ ?>
                                <div class="textarea-tugas">
                                    <h3>Kamu telah menjawab pertanyaan ini pada <?php echo $dataisans['tanggal_jam']; ?> </h3>
                                </div>
                            <?php }
                            }
                            if($_SESSION['group']=='dosen'){ ?>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <td style="width:15%;">Tanggal</td>
                                            <td style="width:20%;">Nama</td>
                                            <td style="width:65%;">Jawaban</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php $prtid = $pertemuanx['id'];
                                             $jawaban = $conn->query("SELECT * FROM tb_jawaban WHERE pertanyaan_id = '$prtid'");
                                            while($jawabanx = mysqli_fetch_array($jawaban)){
                                                $uid = $jawabanx['user_id'];
                                                $sqluname = "SELECT * FROM tb_users WHERE id = '$uid'";
                                                $queryuname = $conn->query($sqluname);
                                                $datauname = $queryuname->fetch_assoc();?>
                                                <tr>
                                                    <td><?php echo $jawabanx['tanggal_jam']; ?></td>
                                                    <td><?php echo $datauname['name']; ?></td>
                                                    <td><?php echo $jawabanx['jawaban']; ?></td>
                                                </tr>
                                                <?php } ?>
                                    </tbody>
                                </table>
                            <?php }
                            
                            } ?>
                            <?php if($pertemuanx['isQuestion'] == 'n'){
                            if(!is_null($pertemuanx['file'])){ ?>
                            <a href="assets/files/pertemuan/<?php echo $pertemuanx['file'];?>"><div class="file">
                                <span class="fileisi"><i class="fa fa-folder" aria-hidden="true"></i> <label><?php echo $pertemuanx['judul_file']; ?></label></span>
                            </div></a><?php } ?>
                            <?php if(!is_null($pertemuanx['video']) || !is_null($pertemuanx['gambar'])){ ?>
                            <div class="pertemuan-video-photo">
                                <?php if(!is_null($pertemuanx['gambar'])){ ?>
                                    <img src="assets/img/pertemuan/<?php echo $pertemuanx['gambar'];?>" width="100%" alt="">
                                <?php } ?>
                                <?php if(!is_null($pertemuanx['video'])){ ?>
                                    <video width="100%" controls>
                                        <source src="assets/videos/pertemuan/<?php echo $pertemuanx['video'];?>" type="video/mp4">
                                    </video>
                                <?php } ?>
                            </div>
                            <?php }
                        } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <!--<div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-between align-text-bottom">
                                <div class="col-10"  style="width:100%;">
                                    <h3 class="card-title"><i class="fa fa-file-text icontext" aria-hidden="true"></i> Modul Perkuliahan 1</h3>
                                    
                                </div>
                                <div class="col-2">
                                    <button class="button-edit">Edit <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <p class="card-text">Materi untuk pertemuan ke dua ini membahas review kembali materi Aljabar linie dan Kalkulus. Kedua materi ini merupakan fondasi pemahaman teknik / cara kerja berbagai algoritma Machine Learning. Silakan dipelajari kembali. Jika ada pertanyaan, anda bisa memposting di forum diskusi yang diisiapkan di sesi ini. Anda juga bisa meremind materi yang perlu didiskusikan di grup WA kita.
                                Sikan materi pertemuan ke dua bisa diakses di google drive ini : </p>
                            <div class="file">
                                <span class="fileisi"><i class="fa fa-folder" aria-hidden="true"></i> <label>Modul Perkuliahan 1</label></span>
                            </div>
                            <div class="textarea-tugas">
                                <form action="" method="POST">
                                    <textarea name="" id="" placeholder="Jawaban kamu..."></textarea>
                                    
                                </form>
                            </div>
                             IF VIDEO != NULL 
                            <div class="pertemuan-video-photo">
                                <img src="assets/img/pertemuan/-.png" width="100%" alt="">
                                <video width="100%" controls>
                                    <source src="assets/videos/pertemuan/-.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>-->
                    
                    
               </div>
            </div>
        </div>
        <?php if($_SESSION['group']=='dosen'){ ?>
        <a href="pertemuan/create.php?pertemuanid=<?php echo $pertemuanid;?>"><div class="addnew-button align-items-center d-flex justify-content-center">
            <i class="fa fa-plus" style="font-size:50px; color:#28C2E4;" aria-hidden="true"></i>
        </div></a><?php } ?>
    </section>
    <!-- FOOTER -->
    <footer>
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <h4 style="color:#FCD033; margin-bottom:20px; font-weight: bold;">Tentang Mandiri Belajar</h4>
                        <p style="font-size:17px;">Kami menyediakan system dan materi perkuliahan yang berkualitas dan efisien melalui model berbagi sumber daya. Dengan memanfaatkan Teknologi, kami membantu semua pemangku kepentingan dalam mengimplementasikan Program Mandiri Belajar</p>
                    </div>
                    <div class="col-2">
                        <h4 style="color:#FCD033; margin-bottom:20px; font-weight: bold;">Information</h4>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Our Stories</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Our History</a></li>
                            <li><a href="">Special Info</a></li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h4 style="color:#FCD033; margin-bottom:20px; font-weight: bold;">Student Help</h4>
                        <ul>
                            <li><a href="">My Info</a></li>
                            <li><a href="">My Question</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Search Courses</a></li>
                            <li><a href="">Latest Information</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <a href=""><img src="assets/img/facebook.png" style="border-radius:15px; margin-right:15px;" width="50px" alt=""></a>
                        <a href=""><img src="assets/img/twitter.png" style="border-radius:15px; margin-right:15px;" width="50px" alt=""></a>
                        <a href=""><img src="assets/img/google.png" style="border-radius:15px;" width="50px" alt=""></a>
                    </div>
                </div>
                <hr style="margin-top: 45px; margin-bottom: 35px; border: 1px solid #fff;">
                <div class="row" style="padding-bottom:100px;">
                    <div class="col-8">
                        <h2 style="color:#FCD033; margin-bottom:10px; font-weight: bold;">Helpdek@mandiribelajar.co.id</h2>
                        <h2 style="color:#fff; margin-bottom:10px;">+62 813 1563 9020</h2>
                        <span style="color:#fff; font-size:18px;">Permata Regency D/37, Jl. H. Kelik, RT.1/RW.6, Srengseng, Kec. Kembangan, Kota Jakarta Barat, DKI Jakarta, 11630</span>
                    </div>
                    <div class="col-4 pull-right">
                        <span>Copyright &copy; <script>document.write(new Date().getFullYear());</script> MandiriBelajar</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END OF FOOTER -->
    <!-- LOGIN MODAL -->
    <div class="loginmodal">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                   <div class="container">
                       <div class="row">
                           <div class=col-12>
                                <center><img src="assets/img/logo.png" width="100px" alt=""></center>
                                <form action="settings/login.php" method="POST" style="margin-top:40px;">
                                    <div class="login-form">
                                        <div class="grouplogin-form">
                                            <input type="text" placeholder="USERNAME" name="username">
                                        </div>
                                        <div class="grouplogin-form">
                                            <input type="password" name="password" placeholder="**********">
                                        </div>
                                        <div class="grouplogin-form">
                                            <button type="submit" class="btn btn-login">LOGIN</button>
                                        </div>
                                        <center><a href="#">Forgot your password?</a></center>
                                    </div>
                                </form>
                           </div>
                       </div>
                   </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- END OF LOGIN MODAL -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script src="assets/js/select2.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>