
<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
<title>Foodizz Class - Category Classes</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Document Description" name="description" />
<meta content="FOODIZZ" name="author" />

  
        <!-- CSRF Token -->
        <meta name="csrf-token" content="Z1m3oLCBYrCvflNeRaZnP3I0xeQ3CE02ug4R2R54">

        
        <!-- =========================
    Bootstrap
 ============================== -->
 <link rel="stylesheet" href="/contoh/foodizz/front/css/bootstrap/bootstrap.css">

 
 <!-- =========================
    Typography and Icons
 ============================== -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
 <link rel="stylesheet" href="/contoh/foodizz/front/css/material-icons.css">
 <link rel="stylesheet" href="/contoh/foodizz/front/css/font-awesome.min.css">

 <!-- =========================
   Favicons
============================== -->
<link rel="apple-touch-icon" sizes="60x60" href="/contoh/foodizz/front/image/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/contoh/foodizz/front/image/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/contoh/foodizz/front/image/favicon/favicon-16x16.png">
<link rel="manifest" href="/contoh/foodizz/front/image/favicon/site.webmanifest">
<link rel="mask-icon" href="/contoh/foodizz/front/image/favicon/safari-pinned-tab.svg" color="#4a4a4a">
<meta name="msapplication-TileColor" content="#4a4a4a">
<meta name="theme-color" content="#ffffff">
  <!-- =========================
    Plugin
 ============================== -->
 <link rel="stylesheet" href="/contoh/foodizz/front/css/owl-carousel/owl.carousel.min.css">
 <link rel="stylesheet" href="/contoh/foodizz/front/css/owl-carousel/owl.theme.default.min.css">
 
 <!-- BEGIN PAGE LEVEL STYLES -->
 <link rel="stylesheet" href="/contoh/foodizz/front/css/preloader.css">
 <!-- END PAGE LEVEL STYLES -->

 <!-- =========================
    Style & Responsive Fixes
 ============================== -->
 <link rel="stylesheet" href="/contoh/foodizz/front/css/material-style.css">
 <link rel="stylesheet" href="/contoh/foodizz/front/css/style.css">
 <link rel="stylesheet" href="/contoh/foodizz/front/css/responsive.css">

        
        <script type="text/javascript">
            var APP_URL = "https:\/\/foodizz.id" + '/';
            APP_URL.replace('null','');
            window.Laravel = {"csrfToken":"Z1m3oLCBYrCvflNeRaZnP3I0xeQ3CE02ug4R2R54"} + '';
        </script>

    </head>
    <body>
        <nav id="animatedheader" class="navbar navbar-default navbar-transparent navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="https://foodizz.id" class="navbar-brand"><img src="/contoh/foodizz/front/image/logo-nav.png"></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a  href="index.php">Home</a></li>
                <li><a href="Service.php">Service</a></li>
                <li><a  href="about.php">About Us</a></li>
                <li><a  href="daftar-video.php">Video</a></li>
                <li><a  href="blog.php">Blog</a></li>
                                <li class="profile-header">
                    <a class="dropdown-toggle " type="button" data-toggle="dropdown">
                                                <img src="http://www.placehold.it/150x150/EFEFEF/AAAAAA&amp;text=no+image" class="img-circle">
                                                Riyan Andriyanto</a>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/contoh/index.php">Log Out</a></li>
                    </ul>
                </li>
                                <li>
                    <a class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="material-icons">search</i>
                        <span class="visible-xs-inline">Search</span>
                    </a>
                    <ul class="dropdown-menu search-navbar">
                        <li>
                            <form method="post" action="https://contoh/foodizz.id/search" accept-charset="UTF-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="content" placeholder="Search">
                                    <input name="_token" type="hidden" value="abY7s7GuxTq8eL3waGlAicPmStfPoSr9dtIP0Yxv"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="material-icons">search</i></button>
                                    </span>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="material-icons">local_mall</i>
                        <div class="alert-badge bg-red"></div>
                        <span class="visible-xs-inline">Cart</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cart 1</a></li>
                        <li><a href="#">Cart 2</a></li>
                        <li><a href="#">Cart 3</a></li>
                    </ul>
                </li> -->
            </ul>

        </div>
    </div>
