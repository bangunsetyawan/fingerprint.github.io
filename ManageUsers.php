<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelola Siswa</title>

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
        


        <div class="row">
          <div class="col-sm-12 col-md-5 col-lg-5">
            <div class="card">
              <div class="card-body">
                <div id="alert" class="alert alert-success" role="alert"></div>

                <form>
                  <label>Masukan Fingerprint ID di antara angka 1 s/d 127:</label>
                  <input class="form-control mb-2" type="number" name="fingerid" id="fingerid" placeholder="ID Sidik Jari Pengguna  ..">
                  <button class="btn btn-block btn-success mb-4 fingerid_add" type="button" name="fingerid_add">Tambahkan ID Sidik Jari</button>

                  <input class="form-control mb-2" type="text" name="name" id="name" placeholder="Nama Siswa">
                  <input class="form-control mb-2" type="text" name="number" id="number" placeholder="Nomor Induk">
                  <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Kelas/Jurusan">

                  Waktu Masuk:
                  <input class="form-control mb-2" type="time" name="timein" id="timein">

                  <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input gender" type="radio" name="gender" value="Laki-laki" checked="checked">Laki-laki
                    <input class="form-check-input gender ml-3" type="radio" name="gender" value="Perempuan">Perempuan
                  </div>

                  <button class="btn btn-block btn-primary mb-2 user_add" type="button" name="user_add">Add User</button>
                  <button class="btn btn-block btn-warning mb-2 user_upd" type="button" name="user_upd">Update User</button>
                  <button class="btn btn-block btn-danger mb-2 user_rmo" type="button" name="user_rmo">Remove User</button>
                    
                </form>

              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="card">
              <div class="card-body">
                
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Finger .ID</th>
                        <th>Nama</th>
                        <th>Kelas/Jurusan</th>
                        <th>Nomor Induk</th>
                        <th>Tanggal</th>
                        <th>Waktu Masuk</th>
                      </tr>
                    </thead>
                    
                    <tbody id="manage_users"></tbody>
                  </table>
                </div>

              </div>
            </div>
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

<script src="js/manage_users.js"></script>

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
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    setInterval(function(){
      $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    },5000);
  });
</script>

</body>
</html>
