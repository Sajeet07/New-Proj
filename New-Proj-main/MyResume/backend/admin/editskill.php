<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $show_query = "SELECT * FROM skills WHERE id=$id"; 
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc();
    $title = $row['title'];
    $percent= $row['percent'];
 
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
                $percent = $_POST['percent'];

                if($title!="" && $percent!="")
                {
                    $query ="UPDATE skills SET title='$title', percent='$percent' WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        ?>
                          <meta http-equiv="refresh" content="0; URL=manageskill.php?msg=csuccess" />
                            <?php
                        echo "Skill  Us is updated successfully.";
                      
                    }
                    else 
                    {
                        echo "Skill Us couldn't updated successfully.";
                    }
                }
            }

           
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Skills</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Title <span style="color:red;">*</span></label>
                                  <input type="text"class="form-control" name="title" id="" value="<?php echo $title; ?>" aria-describedby="helpId" placeholder="" required>
                                </div>
                              
                                <div class="form-group">
                                  <label for="">Percent<span style="color:red;">*</span></label>
                                  <input type="number"class="form-control" name="percent" id="" value="<?php echo $percent; ?>" aria-describedby="helpId" placeholder="" required>
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