</nav>

            <div class="header-content classlist">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">
                        Video List
                    </h2>
                </div>
            </div>
        </div>
    </div>


        
                
        

            <div class="foodizz-content">
        <div class="container">
            <div class="section">
                <div class="section-title">
                    <h3>Popular Video</h3>
                </div>
                <div class="section-content">
                    <div class="row">
                                                                        <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/77c3cea8ee6014ccc24aabcbb20089081546745991.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/idea-x-marketing">Idea X Marketing</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/watch-now-9-langkah-launching-produk-sukses">[WATCH NOW] 9 Langkah Launching Produk Sukses</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/rex-marindo">
                                                                                                                <img src="/contoh/images/instructor/d936cef6e1a10cf1b8a56e24895be57c1545964569.png" class="img-circle">
                                                                                                                Rex Marindo
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 127
                                                    <i class="material-icons">person</i> 42 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/8c302436b47521493d1b2a0353316cfc1546745940.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/operational">Operational</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/watch-now-membangun-organisasi-yang-excellent">[WATCH NOW] Membangun Organisasi yang Excellent</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/danis-puntoadi">
                                                                                                                <img src="/contoh/images/instructor/5a35af2218591d1d1a860e4b24541e411545964407.png" class="img-circle">
                                                                                                                Danis Puntoadi
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 62
                                                    <i class="material-icons">person</i> 23 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/00a80f570fcf9f72e33cc3ab5cf3494c1546745901.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/branding">Branding</a>
                                                                                    </h5>
                                        <h4><a href="http://localhost/contoh/after-login/play-video.php">[WATCH NOW] Membuat Logo yang Menjual</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/stefanie-kurniadi">
                                                                                                                <img src="/contoh/images/instructor/db28cc04f34a9aa4e5dbf41944e13cae1545964612.png" class="img-circle">
                                                                                                                Stefanie Kurniadi
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 56
                                                    <i class="material-icons">person</i> 21 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <h3>Explore Video</h3>
                </div>
                <div class="section-content">
                    <div class="row">
                                                <div id="class-list">
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/0d7893f56c40b2201e12c0a9a38319a51550483675.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/fund-raising">Fund Raising</a>
                                                                                    </h5>
                                        <h4><a href="http://localhost/contoh/after-login/play-video.php">Practical Tips</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/andrew-ryan-sinaga">
                                                                                                                <img src="/contoh/images/instructor/0d0616d367b95d580a4e7354fb0870a11549875138.png" class="img-circle">
                                                                                                                Andrew Ryan Sinaga
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 2
                                                    <i class="material-icons">person</i> 1 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/f122f3c98fb8e8c1d871fc02778c15b31550483594.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/fund-raising">Fund Raising</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/early-stage-fundrising-mechanic">Early Stage Fundrising Mechanic</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/andrew-ryan-sinaga">
                                                                                                                <img src="/contoh/images/instructor/0d0616d367b95d580a4e7354fb0870a11549875138.png" class="img-circle">
                                                                                                                Andrew Ryan Sinaga
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 1
                                                    <i class="material-icons">person</i> 1 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='https://foodizz.id/class/8-fundamentals-for-great-pitch'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/79456c3e300c1a69c52ace943620301d1550049887.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/fund-raising">Fund Raising</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/8-fundamentals-for-great-pitch">8 Fundamentals for Great Pitch</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/andrew-ryan-sinaga">
                                                                                                                <img src="/contoh/images/instructor/0d0616d367b95d580a4e7354fb0870a11549875138.png" class="img-circle">
                                                                                                                Andrew Ryan Sinaga
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 1
                                                    <i class="material-icons">person</i> 1 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/49beb9778cde04387d30e19a46fd37811549946811.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/fund-raising">Fund Raising</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/watch-it-now-qna-how-to-do-a-better-presentation">[WATCH IT NOW] QnA: How To Do A Better Presentation</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/andrew-ryan-sinaga">
                                                                                                                <img src="/contoh/images/instructor/0d0616d367b95d580a4e7354fb0870a11549875138.png" class="img-circle">
                                                                                                                Andrew Ryan Sinaga
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 4
                                                    <i class="material-icons">person</i> 3 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/d3e6ce38e2f3f9e324e560f8de69f2401549013494.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/food-safety--sop">Food Safety &amp; SOP</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/food-safety-hazard-part-ii">Food Safety Hazard Part II</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/syamsul-arifin">
                                                                                                                <img src="/contoh/images/instructor/b4d71cdeaf162eacbd962298166d988d1546599990.png" class="img-circle">
                                                                                                                Syamsul Arifin
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 0
                                                    <i class="material-icons">person</i> 0 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="col-md-4 col-sm-4">
                            <div class="classes layered md-default" onclick="window.location='http://localhost/contoh/after-login/play-video.php'" style="cursor: pointer;">
                                                                <img src="/contoh/images/content/ce801e5f61ca24b94d1ab64df14ce7561548234758.png" class="img-rounded img-responsive">
                                                                <div class="overlay">
                                    <div class="info">
                                        <h5>
                                                                                        <a href="https://foodizz.id/topics/design-thinking">Design Thinking</a>
                                                                                    </h5>
                                        <h4><a href="https://foodizz.id/class/memahami-logika-membangun-bussiness-model-canvas">Memahami Logika Membangun Bussiness Model Canvas</a></h4>
                                        <div class="users-card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="https://foodizz.id/instructor/dwi-purnomo">
                                                                                                                <img src="/contoh/images/instructor/da65f30e701333497987893617e898e51547787601.png" class="img-circle">
                                                                                                                Dwi Purnomo
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <i class="material-icons">play_circle_outline</i> 4
                                                    <i class="material-icons">person</i> 3 Join
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="alert alert-info" id="alert_classlist" role="alert">
                                <span class="error_message"></span>
                                <button type="button" class="close" onclick="$('#alert_classlist').hide();" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <span id="page" style="display:none;">1</span>
                            <button id="loadmore" class="btn btn-grey btn-block">Load More</button>
                            <div id="preloader" style="display:none;">
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading clearfix">
                                            <div class="col-xs-10">
                                                <div class="animate-bg"></div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-sm-5">
                                                <p class="animate-bg"><br /><br /><br /></p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="animate-bg"></p>
                                                <p class="animate-bg col-sm-11"></p>
                                                <p class="animate-bg"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading clearfix">
                                            <div class="col-xs-10">
                                                <div class="animate-bg"></div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-sm-5">
                                                <p class="animate-bg"><br /><br /><br /></p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="animate-bg"></p>
                                                <p class="animate-bg col-sm-11"></p>
                                                <p class="animate-bg"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading clearfix">
                                            <div class="col-xs-10">
                                                <div class="animate-bg"></div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-sm-5">
                                                <p class="animate-bg"><br /><br /><br /></p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="animate-bg"></p>
                                                <p class="animate-bg col-sm-11"></p>
                                                <p class="animate-bg"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                            </div>
                </div>
            </div>
        </div>
    </div>

        <!-- =========================
            Login Modal
           ============================== -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h5>Selamat Datang</h5>
                <h4>Foodizz.id</h4>
                <h5>
                    Silakan masukkan email dan password akun anda untuk mengakses konten ekslusif Foodizz.id.
                </h5>
            </div>
            <form id="login-form" role="form">
                <div class="modal-body">
                    <div class="alert alert-danger" id="alert_login" role="alert">
                        <span class="error_message"></span>
                        <button type="button" class="close" onclick="$('#alert_login').hide();" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="email" name="email" id="login-email" class="form-control">
                        <label for="login-email">Email</label>
                        <span class="help-block"> </span>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="password" name="password" id="login-password" class="form-control">
                        <label for="login-password">Password</label>
                        <span class="help-block"> </span>
                    </div>
                    <h5 class="text-right forget-password"><a href="#forgot-password-modal" data-dismiss="modal" data-toggle="modal" data-target="#forgot-password-modal">Forget Your Password</a></h5>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <input type="hidden" name="url" id="login-url" value="">
                        <button type="submit" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-lg fa-fw'></i> Loading..." id="btn-login" class="btn btn-sunglow btn-block btn-lg">Log In</button>
                    </div>
                    <button type="button" class="btn btn-grey btn-block btn-lg" href="#register-modal" data-toggle="modal" data-target="#register-modal">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

        <!-- =========================
            Register Modal
           ============================== -->
        <div class="modal fade" id="register-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-medium" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                    <h5>Selamat Datang</h5>
                    <h4>Foodizz.id</h4>
                    <h5>
                        Silakan mengisi data diri anda untuk melakukan pendaftaran menjadi member dan mendapatkan akses ke dalam konten eksklusif Foodizz.id
                    </h5>
                </div>
                <form id="signup-form" role="form">
                    <div class="modal-body">
                        <div class="alert alert-danger" id="alert_signup" role="alert">
                            <span class="error_message"></span>
                            <button type="button" class="close" onclick="$('#alert_signup').hide();" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" id="signup-fullname" name="fullname" class="form-control">
                            <label>Full Name</label>
                            <span class="help-block"> </span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" id="signup-phone" name="phone" class="form-control">
                            <label>Phone Number</label>
                            <span class="help-block"> </span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" id="signup-email" name="email" class="form-control">
                            <label>Email</label>
                            <span class="help-block"> </span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="password" id="signup-password" name="password" class="form-control">
                            <label>Password</label>
                            <span class="help-block"> </span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" id="signup-bussiness-name" name="bussiness_name" class="form-control">
                            <label>Business Name</label>
                            <span class="help-block"> </span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <select class="form-control" id="signup-bussiness-size" name="bussiness_size">
                                <option value="" disabled selected>Business Size</option>
                            </select>
                            <label></label>
                            <span class="help-block"> </span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <select class="form-control" id="signup-bussiness-title" name="bussiness_title">
                                <option value="" disabled selected>Number Of Employees</option>
                            </select>
                        </div>
                        <label></label>
                        <span class="help-block"> </span>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-lg fa-fw'></i> Submit" id="btn-signup" class="btn btn-sunglow btn-block btn-lg">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="register-success-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-medium" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Success</h4>
                </div>
                <div class="modal-body">
                    <p>
                        We’ve send verification email to your email. Please check your inbox and follow the next instructions.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.location='https://foodizz.id/subscription'" class="btn btn-sunglow btn-block btn-lg"">Continue</button>
                </div>
            </div>
        </div>
    </div>
        <!-- =========================
         Forgot Password Modal
        ============================== -->
        <div class="modal fade" id="forgot-password-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4>Foodizz</h4>
                <h5>
                    Please enter your email address to request password reset
                </h5>
            </div>
            <form id="forgot-form" role="form">
                <div class="modal-body">
                    <div class="alert alert-danger" id="alert_forgot" role="alert">
                        <span class="error_message"></span>
                        <button type="button" class="close" aria-label="Close" onclick="$('#alert_forgot').hide();">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="email" name="email" id="forgot-email" class="form-control">
                        <label for="forgot-email">Email</label>
                        <span class="help-block"> </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" data-loading-text="<i class='fa fa-circle-o-notch fa-spin fa-lg fa-fw'></i> Loading..." id="btn-forgot" class="btn btn-sunglow btn-block btn-lg">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="forgot-password-sent-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4>Success</h4>
            </div>
            <div class="modal-body">
                <p>
                    We’ve send verification email to your email. Please check your inbox and follow the next instructions.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" href="#login-modal" data-toggle="modal" data-target="#login-modal" class="btn btn-sunglow btn-block btn-lg">Continue</button>
            </div>
        </div>
    </div>
