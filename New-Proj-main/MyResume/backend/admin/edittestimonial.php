<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $show_query = "SELECT * FROM testimonials WHERE id=$id"; 
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc();
    $name = $row['name'];
    $post = $row['post'];
    $content=$row['content'];
    $img=$row['img'];
  
 
}
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
              if(isset($_POST['submit']))
            {
                $name = $_POST['name'];
                $post= $_POST['post'];
                $content= $_POST['content'];
                $img=$_POST['img'];

                if($name!="" && $post!="" && $content!=""  && $img!="" )
                {
                    $query ="UPDATE testimonials SET name='$name', post='$post', content='$content', img='$img' WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        ?>
                          <meta http-equiv="refresh" content="0; URL=managetestimonial.php?msg=csuccess" />
                            <?php
                        echo "Testimonial is updated successfully.";
                      
                    }
                    else 
                    {
                        echo "Testimonial couldn't updated successfully.";
                    }
                }
            }

           
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Name <span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="name" id="" value="<?php echo $name; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>
                              
                                <div class="form-group">
                                  <label for="">Post<span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="post" id="" value="<?php echo $post; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>

                                <div class="form-group">
                                  <label for="">Content<span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="content" id="" value="<?php echo $content; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Image link<span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="img" id="" value="<?php echo $img; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>

                               
                <!-- /.card-body -->

                     <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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