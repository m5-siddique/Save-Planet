<?php include'template/head.php';?> 
 <?php include'template/header.php';?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
<?php $breadcrumb ="contact"; include'template/breadcrumb.php';?>
<!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>mesurea@gmail.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+8801556232235<br>+0156665489952</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
		<?php if (isset ($_SESSION['message'])) 
			{
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			} 

		?> 
            <form action="faq.php" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"></textarea>
                <div class="validate"></div>
              </div>

              <div class="text-center"><button class="btn btn-success">Send Message</button></a>
			  </div>
            </form>
          
		  </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include'template/footer.php';?> 


 <?php include'template/script.php';?> 

</body>

</html>