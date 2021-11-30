<?php 
session_start();
include 'settings/config.php';

?>
A
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
        <nav class="navbar navbar-expand-lg fixed-top py-3">
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
        </nav>
    </header>
    <!-- END OF WWHEADER SECTION -->
    <!-- HERO SECTION -->
    <section class="hero">
        <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
            
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption">
                                    <h1 class="animated bounceInDown  hero-animation-delay hero-bold" style="color: #000;">Temukan pengajar terbaik</h1>
                                    <h1 class="animated fadeInLeft  hero-animation-delay hero-bold" style="color:#FF5A82;">dengan kuliah terbaik di sini</h1>
                                    <span class="animated fadeInRight  hero-animation-delay herospan" style="color: #000;">Belajar berssama dosen terbaik</span><br>
                                    <a href="#" class="btn animated fadeInUp hero-animation-delay btn-hero herospan">Bagaimana dosen bekerjasama?</a>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                <img src="assets/img/hero/slide1.png" width="100%" class="animated jackInTheBox hero-animation-delay" alt="">
                            </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item ">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption hero-animation-delay">
                                    <h1 class="animated bounceInDown hero-animation-delay hero-bold" style="color: #000;">Konten Belajar</h1>
                                    <h1 class="animated fadeInLeft  hero-animation-delay hero-bold" style="color:#2C6DB6;">Interaktif</h1>
                                    <span class="animated fadeInRight  hero-animation-delay herospan" style="color: #000;">Pusat kolaborasi dan berbagi sumber daya pembelajaran</span><br>
                                    <a href="#" class="btn animated fadeInUp  hero-animation-delay btn-hero2 herospan">Program Trial Berkah Mandiri Belajar</a>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                <div class="hero-man  f-right" >
                                    <img src="assets/img/hero/slide2.png" width="100%" class="animated jackInTheBox hero-animation-delay" alt="">
                                </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption hero-animation-delay">
                                    <h1 class="animated bounceInDown  hero-animation-delay hero-bold" style="color:#4DC351;">Mandiri Belajar</h1>
                                    <h1 class="animated fadeInLeft  hero-animation-delay hero-bold" style="color:#000;">Untuk Indonesia yang lebih baik</h1>
                                    <span class="animated fadeInRight  hero-animation-delay herospan" style="color:#000;">Mari bergabung berasama</span><br>
                                    <span class="animated fadeInRight  hero-animation-delay herospan" style="color:#000;">Berkah Mandiri Belajar</span><br>
                                    <a href="#" class="btn animated fadeInUp  hero-animation-delay btn-hero3 herospan">Mulai Bermitra</a>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                    <img src="assets/img/hero/slide3.png" width="100%  hero-animation-delay" class="animated jackInTheBox hero-animation-delay" alt="">
                            </div>
                    </div>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- END OF HERO SECTION -->
    <!-- PROGRAM SECTION -->
    <section class="program">
        <div class="container">
            <div class="card-slider program-margin">
                <div class="col-12">
                <div class="card card-profile card-hover">
                  <div class="card-avatar">
                    <a href="#">
                      <img class="img" src="assets/img/program/softwaredev.png">
                    </a>
                  </div>
                  <div class="card-body ">
                        
    
                        <h4 class="card-title">Software Development</h4>
    
                        <p class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        </p>
                        <a href="#" class="btn btn-prg4">Read More</a>
                    </div>
                 </div>
                </div>
                <div class="col-12">
                <div class="card card-profile card-hover">
                  <div class="card-avatar">
                    <a href="#">
                      <img class="img" src="assets/img/program/webdesign.png">
                    </a>
                  </div>
                  <div class="card-body ">
                        
    
                        <h4 class="card-title">Web Designing</h4>
    
                        <p class="card-description">
                        Mata kuliah ini dirancang agar mahasiswa memahami, mengetahui konsep, dan mampu membangun website yang baik, kreatif, dan interaktif
                        </p>
                        <a href="#" class="btn btn-prg3">Read More</a>
                    </div>
                 </div>
                </div>
                <div class="col-12">
                <div class="card card-profile card-hover">
                  <div class="card-avatar">
                    <a href="#">
                      <img class="img" src="assets/img/program/systemengineering.png">
                    </a>
                  </div>
                  <div class="card-body ">
                        
    
                        <h4 class="card-title">System Engineering</h4>

                        <p class="card-description">
                        Pada mata kuliah ini diajarkan bagaimana merancang, mengimplementasikan, dan mengevaluasi sistem
                        </p>
                        <a href="#" class="btn btn-prg">Read More</a>
                    </div>
                 </div>
                </div>
                <div class="col-12">
                <div class="card card-profile card-hover">
                  <div class="card-avatar">
                    <a href="#">
                      <img class="img" src="assets/img/program/Multimediasystem.png">
                    </a>
                  </div>
                  <div class="card-body ">
                        
    
                        <h4 class="card-title">Multimedia System</h4>
    
                        <p class="card-description">
                        Jika anda ingin menguasai teknik-teknik perancangan dan pembuatan konten berbasis multimedia, maka mata kuliah ini sangat sesuai
                        </p>
                        <a href="#" class="btn btn-prg2">Read More</a>
                    </div>
                 </div>
                </div>
                <div class="col-12">
                <div class="card card-profile card-hover">
                  <div class="card-avatar">
                    <a href="#">
                      <img class="img" src="assets/img/program/webtechnology.png">
                    </a>
                  </div>
                  <div class="card-body ">
                        
    
                        <h4 class="card-title">Web Technology</h4>
    
                        <p class="card-description">
                        Mata kuliah ini mengajarkan berbagai teknik, metode maupun teknologi pengembangan aplikasi berbasis web
                        </p>
                        <a href="#" class="btn btn-prg4">Read More</a>
                    </div>
                 </div>
                </div>
                <div class="col-12">
                <div class="card card-profile card-hover">
                  <div class="card-avatar">
                    <a href="#">
                      <img class="img" src="assets/img/program/mobilecomputing.png">
                    </a>
                  </div>
                  <div class="card-body ">
                        
    
                        <h4 class="card-title">Mobile Computing</h4>
    
                        <p class="card-description">
                        Expert dibidang pengembangan aplikasi komputasi berbasis mobile adalah objektif dari mata kuliah ini 
                        </p>
                        <a href="#" class="btn btn-prg3">Read More</a>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF PROGRAM SECTION -->
    <!-- LAYANAN SECTION -->
    <section class="layanan">
        <div class="header-layanan">
            <hr class="header-hr">
            <center><h1 style="font-size:80px;">Layanan Kami</h1>
            <h6 style="margin-top: 20px; color:#28C2E4;">L A Y A N A N  &nbsp;&nbsp;D A N  &nbsp;&nbsp;F A S I L I T A S</h6></center>
            
        </div>
        <div class="body-layanan">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-3">
                        <center><img src="assets/img/layanan/online.png" width="200px" alt=""></center>
                    </div>
                    <div class="col-3">
                        <center><img src="assets/img/layanan/notifikasi.png" width="200px" alt=""></center>
                    </div>
                    <div class="col-3">
                        <center><img src="assets/img/layanan/matakuliah.png" width="200px" alt=""></center>
                    </div>
                    <div class="col-3">
                        <center><img src="assets/img/layanan/kemitraan.png" width="200px" alt=""></center>
                    </div>
                </div>
            </div>
            <div class="container title-body-layanan">
                <div class="row align-items-center">
                    <div class="col-3">
                        <center><h2>Pembelajaran berbasis online</h2></center>
                    </div>
                    <div class="col-3">
                        <center><h2>Notifikasi dan laporan</h2></center>
                    </div>
                    <div class="col-3">
                        <center><h2>Mata kuliah terbaik</h2></center>
                    </div>
                    <div class="col-3">
                        <center><h2>Kemitraan mandiri belajar</h2></center>
                    </div>
                </div>
            </div>
            <div class="container desc-body-layanan">
                <div class="row">
                    <div class="col-3">
                        <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <img src="assets/img/layanan/dropdown.png" width="50px" alt="" onclick="Dropdownlay()" id="Dropdownlay"></center>
                    </div>
                    <div class="col-3">
                        <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <img src="assets/img/layanan/dropdown.png" width="50px" alt="" onclick="Dropdownlay2()" id="Dropdownlay2"></center>
                    </div>
                    <div class="col-3">
                        <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots3">...</span><span id="more3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <img src="assets/img/layanan/dropdown.png" width="50px" alt="" onclick="Dropdownlay3()" id="Dropdownlay3"></center>
                    </div>
                    <div class="col-3">
                        <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots4">...</span><span id="more4">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <img src="assets/img/layanan/dropdown.png" width="50px" alt="" onclick="Dropdownlay4()" id="Dropdownlay4"></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF LAYANAN SECTION -->
    <!-- KEUNGGUKAN SECTION -->
    <section class="keunggulan">
        <div id="carousel2" class="carousel slide hero-slides" data-ride="carousel2">
            
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption">
                                   <hr class="header-hr" style="text-align:left;margin-left:0;">
                                   <h1 class="hero-bold">Mengapa</h1>
                                   <h1 class="hero-bold" style="color:#2C6DB6;">Berkah Mandiri Belajar?</h1>
                                   <span class="herospan" style="font-size: 20px;">Apa keunggulan dan solusi yang ditawarkan <br> oleh Berkah Mandiri Belajar?</span>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                <div class="card keunggulan-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/img/keunggulan/keunggulan1.png" width="100%" alt="">
                                                </div>
                                                <div class="col-9">
                                                    <h1 class="card-title" style="font-size: 50px; color:#2C6DB6;">Konten Pendidikan Berkualitas</h1>
                                                    <p class="card-text">Fokus kami adalah menyediakan sistem dan materi perkuliahan yang berkualitas dan efesien melalui model berbagai sumber daya. Dengan memanfaatkan semua pemangku kepentingan dalam mengimplementasikan Program Merdeka Belajar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item ">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption hero-animation-delay">
                                    <hr class="header-hr" style="text-align:left;margin-left:0;">
                                   <h1 class="hero-bold">Mengapa</h1>
                                   <h1 class="hero-bold" style="color:#2C6DB6;">Berkah Mandiri Belajar?</h1>
                                   <span class="herospan" style="font-size: 20px;">Apa keunggulan dan solusi yang ditawarkan <br> oleh Berkah Mandiri Belajar?</span>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                <div class="hero-man  f-right" >
                                    <div class="card keunggulan-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/img/keunggulan/keunggulan2.png" width="100%" alt="">
                                                </div>
                                                <div class="col-9">
                                                    <h1 class="card-title" style="font-size: 50px; color:#2C6DB6;">Keterbaharuan Kurikulum</h1>
                                                    <p class="card-text">Kebaharuan dan kekinian sylabus, kurikulum, Capaian Pembelajaran Lulusan (CPL) dan Capaian Pembelajaran Mata Kuliah (CPMK)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption hero-animation-delay">
                                    <hr class="header-hr" style="text-align:left;margin-left:0;">
                                   <h1 class="hero-bold">Mengapa</h1>
                                   <h1 class="hero-bold" style="color:#2C6DB6;">Berkah Mandiri Belajar?</h1>
                                   <span class="herospan" style="font-size: 20px;">Apa keunggulan dan solusi yang ditawarkan <br> oleh Berkah Mandiri Belajar?</span>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                <div class="card keunggulan-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/img/keunggulan/keunggulan3.png" width="100%" alt="">
                                                </div>
                                                <div class="col-9">
                                                    <h1 class="card-title" style="font-size: 50px; color:#2C6DB6;">Konten Pendidikan Berkualitas</h1>
                                                    <p class="card-text">DIsusun dan dikembangkan oleh para praktisi pembelajaran berkonsep “Open Education” dengan konsep “Interactive and active learning”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption hero-animation-delay">
                                    <hr class="header-hr" style="text-align:left;margin-left:0;">
                                   <h1 class="hero-bold">Mengapa</h1>
                                   <h1 class="hero-bold" style="color:#2C6DB6;">Berkah Mandiri Belajar?</h1>
                                   <span class="herospan" style="font-size: 20px;">Apa keunggulan dan solusi yang ditawarkan <br> oleh Berkah Mandiri Belajar?</span>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                                <div class="card keunggulan-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/img/keunggulan/keunggulan4.png" width="100%" alt="">
                                                </div>
                                                <div class="col-9">
                                                    <h1 class="card-title" style="font-size: 50px; color:#2C6DB6;">Kemudahan Evaluasi</h1>
                                                    <p class="card-text">Hasil pembelajaran dapat di download dengan mudah</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                <img src="assets/img/program/button/prev.png" alt="">
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                <img src="assets/img/program/button/next.png" alt="">
            </a>
        </div>
    </section>
    <!-- END OF KEUNGGULAN SECTION -->
    <!-- ABOUT SECTION -->
    <section class="about">
        <div class="about-body">
            <div class="container ">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/img/about/about.png" width="100%" alt="">
                    </div>
                    <div class="col-8">
                        <hr class="header-hr" style="text-align:left;margin-left:0;">
                        <h1 class="about-title">Apa itu</h1>
                        <h1 class="about-title" style="color:#2C6DB6;">Berkah Mandiri Belajar?</h1>
                        <p><b>Selamat datang di LMS Pembelajaran Mandiri Belajar.</b><br>
                            Layanan ini diberikan sebagai media berbagi konten-konten pembelajaran di berbagai bidang. Perguruan tinggi dan mahasiswa dapat memanfaatkan konten belajar yang telah disediakan oleh berbagai instansi pada LMS ini.<br><br>

                            Kami membuka Kemitraan  bagi Perguruan Tinggi, dosen dan Instansi yang ingin berbagi konten interaktif dan kurikulum keterbaharuan melalui platform ini.<br><br>

                            Jadilah bagian dari perubahan pendidikan untuk mewujudkan pelajar yang kompeten, ekosistem pendidikan yang kolaboratif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF ABOUT SECTION -->
    <!-- VISI MISI SECTION -->
    <section class="visimisi">
        <div class="visimisi-body">
            <h2>Visi</h2>
            <p style="margin-top:20px; font-size: 20px;">Menjadi media dan partner dalam pembelajaran terbuka terbaik di Indonesia</p>
            <h2 style="margin-top:40px;">Misi</h2>
            <ul class="checklist-ul">
                <li>Menyediakan konten berkualitas berbasis Outcome Base Education (OBE) yang sesuai dengan tuntutan  regulasi pembelajaran dan kebutuhan pasar</li>
                <li>Menjadi partner seluruh stakeholder dalam pembelajaran terbuka  dengan prinsip kemitraan dan proporsional.</li>
                <li>Memfasilitasi pembelajaran daring yang berkualitas dan Profesional.</li>
            </ul>  
        </div>
    </section>
    <!-- END OF VISI MISI SECTION -->
    <section class="gallerysect">
        <div class="header-gallery">
            <hr class="header-hr">
            <center><h1 style="font-size:70px;">Gallery</h1>
            <h6 style="margin-top: 20px; color:#28C2E4;">S T U D E N T &nbsp;&nbsp;G A L L E R Y &nbsp;&nbsp;O F &nbsp;&nbsp;T H E &nbsp;&nbsp;P A S T &nbsp;&nbsp;G R A D U A T E D &nbsp;&nbsp;P A S S O U T S</h6></center>
            
        </div>
        <div class="body-gallery">
            <div class="gallery-wrapper">

            <ul class="gallery">

                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation1.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation2.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation3.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>		
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation4.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation5.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation6.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation7.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation8.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>
                <li class="gallery-item">
                    <img src="assets/img/gallery/graduation9.jpg" class="gallery-img">
                    <p class="gallery-im-caption">Graduation 2020/2021</p>
                </li>

            </ul>

            </div>
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
    <script src="assets/js/select2.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>