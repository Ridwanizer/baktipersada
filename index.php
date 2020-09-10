<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Beranda | Bakti Persada Hijau</title>
        <link rel="shortcut icon" href="img/logodaun.JPG">
        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="index.php">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="header_atas"> </div>
                <div class="header_menu text" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand"><img src="img/logo.png" alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="index.php">Beranda <span class="sr-only">(current)</span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami <span class="caret"></span></a>
                                        <ul class="dropdown-menu exstended tasks-bar">
                                            <li><a href="VisiMisi.php">Visi & Misi</a></li>
                                            <li><a href="Profil Perusahaan.php">Galleri Perusahaan</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Layanan Publik Kopi.php">Kopi</a></li>
                                            <li><a href="Layanan Publik Lemon.php">Lemon</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layanan Publik <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cobahargaterkini.php">Harga Terkini</a></li>
                                            <li><a href="Ekspor.php">Ekspor</a></li>
                                            <li><a href="menuartikel.php">Artikel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Hubungi Kami.php">Hubungi Kami</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->



        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-umum" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-umum" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-umum" data-slide-to="1"></li>
                    <li data-target="#carousel-umum" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/Lemon.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/kopi.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/petani.JPG">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->



        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Selamat Datang Di Bakti Persada Hijau</h2>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <br>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <?php
                                            $sql = "SELECT * FROM `artikel`  INNER JOIN kategori ON artikel.Id_kategori = kategori.Id_kategori ORDER BY Tanggal DESC LIMIT 2;";
                                            $querySql = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_assoc($querySql)) :
                            
                             ?>
                            <div class="panel-body">
                                <h3><?= $row['Nama_artikel'] ?></h3>
                                    <div class="info-meta">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o"></i><?= $row['Tanggal'] ?></li>
                                            <li><i class="fa fa-user"></i> Posting by Bhakti Persada Hijau</li>
                                            <li class="pull-right"> Kategori : <?= $row['Kategori']; ?></li>
                                        </ul>
                                    </div>
                                <hr>
                                    <div class = "media">
                                        <a class = "pull-left" href = "">
                                            <img class = "media-object " src = "../phpbelajar/upload/<?= $row['Gambar'] ?>" width="100px" height="200px" >
                                        </a>
                                        <div class = "media-body">
                                            <?= substr($row['Sinopsis'],0,500) ?>
                                        </div>
                                            <p style="text-align:right;">
                                                <a href="<?= $row['Link'] ?>">
                                                    <button class="btn btn-primary">Read More</button>
                                                </a>
                                            </p>
                                    </div><!--End Media-->
                                <hr>
                                <br>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php

                             $video1 = mysqli_query($conn,"SELECT * FROM video");
                            $vid = mysqli_fetch_assoc($video1);
                            ?>
                            <div class="youtube">
                                <iframe width="360px"
                                height="300px" src="<?= $vid["Link"] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div><!--End Youtube-->>
                            <div class="panel panel-default ">
                                <div class="panel-heading"><h4 class="text-center">Media Sosial</h4></div>
                                <div class="panel-body">
                                    <table class="table card-table">
                                        <tbody>
                                            <tr><td width="1"><span class="avatar bg-blue"><i class="fa fa-facebook text-white"></i></span></td><td><a>Facebook (Bakti Persada Hijau)</a></td></tr>
                                            <tr><td width="1"><span class="avatar bg-teal"><i class="fa fa-twitter text-white"></i></span></td><td><a target="_blank">Twitter</a></td></tr>
                                            <tr><td width="1"><span class="avatar bg-red-dark"><i class="fa fa-google-plus text-white"></i></span></td><td><a href="#" target="_blank">Google</a></td></tr>
                                            <tr><td width="1"><span class="avatar bg-red"><i class="fa fa-youtube-play text-white"></i></span></td><td><a href="https://www.youtube.com" target="_blank">Youtube</a></td></tr>
                                            <tr><td width="1"><span class="avatar bg-pink-dark"><i class="fa fa-instagram text-white"></i></span></td><td><a href="http://instagram.com" target="_blank">Instagram (Bakti Persada Hijau)</a></td></tr>
                                        </tbody>
                                    </table>      
                                </div>
                            </div>      
                        </div>                 
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->

        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ 2018 - Design By <span><a href="">Bakti Persada Hijau</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By <a href="#">KelompokTani</a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    </body>

</html>