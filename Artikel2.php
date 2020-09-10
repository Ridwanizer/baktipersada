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
                                            $sql = "SELECT * FROM `artikel`  INNER JOIN kategori ON artikel.Id_kategori = kategori.Id_kategori where Link='Artikel2.php' ;";
                                            $querySql = mysqli_query($conn,$sql);
                                            $row = mysqli_fetch_assoc($querySql);
                            
                             ?>
                    <div class="panel-body">
                        <div class="post-detail">
                        <h3>Perbedaan Kopi Arabica Dengan Robusta</h3>
                  
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
                        <img src="img/Kopi2.jpg" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;"><b> Menikmati Kopi Terbaik </b>
                        <br> 
                        <p>Bagi para peminat kopi, sudah dapat dipastikan bahwa ada banyak sekali cara untuk memberikan manfaat pada bagaimana caranya untuk menikmati segala jenis kopi yang ada diluar sana. Dalam kaitannya dengan hal tersebut, yang hendak saya diskusikan disini adalah perbedaan kopi Arabika dan juga Robusta.</p>
                        <br>
                        <p>Perlu diketahui bahwa kedua kopi tersebut merupakan dua jenis kopi yang berbeda. Hal yang paling membedakan pastinya terletak pada tempat dimana dua spesies kopi itu tumbuh, rasa, dan juga perbedaan ekonomisnya. Dalam artikel ini, saya akan diskusikan lebih lanjut mengenai perbedaan kedua jenis kopi tersebut. Tujuannya adalah untuk membantu Anda semua dalam memilih jenis kopi yang paling sesuai dengan selera Anda.Cara menikmati kedua jenis kopi ini juga berbeda satu antara yang lain. Apa yang menjadi favorit Anda? </p>
                        <br>
                        <p><b>Perbedaan Rasa </b></p> 
                        <br>
                        <p>Dari segi rasa, kopi Arabica memiliki banyak variasi rasa yang mana beragam. Rasa dari kopi tersebut dapat lembut, manis, tajam, dan juga kuat. Anda dapat mengetahui bahwa sebelum disangrai, aroma dari kopi ini amat mirip dengan blueberry. Akan tetapi, setelah disangrai, kopi tersebut akan memiliki aroma buah-buahan manis. Tentu saja secara umum, orang cenderung menyukai aroma kopi Arabica bila dibandingkan dengan Robusta.</p>
                        <br>    
                        <p>Sedangkan untuk rasa dari kopi Robusta, ini cenderung memiliki variasi rasa yang netral. Terkadang ini juga memiliki rasa atau aroma seperti gandung. Sebelum disangrai, biji kopi ini memiliki aroma kacang-kacangan. Yang disayangkan, amat jarang untuk menemukan robusta berkualitas tinggi dipasaran sana. Faktanya, harga biji kopi Arabica lebih tinggi bila dibandingkan dengan kopi Robusta. </p>
                        <br>
                        <p><b>Kopi Arabica</b> </p>
                        <br>
                        <p>Kopi jenis ini tumbuh pada daerah dengan ketinggian 700-1700 mdpl. Suhu yang dimiliki adalah 16-20 °C. Yang perlu diketahui mengenai jenis kopi ini adalah mengenai aspek kepekaan terhadap jenis penyakit karat daun atau lebih dikenal dengan HV atau Hemileia Vastatrix. Ini terutama bila ditanam pada daerah yang memiliki elevasi kurang dari 700 mdpl.</p>
                        <br>
                        <p>Yang perlu diketahui selanjutnya adalah asal dari kopi tersebut. Faktanya, kopi ini berasal dari negara Etiopia dan juga Brasil. Kedua negara tersebut menguasai 70% pasar kopi secara global pastinya. Anda dapat pula menemukan banyak jenis kopi lain yang berasal dari kedua negara tersebut pastinya. </p>
                        <br>
                        <p>Ciri-ciri kopi Arabica adalah aroma yang wangi, hidup pada daerah yang dingin dan sejuk, memiliki rasa yang sedikit asam, rasa kental dimulut, pahit, dan juga memiliki tekstur lebih halus. </p>
                        <br>
                        <p><b>Kopi Robusta </b></p>
                        <br>
                        <p>Sedangkan untuk kopi robusta, ini merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia. </p>
                        <br>
                        <p>Mengenai asal dari kopi tersebut, ini banyak terdapat di Kolumbia, Indonesia, dan juga Filipina. Lalu apa ciri-ciri dari kopi tersebut? Orang biasanya akan menjumpai rasa yang lebih menyerupai cokelat. Bau yang dihasilkan juga manis. Tekstur dari kopi ini cenderung kasar dan memiliki warna yang bervariasi. Mungkin Anda perlu juga mengetahui ciri-ciri dari pohon Robusta. Pohon Robusta lebih rentan diserang serangga. Ini bahkan tumbuh pada daratan rendah yaitu sekitar 700 m dpl. Jumlah biji kopi yang dihasilkan juga lebih tinggi. Untuk proses berbunga, diperlukan waktu hingga 10 bulan yang nantinya menjadi buah. Jenis kopi ini berbuah pada suhu udara yang lebih hangat. </p>
                        <br><br>
                        </p> 
                
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