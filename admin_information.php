   <!DOCTYPE html>
<?php
    $connect_db = mysqli_connect('localhost' , 'root' , '' , 'eproject');
        if (isset($_REQUEST['save-to-db'])) {
            $before_title = $_REQUEST['title'];
            $before_content = $_REQUEST['content'];
            $img = $_REQUEST['img'];
            $title = ucfirst($before_title);
            $content = ucfirst($before_content);

            $save_val = "INSERT INTO post_information (IMAGE , TITLE , CONTENT) VALUES ('".$img."' , '".$title."' , '".$content."')";
            $query = mysqli_query($connect_db , $save_val);
           
           if ($query) {
                header('location: admin_information.php');
                exit;
            } else {
                echo "failed";
            }

        }
    mysqli_close($connect_db);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>abc</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
            .ad{
                color:white;
               font-size: 30px;
               font-family: "Times New Roman", Times, serif;
               margin-left: 10px;
            }
            label{
                font-size: 16px; 
                color: red

            }
        </style>
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
        <li class="breadcrumb-item active">Information</li>
      </ol>
      <h1>Information</h1>
      <hr>
    </div>
    <!-- /.container-fluid-->
    <div id="global">
            <div class="container-fluid">
                <div class="panel panel-default">
                    
                    <div class="panel-body">

                        <form action="admin_information.php" method="post">
                            <div>
                                <label>Title</label>
                                <input required type="text" name="title" class="form-control" placeholder="Enter title">
                            </div><br>
                            
                            <div>
                                <label>Img</label>
                                <input required type="text" name="img" class="form-control">
                            </div><br>
                            <div>
                                <label>Content</label>
                                <textarea required class="form-control" rows="5" name="content"></textarea>
                            </div>
                            
                            <div class="form-group text-right" style="margin-top:20px">
                            
                                <button type="submit" name="save-to-db" id="save-to-db" class="btn btn-primary">Save</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
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
          <div class="modal-body">Do you want to sign out?</div>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
