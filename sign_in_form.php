<?php include'template/head.php';?> 
  <!-- ======= Header ======= -->
 <?php include'template/header.php';?> 

 <main id="main">
 <!-- ======= Breadcrumbs ======= --> 



    <!-- =======Sign In Section ======= -->
 

    <section id="Sign In" class="Sign In">
      <div class="container">
		  <div class="d-flex justify-content-between align-items-center">
          <h2>Sign In</h2>
		  <h3 class="section-subheading text-body">
			<?php if(isset($_SESSION['message'])) 
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					} 
			?></h3>
          </div>
		<?php if(isset($_COOKIE['blocked'])){
				      echo "page blocked";
			  } else{

		?>		
       
<div class="row mt-5 justify-content-center" data-aos="fade-up">
<div class="col-lg-6">
    <form action="sign_in_actionpage.php" method="post" role="form" >
      <div class="form-row">

        <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
              <div class="validate"></div>
        </div><br>
         <div class="col-md-6 form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password"/>
            <div class="validate"></div><br>
        </div>		
	 </div>

              <div class="text-center"><button type="submit" class="btn btn-success">Sign In</button></div>
    </form>
               <?php }?>
</div>

</div>

      </div>
    </section><!-- End Sign in Section -->

  </main><!-- End #main -->
  
<?php include'template/footer.php';?> 
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include'template/script.php';?> 

</body>


</html>


