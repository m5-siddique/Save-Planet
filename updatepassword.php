<?php include'template/head.php';?> 

 <?php include'template/header.php';?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Password</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Update Password</li>
          </ol>

	
        </div>

      </div>
</section><!-- End Breadcrumbs -->


    <!-- ======= Update Password ======= -->
 

    <section id="Update Password" class="Update Password">
      <div class="container">

 
	<div class="row mt-5 justify-content-center" data-aos="fade-up">
	  <div class="col-lg-6">
		<?php if (isset ($_SESSION['message'])) 
			{
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			} 

		?> 
	
	<form action="updatepassaction.php" method="post" role="form">
	  <div class="form-row">

		<div class="col-md-12 form-group">
		  <input type="password" class="form-control" name="password" id="password" placeholder=" Password"/>
		  <div class="validate"></div><br>
		</div>		
		<div class="col-md-6 form-group">
		  <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder=" New Password"/>
		  <div class="validate"></div><br>
		</div>
		<div class="col-md-6 form-group">
		  <input type="password" class="form-control" name="retypepassword" id="retypepassword" placeholder="Retype password"/>
		  <div class="validate"></div><br>
		</div>					

	  </div>

	  <div class="text-center"><button type="submit" class="btn btn-success">Update Password</button></div>
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