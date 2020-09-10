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

        <title>Artikel | Bakti Persada Hijau</title>

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
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>

        <link rel="stylesheet" href="css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

</head>
<body data-spy="scroll" data-target="Visi & Misi.html">
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
                                <a class="navbar-brand custom_navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li><a href="index.php">Beranda <span class="sr-only">(current)</span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
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
                                    <li  class="active" class="dropdown">
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
        <br>
        <br>
        <br>
        <br>
        <section id="Artikel">
                                                                <div class="container" style="margin-top:40px">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <?php 
                            $sql = "SELECT * FROM `artikel`  INNER JOIN kategori ON artikel.Id_kategori = kategori.Id_kategori where Link='Artikel8.php' ;";
                            $querySql = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($querySql);


                        ?>
                    <div class="panel-body">
                        <div class="post-detail">
                        <h3>Komoditas Unggulan Pertanian Indonesia</h3>
                  
                            <div class="info-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-clock-o"></i><?= $row['Tanggal'] ?></li>
                                    <li><i class="fa fa-user"></i> Posting by Bhakti Persada Hijau</li>
                                    <li><a download href="../phpbelajar/uploadartikel/<?= $row['Judul_artikel']; ?>" class="btn tombol-download"><i class="fa fa-download"></i> Download</a></li>
                                    <li class="pull-right">Kategori : <?= $row['Kategori']; ?></li>
                                </ul>
                            </div>
                        <hr>
                        <p>
                        <img src="img/Berita2.jpg" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;">Sektor pertanian Indonesia terus memberi kontribusi positif terhadap perekonomian nasional. Pertanian di Indonesia dapat dikatakan sebagai roda penggerak perekonomian nasional. Selain menghasilkan bahan pangan untuk memenuhi kebutuhan masyarakat, pertanian juga sedang menjadi prioritas untuk ditingkatkan produktivitasnya. 
                        <br> 
                        <p> Saat ini, sektor pertanian Indonesia dari sisi produksi merupakan sektor kedua paling berpengaruh terhadap pertumbuhan ekonomi nasional, setelah industri pengolahan. Terdapat berbagai komoditas pertanian yang menjadi unggulan Indonesia. </p>
                        <br>
                        <p> Berikut ini komoditas unggulan pertanian Indonesia.</p>
                        <br>
                        <p><b>1. Kopi</b> </p> 
                        <br>
                        <p>Indonesia termasuk salah satu negara produsen kopi terbesar di dunia. Indonesia berada pada wilayah tropis dimana lokasi yang optimal untuk budidaya kopi. Jenis kopi yang banyak ditanam oleh para petani di Indonesia adalah kopi robusta dan arabika. 
                        <br>
                        Kopi dari Indonesia juga dinilai sebagai kopi dengan kualitas dan cita rasa terbaik di dunia. Negara tujuan ekspor kopi arabika terbesar adalah ke pasar Eropa dan Amerika. Sementara, kopi robusta adalah pasar Asia, Eropa Timur, dan Timur-Tengah. </p>
                        <br>    
                        <p> <b> 2. Biji kakao</b></p>
                        <br>
                        <p>Biji kakao termasuk dalam komoditas yang selalu menjadi langganan untuk diekspor. Kualitas biji kakao dari Indonesia juga tidak kalah dari negara yang lainnya. Melimpahnya hasil perkebunan kakao di tanah air membuatnya banyak diekspor keluar negeri. Sejak 2002 Indonesia telah aktif dalam ekspor biji kakao ini dengan negara tujuan terbesar seperti Amerika Serikat, India, Belanda, dan Malaysia.</p>
                        <br>
                        <p><b> 3. Kelapa sawit</b></p>
                        <br>
                        <p>Indonesia adalah salah satu negara pemasok minyak kelapa sawit mentah (Crude Palm Oil/CPO) terbesar di dunia. Kelapa sawit dimanfaatkan sebagai bahan baku untuk industri minyak goreng, sabun, kosmetik, dan juga obat-obatan. Lahan perkebunan kelapa sawit di Indonesia terpusat di Pulau Sumatera dan Kalimantan. </p>
                        <br>
                        <p><b>4. Karet </b> </p>
                        <br>
                        <p>Karet juga menjadi salah satu komoditas pertanian unggulan Indonesia yang diekspor keluar negeri. Karet Indonesia lebih besar diproduksi oleh petani-petani kecil dibanding perkebunan pemerintah dan swasta. Daerah penghasil karet utama adalah Sumatera Selatan, Sumatera Utara, Riau, Jambi, dan Kalimantan Barat. Sejak 2000, Indonesia sudah aktif dalam ekspor karet ke negara tujuan seperti Jepang, Singapura, Amerika Serikat, dan Jerman. </p>
                        <br> <br>
                        </p>
                
                        </div>     
                  
                    </div>
               
                    </div>
                </div>
                </div>
                
                            </div><!--recent-->
                        </div>
                    </div>      
                </div>          
            </div>          
        </div>

        
        </section>   <!--maincontebt--> 
        <br>
        <br>
        <br>
        <br>

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
        <!--Data Chart-->
        <script type="text/javascript">
            

        </script><!--End Script Chart-->
       
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