</div>
        <div class="modal fade" id="coming-soon-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4>Coming soon</h4>
            </div>
            <div class="modal-body">
                <p>
                    Sorry this feature is on progress, please come back later.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-sunglow btn-block btn-lg">OK</button>
            </div>
        </div>
    </div>
</div>        <div class="modal fade" id="resend-activation-code-sent-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4>Success</h4>
            </div>
            <div class="modal-body">
                <p>
                    We’ve send verification email to your email. Please check your inbox and follow the next instructions.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-sunglow btn-block btn-lg">Continue</button>
            </div>
        </div>
    </div>
</div>
        <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-3"><img src="/contoh/foodizz/front/image/foodizz-logo.jpg" class="img-responsive"></div>
            <div class="col-md-8 col-md-offset-1 col-sm-8 col-xs-9">
                <ul>
                    <li><a href="https://foodizz.id/classes">Browse Classes</a></li>|
                    <li><a href="https://foodizz.id/page/all-access">All Access</a></li>|
                    <li><a href="https://foodizz.id/page/contact">Contact Us</a></li>|
                    <li><a href="https://foodizz.id/page/privacy">Privacy</a></li>|
                    <li><a href="https://foodizz.id/page/term">Term</a></li>|
                    <li><a href="https://foodizz.id/page/carreers">Carreers</a></li>
                </ul>
                <p>Copyright 2019 </p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-5">
                <div class="capsule">
                    <div class="secure"><i class="material-icons">lock_outline</i> Secure with SSL</div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- =========================
         JavaScripts
        ============================== -->
        <script src="/contoh/foodizz/front/js/jquery/jquery.min.js"></script>
