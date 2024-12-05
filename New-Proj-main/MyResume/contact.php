
 

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p> <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='location'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>
                <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='email'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>
                <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='call'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?></p>
              </div>

            </div>

          </div>
     
          <?php
              if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email=$_POST['email'];
                $subject= $_POST['subject'];
                $message= $_POST['message'];
              
                
                if($name!="" && $email!="" && $subject!=""  && $message!="" )
                {
                    $query ="INSERT INTO contacts(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
   
                        echo "Your message has been sent. Thank you!";
                     
                        ?>
                        <meta http-equiv="refresh" content="0; URL=index.php?msg=csuccess" />
                          <?php

                    }
                    else 
                    {
                        echo "Contact couldn't added successfully.";
                    }
                }


              }
            ?>
       

<div class="col-lg-8 mt-5 mt-lg-0">
            <form action="#" method="POST" role="form"  enctype="multipart/form-data">
          
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name"   placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn-primary rounded p-2" name="submit" value="submit">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  
  