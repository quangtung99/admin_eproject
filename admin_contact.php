<?php
  if (isset($_REQUEST['delete'])) {
    $get_id = $_REQUEST['get_id'];
    $connect = mysql_connect('localhost' , 'root' ,'');
    mysql_select_db('project',$connect);

    $delete = "DELETE FROM contact WHERE STT = '".$get_id."' ";
    mysql_query($delete,$connect);

    mysql_close($connect);

  }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - Trang Quản Trị</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript">
    $(document).ready(function() {
      
        $(".fa.fa-close").click(function() {
          for (let i = 0; i < $("tr").length; i++) {
            $(this).parents("tr").find(".sTT").html(i);
          }
        });
      
    });
  </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admin_information.php">Sea Life Tourism</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Information">
          <a class="nav-link" href="admin_information.php">
            <i class="fa fa-camera-retro"></i>
            <span class="nav-link-text">Information</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Event">
          <a class="nav-link" href="admin_event.php">
            <i class="fa fa-calendar"></i>
            <span class="nav-link-text">Event</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Booking">
          <a class="nav-link" href="admin_booking.php">
            <i class="fa fa-calendar-check-o"></i>
            <span class="nav-link-text">Booking</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
          <a class="nav-link" href="admin_contact.php">
            <i class="fa fa-address-book-o"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>
          Danh sách liên hệ
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Và Tên</th>
                  <th>Email</th>
                  <th>Phone_number</th>
                  <th>Tiêu Đề</th>
                  <th>Nội Dung</th>
                  <th></th>

                </tr>
              </thead>
              <tbody>
                <?php
                  $connect = mysql_connect('localhost'  , 'root' ,'');
                  mysql_select_db('project' , $connect);

                  $select = "SELECT * FROM contact";
                  $result = mysql_query($select , $connect);
                  while ($row = mysql_fetch_array($result)) {
                      echo '
                          <tr>
                            <form action="" method="post">
                               <td><input name="get_id" type="hidden" value='.$row["STT"].'>'.$row["STT"].'</td>
                                <td>'.$row["FULL_NAME"].'</td>
                                <td>'.$row["EMAIL"].'</td>
                                <td>'.$row["PHONE"].'</td>
                                <td>'.$row["TITLE"].'</td>
                                <td>'.$row["CONTENT"].'</td>
                                <td><a href="?delete='.$row['STT'].'"><button
                              type="submit" class="fa fa-close" name="delete"
                              ></button></a></td>
                            </form>
                          </tr>';
                  }

                  mysql_close($connect);
              ?>
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Sea Life Tourism 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
