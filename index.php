<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - Fingerprint</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php include "layout/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid py-3">
        <div class="card">
          <div class="card-header" style="font-size: 20pt">
            <div class="fas fa-fingerprint"> </div> 
            <b> Biometric Fingerprint Attendance System</b>
            </div>   
          </div>
             <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Guru</span>
                <span class="info-box-number">
                  18
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Siswa</span>
                <span class="info-box-number">183</span>
              </div>
            </div>
          </div>

      <div class="container-fluid py-3">
        <div class="card">
          <div class="card-header" style="font-size: 15pt">
            <div class="fas fa-fingerprint"> </div> 
            <b> Petunjuk Penggunaan Aplikasi</b>
            </div>   
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
            </div>

  <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
              <b>Menu Data Siswa</b>
             <br> Menampilkan Siswa yang tefdaftar pada aplikasi fingerprint</br>
           </div>
         </div>

<div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
              <b>Menu Data Absensi Siswa</b>
             <br> Menampilkan riwayat absensi siswa</br>
           </div>
      

</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
              <b>Menu Kelola Siswa </b>
             <br> Menampilkan Form Pendaftaran Sidik Jari
             <br> Menampilkan Form identitas siswa
             <br> Menghapus Sidik Jari
             <br> Mengubah identitas Pengguna
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
  </div>
<?php include "layout/footer.php" ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- AdminLTE -->
<script src="js/adminlte.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable();
  });
</script>

</body>
</html>
