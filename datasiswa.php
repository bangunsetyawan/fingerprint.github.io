<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Siswa</title>

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
          <div class="card-header">
            Data Siswa
          </div>

          <div class="card-body">

            <table id="table" class="table table-bordered table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>No | Nama</th>
                  <th>Serial Number</th>
                  <th>Jurusan</th>
                  <th>Finger ID</th>
                  <th>Tanggal</th>
                  <th>Waktu Masuk</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  //Connect to database
                  require'connectDB.php';

                    $sql = "SELECT * FROM users WHERE NOT username='' ORDER BY id DESC";
                    $result = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($result, $sql)) {
                        echo '<p class="error">SQL Error</p>';
                    }
                    else{
                      mysqli_stmt_execute($result);
                        $resultl = mysqli_stmt_get_result($result);
                      if (mysqli_num_rows($resultl) > 0){
                          while ($row = mysqli_fetch_assoc($resultl)){
                  ?>
                              <TR>
                              <TD><?php echo $row['id']; echo" | "; echo $row['username'];?></TD>
                              <TD><?php echo $row['serialnumber'];?></TD>
                              <TD><?php echo $row['email'];?></TD>
                              <TD><?php echo $row['fingerprint_id'];?></TD>
                              <TD><?php echo $row['user_date'];?></TD>
                              <TD><?php echo $row['time_in'];?></TD>
                              </TR>
                <?php
                        }   
                    }
                  }
                ?>
              </tbody>
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
<!-- AdminLTE -->
<script src="js/adminlte.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable();
  });
</script>

</body>
</html>
