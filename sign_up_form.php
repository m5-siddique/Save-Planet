<?php include'template/head.php';?> 
  <!-- ======= Header ======= -->
  <!-- ======= Header ======= -->
 <?php include'template/header.php';?> 
 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sign up</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Sign up</li>
          </ol>

	
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	

    <!-- ======= Sign up ======= -->
 

    <section id="Sign Up" class="Sign Up">
      <div class="container">

 
	<div class="row mt-5 justify-content-center" data-aos="fade-up">
	  <div class="col-lg-6">
		<?php if (isset ($_SESSION['message'])) 
			{
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			} 

		?> 
	
	<form action="sign_up_actionpage.php" method="post" role="form">
	  <div class="form-row">
		<div class="col-md-12 form-group">
		  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  />
		  <div class="validate"></div><br>
		</div>
		<div class="col-md-12 form-group">
		  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
		  <div class="validate"></div><br>
		</div>
		<div class="col-md-12 form-group">
		  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password"  />
		  <div class="validate"></div><br>
		</div>		
		<div class="col-md-6 form-group">
		  <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" />
		  <div class="validate"></div><br>
		</div>
		<div class="col-md-6 form-group">
		  <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth"  />
		  <div class="validate"></div><br>
		</div>					
		<div class="col-md-6 form-group">
		  <input type="text" class="form-control" name="city" id="city" placeholder="City"  />
		  <div class="validate"></div><br>
		</div>
		<div class="col-md-6 form-group">
		  <input type="text" class="form-control" name="address" id="address" placeholder="Your Address"  />
		  <div class="validate"></div><br>
		</div>	
		<div class="col-md-6 form-group">
		  <input type="tel" class="form-control" name="postalcode" id="postalcode" placeholder="Your PostCode" />
		  <div class="validate"></div>
		</div>					
	  </div>

	  <div class="text-center"><button  data-toggle="popover" data-placement="top" title="Get Free Air pollution Kit by signing up" type="submit" class="btn btn-success">Sign Up</button></div>
	</form>
          
		  </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include'template/footer.php';?> 
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include'template/script.php';?> 


</body>

</html>