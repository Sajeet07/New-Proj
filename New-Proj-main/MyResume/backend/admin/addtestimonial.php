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
                $name= $_POST['name'];
                $post= $_POST['post'];
                $content= $_POST['content'];
                $img= $_POST['img'];
                
                if($name!="" && $post!="" && $content!="" && $img!="" )
                {
                    $query ="INSERT INTO testimonials (name,post,content,img) VALUES('$name','$post','$content','$img')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                      ?>
                      <meta http-equiv="refresh" content="0; URL=managetestimonial.php?msg=csuccess" />
                        <?php
                        echo "Testimonial is added successfully.";
                    }
                    else 
                    {
                        echo "Testimonial couldn't added successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="post" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="img" placeholder="">
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