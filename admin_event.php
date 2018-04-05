<?php
    $connect = mysqli_connect('localhost','root','','eproject');
    if(isset($_REQUEST['save'])) {
        $img_event = $_REQUEST['img_event'];
        $wrapper_highlight = $_REQUEST['wrapper_highlight'];
        $title_event1 = $_REQUEST['title_event1'];
        $title_event2 = $_REQUEST['title_event2'];
        $content_event1 = $_REQUEST['content_event1'];
        $content_event2 = $_REQUEST['content_event2'];
        $price = $_REQUEST['price'];

        $save_value= "INSERT INTO post_event(IMG_EVENT, WRAPPER_HIGHLIGHT, TITLE_EVENT1, TITLE_EVENT2, CONTENT_EVENT1, CONTENT_EVENT2, PRICE) VALUES ('".$img_event."','".$wrapper_highlight."','".$title_event1."','".$title_event2."','".$content_event1."','".$content_event2."', '".$price."')";
        // echo($save_value);
        mysqli_query($connect, $save_value);
     

    }
    mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trang Quản Trị</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
            label {
                font-size: 16px; 
                color: #f73679
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
        <li class="breadcrumb-item active">Event</li>
      </ol>
      <h1>Event</h1>
      <hr>
    </div>
    <!-- /.container-fluid-->
    <div id="global">
            <div class="container-fluid">
                <div class="panel panel-default">
                   
                    <div class="panel-body">

                        <form action="admin_event.php" method="post">
                            
                            <div>
                                <label>Image</label>
                                <input required type="text" name="img_event" class="form-control" placeholder="Enter Link Image">
                            </div><br>

                            <div>
                                <label>Wrapper HighLight</label>
                                <input required type="text" name="wrapper_highlight" class="form-control" placeholder="Enter Wrapper Highlight">
                            </div><br>

                            <div>
                                <label>Title 1</label>
                                <input required type="text" name="title_event1" class="form-control" placeholder="Enter title 1">
                            </div><br>

                            <div>
                                <label>Title 2</label>
                                <input required type="text" name="title_event2" class="form-control" placeholder="Enter title 2">
                            </div><br>

                            <div>
                                <label>Content 1</label>
                                <input type="text" required class="form-control" name="content_event1">
                            </div><br>

                            <div>
                                <label>Content 2</label>
                                <textarea required class="form-control" name="content_event2"></textarea>
                            </div><br>
                            
                            <div>
                                <label>Price</label>
                                <input required type="number" class="form-control" name="price">
                            </div><br>
                            <div class="form-group text-right" style="margin-top:20px">
                            
                                <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
