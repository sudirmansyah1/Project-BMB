<?php 
session_start();
include '../settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:../index.php");
}
if($_SESSION['group'] != 'dosen'){
    header("location:../pertemuan.php");
}
?>

<html>
<head>
<title>Berkah Mandiri Belajar</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="../assets/css/select2.css" />
<!-- Slict CSS -->
<link rel='stylesheet' href='../assets/vendor/slick/slick-theme.css'>
<link rel='stylesheet' href='../assets/vendor/slick/slick.css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../assets/css/custom.css">

<!-- Animation CSS -->
<link rel="stylesheet" href="../assets/css/animate.min.css">
<!-- jQuery -->
<script src="../assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="../assets/js/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Slick JavaScript -->
<script src='../assets/vendor/slick/slick.min.js'></script>
<!-- CK EDITOR -->
<script src="../assets/ckeditor/ckeditor.js"></script>
</head>
<body>
    <!-- HEADER SECTION -->
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container"><a href="../index.php" class="navbar-brand"><img src="../assets/img/logo.png" height="60px" alt=""></a>
                <p class="nav-info"><span><i class="fa fa-calendar" style="color:28C2E4;"></i> Monday - Friday : 10:00 - 17:00</span><span style="margin-left:12px; margin-right:12px;">|</span><span><i class="fa fa-envelope-o" style="color:28C2E4;"></i> helpdek@mandiribelajar.co.id</span><span><i class="fa fa-facebook-square" style="color:28C2E4; margin-left:12px;"></i> <i class="fa fa-twitter-square" style="color:28C2E4; margin-left:7px;"></i> <i class="fa fa-google-plus-square" style="color:28C2E4;  margin-left:7px;"></i></span></p>
                <?php
                if(!isset($_SESSION['username'])){?>
                    <a href="#" class="btn btn-nav-log" data-toggle="modal" data-target="#myModal">LOGIN</a>
                <?php } else {?>
                    <span class="nav-info" ><img src="../assets/img/user_avatar/<?php echo $_SESSION['photo'];?>" width="36px" height="36px" class="rounded-circle"> <?php echo $_SESSION['name'];?></span>
                <?php } ?>
                <select id="id_select2_example">
                    <option data-img_src="../assets/img/english.png"> ENGLISH</option>
                    <option data-img_src="../assets/img/indonesia.png"> INDONESIA</option>
                </select>
            </div>
        </nav>
        
    </header>
    <!-- END OF HEADER SECTION -->
    <!-- -->
    <section class="pertemuanform">
        <div class="container">
            <form action="createp.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" placeholder="Masukkan judul" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="tentang">Tentang:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tentang" id="tentang" name="tentang" required>
                </div>
                <div class="form-group">
                    <label for="jadwal">Jadwal:</label>
                    <input type="text" class="form-control" placeholder="Hari, Jam Mulai-Jam Berakhir (ex: Senin, 07:00-10:00)" id="jadwal" name="jadwal" required>
                </div>
                <div class="form-group">
                    <label for="ruang">Ruang:</label>
                    <input type="text" class="form-control" placeholder="Ruang (ex: D-207)" id="ruang" name="ruang" required>
                </div>
                <div class="form-group">
                    <label for="kontrak">Kontrak Perkuliahan:</label>
                    <textarea class="form-control" rows="5" id="kontrak" placeholder="Kontrak Perkuliahan" name="kontrak" required></textarea>
                </div>
                <div class="form-group">
                    <label for="pengumuman">Pengumuman Perkuliahan:</label>
                    <textarea class="form-control" rows="5" id="pengumuman" placeholder="Pengumuman Perkuliahan" name="pengumuman" required></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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
                        <a href=""><img src="../assets/img/facebook.png" style="border-radius:15px; margin-right:15px;" width="50px" alt=""></a>
                        <a href=""><img src="../assets/img/twitter.png" style="border-radius:15px; margin-right:15px;" width="50px" alt=""></a>
                        <a href=""><img src="../assets/img/google.png" style="border-radius:15px;" width="50px" alt=""></a>
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
                                <center><img src="../assets/img/logo.png" width="100px" alt=""></center>
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
    <script>
        CKEDITOR.replace('kontrak');
        CKEDITOR.replace('pengumuman');
    </script>
    <script src="../assets/js/select2.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>
</html>