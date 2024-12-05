
<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content" >

       
          <?php
                $select = "SELECT * FROM skills";
                $result= mysqli_query($conn,$select);
                $sount=0;
                while($data=mysqli_fetch_array($result))
                {
                  if($count%2==0){
                    
                    ?>
                    <div class="col-lg-6"  >
                 <div class="progress" >
                   <span class="skill"><?php echo $data['title'] ?> <i class="val"><?php echo $data['percent']; ?>%</i></span>
                   <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $data['percent']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                 </div>
               <?php
                  }
                 else{

                   ?>
              
                 <div class="progress" >
                   <span class="skill"><?php echo $data['title'] ?> <i class="val"><?php echo $data['percent']; ?>%</i></span>
                   <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $data['percent']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                 </div>
                 </div>
               <?php
                  }
                  $count+=1;
              }
                ?>
               
        </div>

      </div>
    </section><!-- End Skills Section -->
