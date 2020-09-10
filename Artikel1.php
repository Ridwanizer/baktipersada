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
			   		<div class="panel-body">
			    	 <div class="post-detail">
				  		<h3>Cita Rasa Kopi Indonesia Buat Dunia Terkejut</h3>
				         <?php
                                $sql = "SELECT * FROM `artikel`  INNER JOIN kategori ON artikel.Id_kategori = kategori.Id_kategori where Link='Artikel1.php'";
                                $querySql = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($querySql);
                            
                             ?>
							<div class="info-meta">
								<ul class="list-inline">
									<li><i class="fa fa-clock-o"></i><?= $row['Tanggal'] ?></li>
									<li><i class="fa fa-user"></i> Posting by Bhakti Persada Hijau</li>
                                    <li><a download href="../phpbelajar/uploadartikel/<?= $row['Judul_artikel']; ?>" class="btn tombol-download"><i class="fa fa-download"></i> Download</a></li>
									<li class="pull-right"> Kategori : <?= $row['Kategori']; ?></li>
								</ul>
							</div>
                           
						<hr>
				  		<p>
				  		<img src="img/Kopi1.jpg" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;">Peluang ekspor produk kopi Indonesia semakin terbuka lebar, menyusul keberhasilan sejumlah produsen kopi Indonesia menyabet penghargaan AVPA Gourmet di Paris, Prancis, 2 Oktober lalu. Pasalnya, cita rasa kopi Indonesia mampu membuat dunia terkejut. 
				  		<br> 
				  		<p>“Ini mengindikasikan kualitas produk kopi Indonesia sudah semakin diakui pasar global,” ujar Menteri Pertanian (Mentan) Andi Amran Sulaiman, mengapresiasi kerja keras petani serta pengusaha pengolahan kopi Indonesia.</p> 
				  		<br>
				  		<p>Ia menambahkan, pengakuan pasar internasional ini menjadi harapan baru bagi peningkatan kesejahteraan petani kopi. “Kementan mendukung upaya-upaya pemangku kepentingan industri perkebunan kopi Indonesia, agar bisa lebih bersaing mengacu pada selera pasar internasional yang berbeda-beda,” katanya. </p>
				  		<br>	  
				  		<p>Sementara itu, menurut Ketua Komunitas Kopi Nusantara, pengakuan pasar global ini tidak lepas dari semakin banyaknya kopi Indonesia yang sudah mengantongi sertifikat Indikasi Geografis (IG). Ini sebagai salah satu persyaratan untuk menembus pasar internasional selain sertifikat organik</p>
				  		<br>
				  		<p>Annelis Putri, Country Manager AVPA untuk Indonesia dalam keterangan persnya menyebut, Presiden Juri AVPA André Rocher mengaku terkejut dengan kualitas kopi Indonesia yang sangat bervariasi. </p>
				  		<br>
				  		<p>Ahli organoleptik yang sangat mengenal dunia kopi sejak menjadi penanggung jawab kualitas kopi di Douwe Egberts (1971) serta Jacobs dan Kraft Foods/Mondelez International (sampai 2009) itu juga mengatakan, kopi Indonesia mengalami banyak kemajuan.</p>
				  		<br>
				  		<p>Apresiasi senada diberikan juri Serge Edmond, yang menyebut kopi Indonesia memiliki kualitas roasting yang baik. Penikmat kopi di Prancis menyukai light sampai medium roast.</p>
				  		<br>
				  		<p>Dengan keunggulan ini, 23 kopi Indonesia dari 11 produsen berhasil memenangkan penghargaan yang diserahkan di arena pameran The Salon Internasional de l’Agroalimentaire (SIAL) Agrofood di Paris. Sekadar informasi, SIAL Agrofood merupakan salah satu pameran agrofood terbesar di dunia. </p>
				  		<br>
				  		<p>Penghargaan bergengsi tersebut diserahkan langsung oleh Presiden AVPA Philippe Juglar kepada Deputy Chief of Mission dari KBRI Paris Agung Kurniadi, dan Annelis Putri selaku Country Manager AVPA Indonesia. Keduanya mewakili para produsen kopi Indonesia yang berhalangan hadir. </p>
				  		<br>
				  		<p>Kompetisi yang diselenggarakan AVPA (Agency for the Valorization of the Agricultural Products ) sepanjang Oktober itu diikuti lebih dari 170 produsen kopi dari seluruh dunia. Selain Indonesia, peserta kompetisi juga datang dari Brasil, Kamerun, Kolombia, Kongo, Amerika Serikat (Hawaii), Gabon, El Salvador, Honduras, Kenya, Laos, Meksiko, Peru, Puerto Rico, Tanzania, Togo, dan lain-lain. </p>
				  		<p>Dalam kompetisi AVPA, Indonesia adalah negara kedua yang mendapatkan penghargaan terbanyak, setelah Kolombia (25 penghargaan untuk 14 produsen). Penghargaan Gourmet dibagi menjadi empat kategori: Gold Gourmet, Silver Gourmet, Bronze Gourmet, dan Simple Gourmet. </p>
				 		<br>
				 		<p>Dari 23 penghargaan untuk produk kopi Indonesia itu, tiga di antaranya memenangi kategori Gold Gourmet, yakni Kopiku Tanah Air Kita – Papaku Manggarai (produsen dan roastery), Le Plein d’Sens – Kopi Luwak France, dan Kawi Mengani Bali – Sweet Honeydew.</p> 
				 		<br><br>
				  		</p>
				    </div>
				  
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