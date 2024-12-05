<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $show_query = "SELECT * FROM resume WHERE id=$id"; 
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc();
    $title = $row['title'];
    $date = $row['date'];
    $content=$row['content'];
 
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
                $title = $_POST['title'];
                $date=$_POST['date'];
                $content = $_POST['content'];

                if($title!="" && $date!="" && $content!="" )
                {
                    $query ="UPDATE resume SET title='$title', date='$date', content='$content' WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        ?>
                          <meta http-equiv="refresh" content="0; URL=manageresume.php?msg=csuccess" />
                            <?php
                        echo "Resumeis updated successfully.";
                      
                    }
                    else 
                    {
                        echo "Resume couldn't updated successfully.";
                    }
                }
            }

           
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Resume</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Title<span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="title" id="" value="<?php echo $title; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>
                              
                                <div class="form-group">
                                  <label for=""> Date<span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="date" id="" value="<?php echo $date; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>

                                <div class="form-group">
                                  <label for=""> Content<span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="content" id="" value="<?php echo $content; ?>" aria-describedby="helpId" placeholder="" required>
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