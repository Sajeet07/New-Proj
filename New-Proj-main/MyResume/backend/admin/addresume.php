<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <?php
              if(isset($_POST['submit'])) {
                $title = $_POST['title'];
                $date=$_POST['date'];
                $content = $_POST['content'];
                
                if($title!="" && $date!="" && $content!=""  )
                {
                    $query ="INSERT INTO resume(title,date,content) VALUES('$title','$date','$content')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                      ?>
                      <meta http-equiv="refresh" content="0; URL=manageresume.php?msg=csuccess" />
                        <?php
                        echo "Resume is added successfully.";
                    }
                    else 
                    {
                        echo "Resume couldn't added successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Resume</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="date" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <?php
  require('inc/footer.php'); 
  ?>