<?php require('inc/header.php');?>
 <!-- ======= Mobile nav toggle button ======= -->
 <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> 
 
<?php require('inc/sidebar.php');?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>
      <?php 
      $name_query="SELECT * FROM siteconfig WHERE site_key='name'";
      $name_result=mysqli_query($conn,$name_query);
      $row=$name_result->fetch_assoc();
      echo $row['site_value'];
      ?>

      </h1>
      <p>I'm <span class="typed" data-typed-items="Full Stack Developer"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   <?php require('about.php'); ?>
   
    <?php require('skill.php');?>
    
    <?php require('resume.php');?>
    
    <?php require('testimonials.php');?>

    <?php require('contact.php');?>

    

  </main><!-- End #main -->

  <?php require('inc/footerpart.php');?>

 <?php require('inc/footer.php');?>