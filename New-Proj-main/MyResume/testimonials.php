<?php require('inc/header.php');?>
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

          <?php
                $query = "SELECT * FROM testimonials";
                $result = mysqli_query($conn,$query);
                $count=0;
                while($data=mysqli_fetch_array($result))
                {
                  $count+=1; //$sn=$sn+1
                  ?>
                <div class="swiper-slide">
           
              <div class="testimonial-item <?php if($count==1) { echo "active"; } ?>">
                <img  src="uploads/<?php echo $data['img']; ?>" class="testimonial-img" alt="">
                <h3><?php echo $data['name']; ?></h3>
                <h4><?php echo $data['post']; ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $data['content'];?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
                    <?php
          }
        ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
 