
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" style="margin-left:200px;">
          <h3 class="resume-title" >Education</h3>
        <?php
                $query = "SELECT * FROM resume";
                $result = mysqli_query($conn,$query);
                $count=0;
                while($data=mysqli_fetch_array($result))
                {
                    $count+=1; //$sn=$sn+1
                    ?>
                              <div class="resume-item">
                                  <h4> <?php echo $data['title'];  ?></h4>
                                       <h5><?php echo $data['date']; ?></h5>
                                          <p><?php echo $data['content'];  ?></p>
                                          
                               </div>
           
                    <?php
          }
        ?>


      </div>
    </section><!-- End Resume Section -->
   