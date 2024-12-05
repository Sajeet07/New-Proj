
 <!-- ======= About Section ======= -->
 <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="uploads/<?php 
                     $name_query="SELECT * FROM siteconfig WHERE site_key='aboutimg'";
                         $name_result=mysqli_query($conn,$name_query);
                         $row=$name_result->fetch_assoc();
                        echo $row['site_value'];
                    ?>   " class="img-fluid" alt="" >
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>
            <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='title'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>
</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='birthday'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='website'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='phone'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='city'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

                  </span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='age'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='degree'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

                  </span></li>
                 
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                  <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='freelance'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>
                  </span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    