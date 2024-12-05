
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- Datatables  css-->
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
<link rel="stylesheet" href="../assets/css/login.css">
<?php
                                        if(isset($_GET['msg'])){
                                            $msg= $_GET['msg'];
                                            if($msg=='loginerror')
                                            {
                                               ?>
                                                       <div class="alert alert-danger alert-dismissible fade show "  role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         <strong>Your credentials are not matched.</strong> 
                                                         </div>
                        
                                                         <script>
                                                            $(".alert").alert();
                                                        </script>
                                               <?php
                                            }
                                        }
                                        ?>

                                        <?php
                                        if(isset($_GET['msg'])){
                                            $msg= $_GET['msg'];
                                            if($msg=='invaliduser')
                                            {
                                               ?>
                                                       <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         <strong>You are invalid user You need permission to access those pages. Please first login.</strong> 
                                                         </div>
                        
                                                         <script>
                                                            $(".alert").alert();
                                                        </script>
                                               <?php
                                            }
                                        }
                                        ?>


    <div class="main">

        <div class="container">
            <div class="row">
                <div class="left p-5 " style="width:450px;">
                     <div class="header">

                         <h1 >Welcome Back!</h1>
                         <p class="header1">Please Log into your account</p>
                        </div>
                    
                    <form class="user"  action="process/loginprocess.php"  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user"
                        id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email ">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input"  id="customCheck">
                            <label class="custom-control-label" style="font-size:15px;" for="customCheck">Remember
                                Me</label>
                                <a name="" id="" class="link " href="editpassword.php" style="float:right; font-size:15px; " >Forget Password?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" style="border:0px solid green;
                        border-bottom-right-radius: 20px;
                        border-top-right-radius: 20px;
                        border-bottom-left-radius: 20px;" name="login"  >Login</button>
     
                        <br><br>
                    </form>
                    <br><br>
                    <p class="footer">By sign up you agree to our term and that you have read our data policy.</p>
                    
                </div>
                
                <div class="right " style="text-align:left;" >
                    <img src="../assets/images/login.jpeg" style="width:500px; height:580px; ">
                    
                </div>
                
            </div>                           
        </div>
    </div>

<?php require('inc/footer.php'); ?>