<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Absensi Siswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datepicker3.standalone.min.css">

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
          <div class="card-header">
            Data Absensi Siswa
          </div>

          <div class="card-body">

            <form class="pt-2 pb-4 form-inline" method="POST" action="Export_Excel.php">
              <input class="form-control tanggal mr-1" type="text" name="date_sel" id="date_sel">
              <button class="btn btn-primary mx-1" type="button" name="user_log" id="user_log">Pilih Tanggal</button>
              <input class="btn btn-success ml-1" type="submit" name="To_Excel" value="Export">
            </form>

            <table id="table" class="table table-bordered table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No. Induk</th>
                  <th>Finger ID</th>
                  <th>Tanggal</th>
                  <th>Masuk</th>
                  <th>Pulang</th>
                </tr>
              </thead>

              <tbody id="userslog"></tbody>
            </table>

          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


  

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

<script src="plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/datepicker/locales/bootstrap-datepicker.id.min.js"></script>

<!-- AdminLTE -->
<script src="js/adminlte.js"></script>

<script src="js/user_log.js"></script>

<script>
  $(document).ready(function(){
    $('#table').DataTable();

    $('.tanggal').datepicker({
        format: "dd-mm-yyyy",
        todayBtn: "linked",
        clearBtn: true,
        language: "id",
        autoclose: true
    });

      $.ajax({
        url: "user_log_up.php",
        type: 'POST',
        data: {
            'select_date': 1,
        }
      });
    setInterval(function(){
      $.ajax({
        url: "user_log_up.php",
        type: 'POST',
        data: {
            'select_date': 0,
        }
        }).done(function(data) {
          $('#userslog').html(data);
        });
    },5000);
  });
</script>

</body>
</html>
