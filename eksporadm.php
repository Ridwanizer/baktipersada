<?php
require 'koneksi.php';

if( isset($_POST["submit"]) ) {

  $namaproduk = $_POST["namaproduk"];
  $bulan = $_POST["bulan"];
  $jumlah = $_POST["jumlah"];

  //query insert data
  $query = "INSERT INTO ekspor VALUES 
            ('', '$namaproduk', 'bulan', '$jumlah')
            ";?>
  <meta http-equiv="refresh" content="0; url=eksporadm.php"> <?php
  mysqli_query($conn, $query);?>

<?php
}
 

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Ekspor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <?php include ("koneksi.php");?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ridwan Hananto Aji Arifin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <li href="index2.php"><a href="index2.php"><i class="fa fa-home"></i> <span>Beranda</span>
          </a>
          </a>
        </li>
        </li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Insert Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="galeriadm.php"><i class="fa fa-circle-o"></i> Galleri Perusahaan</a></li>
            <li  class="active"><a href="produkadm.php"><i class="fa fa-circle-o"></i> Produk</a></li>
            <li><a href="karyawanadm.php"><i class="fa fa-circle-o"></i> Karyawan</a></li>
            <li><a href="artikeladm.php"><i class="fa fa-circle-o"></i> Artikel</a></li>
            <li><a href="hargaterkiniadm.php"><i class="fa fa-circle-o"></i> Harga Terkini</a></li>
            <li><a href="Gambar.php"><i class="fa fa-circle-o"></i> Gambar</a></li>
            <li><a href="Teks.php"><i class="fa fa-circle-o"></i> Teks</a></li>
          </ul>
        </li>
        <li>
          <a href="mailbox.php">
            <i class="fa fa-envelope"></i> <span>Pesan
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Insert Data</li>
        <li class="active">Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- insert produk KOPI -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ekspor </h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="namaproduk">Nama Produk</label>
                  <select class="form-control" name="namaproduk" id="namaproduk">
                    <option>Kopi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bulan">Bulan</label>
                  <select class="form-control" name="bulan" id="bulan">
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah (Ton)</label>
                  <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Example 50">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div><!--End Col-->
        <!--tabel-->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="panel panel-default">
              <div class="box-header with-border">
              <h3 class="box-title">Produk</h3>
            </div>
              <div class="panel-body">
                  <?php
                  $queryselect="SELECT * FROM produk;";
                  $resultselect= mysqli_query($conn,$queryselect);
                  ?>
                  <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                  <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending">
                                                Id Produk 
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 242px;" aria-label="Browser: activate to sort column ascending">
                                                Nama Produk
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 222px;" aria-label="Platform(s): activate to sort column ascending">
                                                Jenis Produk
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 242px;" aria-label="Browser: activate to sort column ascending">
                                                Harga
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 159px;" aria-label="Engine version: activate to sort column ascending">
                                                Edit
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">
                                                Hapus
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row=mysqli_fetch_array($resultselect)) {?>
                                            
                                        <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $row['Id_produk'] ?></td>
                                            <td class=" "><?php echo $row['Nama_produk'] ?></td>
                                            <td class=" "><?php echo $row['Jenis_produk'] ?></td>
                                            <td class=" "><?php echo $row['Harga'] ?></td>
                                            <td class="center ">
                                                <button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['Id_produk'] ?>">EDIT</button>
                                            </td>
                                            <td class="center ">
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $row['Id_produk'] ?>">HAPUS</button>
                                            </td>
                                        </tr>

                                        <?php include("hapus.php"); ?>
                                        <?php include("editkopi.php"); ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>   <!--maincontebt--> 
  </div>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> new
    </div>
    <strong>Copyright &copy; 2018 <a href="">Kelompok Tani Studio</a>.</strong> All rights
    reserved.
</footer>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
