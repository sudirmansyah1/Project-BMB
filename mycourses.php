<?php 
session_start();
include 'settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
if(!isset($_GET['crsid'])){
    header("location:dashboard.php");
}
$crsid = $_GET['crsid'];
$sql = "SELECT * FROM tb_courses WHERE course_id = '$crsid'";
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
                <p><i class="fa fa-home" aria-hidden="true"></i> <a href="#">Home</a> / <a href="#">Dashboard</a> /  <b><a href="#">My Courses</a></b></p>
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
    <!-- KONTRAK PERKULIAHAN -->
    <section class="kontrak-perkuliahan">
        <div class="container">
            <hr class="header-hr" style="text-align:left;margin-left:0;">
            <div class="row d-flex justify-content-between align-text-bottom">
                <div col="col-10">

                    <h1 class="kontrak-perkuliahan-title">Kontrak Perkuliahan</h1>
                </div>
                <div col="col-2">
                    <button onclick="Dropdownlay()" id="btn">Sembunyikan <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button> <?php if($_SESSION['group']=='dosen'){?><a href="course/editkontrak.php?crsid=<?php echo $crsid;?>"><button>Edit <i class="fa fa-pencil" aria-hidden="true"></i></button></a><?php }?>
                </div>
            </div>
            <span id="dots"></span>
            <span id="more">
                <p>
                    <?php echo $data['kontrak_perkuliahan'];?>
                    <!--<h3>1. PROFIL PEKERJAAN</h3>
                    <h5>1.1 Bidang pekerjaan</h5>
                    Lulusan program sarjana Web Bisnis & Teknologi dapat bekerja di semua industri yang terlibat dalam desain, pengembangan dan pengoperasian sistem perangkat lunak berbasis web dan seluler.<br>
                    Namun, karena pendidikannya yang luas, lulusan sangat dibutuhkan dalam bidang kegiatan inti berikut:
                    <ul>
                        <li>Layanan IT di bidang sistem berbasis web</li>
                        <li>Layanan IT di bidang sistem seluler</li>
                        <li>Layanan TI di bidang pengembangan tumpukan penuh</li>
                        <li>Konsultasi manajemen dalam konteks sistem berbasis web dan seluler</li>
                        <li>Jasa di bidang bisnis web, e-marketing, e-commerce, e tourism, dll.</li>
                    </ul>
                    Karena semakin pentingnya produk dan layanan digital dan meningkatnya permintaan akan spesialis untuk memproses data, lulusan dapat memasuki berbagai institusi dan jenis perusahaan. Ini termasuk perusahaan besar di lingkungan nasional dan internasional serta perusahaan kecil dan menengah dan organisasi di lingkungan pemerintah dan LSM. Karakteristik penting dari bidang kegiatan vokasi adalah:
                    <ul>
                        <li style="list-style-type:lower-alpha">Pemahaman yang baik tentang latar belakang teknis, metode, dan alat pengembangan sistem berbasis web dan seluler.</li>
                        <li style="list-style-type:lower-alpha">Fleksibilitas yang tinggi dalam menerapkan metode dan perangkat ini di seluruh spektrum antara teknologi dan aplikasi.</li>
                    </ul>
                    Di bawah ini beberapa profil pekerjaan biasa dicantumkan sebagai contoh. Uraian tugas ini sengaja mencakup spektrum yang sangat luas untuk memperjelas bahwa lulusan-->
                </p>
            </span>
        </div>
    </section>
    <!-- END OF KONTRAK PERKULIAHAN -->
    <!-- PENGUMUMAN PERKULIAHAN -->
    <section class="pengumuman-perkuliahan">
        <div class="container">
            <hr class="header-hr" style="text-align:left;margin-left:0;">
            <div class="row d-flex justify-content-between align-text-bottom">
                <div col="col-10">

                    <h1 class="pengumuman-perkuliahan-title">Pengumuman Perkuliahan</h1>
                </div>
                <div col="col-2">
                    <button onclick="Dropdownlay2()" id="btn2">Sembunyikan <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button> <?php if($_SESSION['group']=='dosen'){?><a href="course/editpengumuman.php?crsid=<?php echo $crsid;?>"><button>Edit <i class="fa fa-pencil" aria-hidden="true"></i></button></a><?php }?>
                </div>
            </div>
            <span id="dots2"></span>
            <div id="more2">
               <p>
                <?php echo $data['pengumuman_perkuliahan'];?>
               </p>
            </div>
        </div>
    </section>
    <!-- END OF PENGUMUMAN PERKULIAHAN -->
    <section class="pertemuan">
        <div class="container">
            <div class="pertemuan-border-luar">
                <center><h3 style="color:white;">Pilih Pertemuan</h3></center>
                <div class="pertemuan-border-dalam">
                    <?php 
                        $pertemuan = $conn->query("SELECT tb_pertemuan.* FROM tb_pertemuan INNER JOIN tb_courses ON tb_courses.course_id = tb_pertemuan.course_id WHERE tb_courses.course_id = '$crsid' ORDER BY tb_pertemuan.pertemuanke ASC");
                        while($datarowprt = mysqli_fetch_array($pertemuan)){
                    ?>
                    <a href="pertemuan.php?pertemuanid=<?php echo $datarowprt['pertemuan_id']; ?>">
                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b><?php echo $datarowprt['waktu'];?></b></div>
                        <div class="col-7"><span>Pertemuan <?php echo $datarowprt['pertemuanke'];?> (<?php echo $datarowprt['judul_pertemuan'];?>)</span></div>
                    </div></a>
                    <?php } ?>
                    <!--<div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>

                    <div class="row border-row-pertemuan d-flex justify-content-center text-center">
                        <div class="col-1">
                            <label class="checkbox-round">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4"><b>07/09 - 13/09</b></div>
                        <div class="col-7"><span>Pertemuan 1 (Pengantar Perkuliahan Mech...</span></div>
                    </div>-->
                    
                </div>
            </div>
            <?php if($_SESSION['group']=='dosen'){ ?>
            <div class="div-create" style="margin-top:20px;">
            <a href="course/delete.php?id=<?php echo $crsid; ?>" class="btn btn-danger btn-lg pull-right" style="margin-left:20px;">Hapus Perkuliahan</a><a href="jadwal/create.php?crsid=<?php echo $crsid; ?>" class="btn btn-primary btn-lg pull-right">Tambah Pertemuan</a> 
            </div><?php } ?>
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
    <script src="assets/js/dashboard.js"></script>
</body>
</html>