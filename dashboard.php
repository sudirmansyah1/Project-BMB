<?php 
session_start();
include 'settings/config.php';
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
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
                <p><i class="fa fa-home" aria-hidden="true"></i> <a href="#">Home</a> / <b><a href="#">Dashboard</a></b></p>
            </div>
        </div>
    </section>
    <!-- END OF BREADCRUMB SECTION -->
    <!-- Recently accessed courses -->
    <section class="accessed">
        <div class="accessed-body">
            <div class="container">
                <hr class="header-hr" style="text-align:left;margin-left:0;">
                <h1 class="accessed-title" style="margin-bottom:20px;">Recently accessed courses</h1>
                <div class="card-slider center-card-accessed">

                    <?php
                    $myid = $_SESSION['id'];
                    if ($_SESSION['group'] == 'mahasiswa'){
                     $accessed_course = $conn->query("SELECT tb_courses.* FROM tb_courses INNER JOIN tb_mycourse ON tb_courses.course_id = tb_mycourse.course_id WHERE tb_mycourse.user_id = '$myid' ORDER BY rand() LIMIT 5");
                    } elseif($_SESSION['group'] == 'dosen'){
                        $accessed_course = $conn->query("SELECT * FROM tb_courses WHERE dosen_id = '$myid' ORDER BY rand() LIMIT 5");
                    }
                                while($isi1 = mysqli_fetch_array($accessed_course)){
                                    
                            ?>
                    <div class="col-12">
                        <a href="mycourses.php?crsid=<?php echo $isi1['course_id'];?>">
                        <div class="card accessedcard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center accessedcard-header<?php echo(rand(1,3));?>">IT</h5>
                            <div class="card-body accessedcard-body">
                                <h4 class="card-title"><?php echo $isi1['course_name'];?></h4>
                                <p class="card-text"><?php echo $isi1['tentang'];?></p>
                            </div>
                        </div></a>
                    </div>
                    <?php } ?>
                </div>
                <!--<div class="card-slider center-card-accessed">
                    <div class="col-12">
                        <div class="card accessedcard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center accessedcard-header1">IT</h5>
                            <div class="card-body accessedcard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card accessedcard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center accessedcard-header2">IT</h5>
                            <div class="card-body accessedcard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card accessedcard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center accessedcard-header3">IT</h5>
                            <div class="card-body accessedcard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- END OF Recently accessed courses -->
    <section class="course">
        <div class="container">
            <hr class="header-hr" style="text-align:left;margin-left:0;">
            <h1 class="accessed-title" style="margin-bottom:20px;">Course overview</h1>
            <div class="row selectx">
                <div class="col-7">
                    <div class="select1">
                        <select id="lists">
                            <option value="All (Except removed from view)">All (Except removed from view)</option>
                            <option value="All (Except removed from view)">All (Except removed from view)</option>
                            <option value="All (Except removed from view)">All (Except removed from view)</option>
                            <option value="All (Except removed from view)">All (Except removed from view)</option>
                            <option value="All (Except removed from view)">All (Except removed from view)</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="select2">
                        <select id="lists">
                            <option value="Course name">Course name</option>
                            <option value="Course name">Course name</option>
                            <option value="Course name">Course name</option>
                            <option value="Course name">Course name</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="select2">
                        <select id="lists">
                            <option value="Card">Card</option>
                            <option value="Card">Card</option>
                            <option value="Card">Card</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="row no-gutters">
                <?php
                    $myidx = $_SESSION['id'];
                    if ($_SESSION['group'] == 'mahasiswa'){
                     $course = $conn->query("SELECT tb_courses.* FROM tb_courses INNER JOIN tb_mycourse ON tb_courses.course_id = tb_mycourse.course_id WHERE tb_mycourse.user_id = '$myidx' ");
                    } elseif($_SESSION['group'] == 'dosen'){
                        $course = $conn->query("SELECT * FROM tb_courses WHERE dosen_id = '$myidx'");
                    }
                                while($isix = mysqli_fetch_array($course)){
                                 
                            ?>
                    <div class="col-4">
                        <a href="mycourses.php?crsid=<?php echo $isix['course_id'];?>"><div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header<?php echo(rand(1,3));?>">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title"><?php echo $isix['course_name'];?></h4>
                                <p class="card-text"><?php echo $isix['tentang'];?></p>
                            </div>
                        </div></a>
                    </div>
                    <?php } ?>
                    <!--<div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header2">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header3">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header1">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header2">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header3">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header1">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header2">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card coursecard" style="width:100%;">
                            <h5 class="card-header  align-items-center d-flex justify-content-center coursecard-header3">IT</h5>
                            <div class="card-body coursecard-body">
                                <h4 class="card-title">S1 Teknik Informatika</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>-->
            </div>
        </div>
        <?php if($_SESSION['group']=='dosen'){ ?>
        <a href="dashboard/create.php"><div class="addnew-button align-items-center d-flex justify-content-center">
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
    <script src="assets/js/select2.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>