<script src="/contoh/foodizz/front/js/bootstrap/bootstrap.min.js"></script>
<script src="/contoh/foodizz/front/js/owl-carousel/owl.carousel.min.js"></script>
<script src="/contoh/foodizz/front/js/jquery-validate/jquery.validate.min.js"></script>
<script src="/contoh/foodizz/front/js/jquery-validate/additional-methods.min.js"></script>
<script src="/contoh/foodizz/front/js/script.js"></script>
<script src="/contoh/foodizz/front/js/script/forgot.js"></script>
<script src="/contoh/foodizz/front/js/script/login.js"></script>
<script src="/contoh/foodizz/front/js/script/register.js"></script>






<script>
    $(document).ready(function(){
        $('#alert_classlist').hide();
        $('#loadmore').click( function() {
            $('#loadmore').hide();
            $('#preloader').show();
            
            var page = $('#page').html();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            nextpage = parseInt(page) + 1;
            $('#page').html(nextpage);

            $.ajax({
                type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
                url: APP_URL + 'class/get-listbycategory', // the url where we want to POST
                data: {
                    page: nextpage,
                    type: 1,
                }, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                encode: true,
                success: function (result) {
                    
                    if(result.status){
                        $('#class-list').append(result.data);
                        $('#loadmore').show();
                    }else{
                        $('#alert_classlist').show();
                        $('#alert_classlist > .error_message').html(result.message);
                        setTimeout(function(){
                            $('#alert_classlist').fadeOut('slow'); 
                        }, 5*1000);
                    }

                    $('#preloader').hide();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $('#alert_classlist').show();
                    $('#alert_classlist > .error_message').html(result.message);
                    setTimeout(function(){
                        $('#alert_classlist').fadeOut('slow'); 
                    }, 5*1000);

                    $('#preloader').hide();
                }
            });
        });

    });
</script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131749106-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131749106-1');
        </script>

        <script>
        !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
        analytics.load("FLvo6yEwtIwmCFULLERJAECdIhUgE6kb");
        analytics.page();
        }}();
        </script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '313770822814018');
  fbq('track', 'ViewContent');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=313770822814018&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    </body>
</html>
