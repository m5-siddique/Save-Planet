<?php include'template/head.php';?>
<?php include'template/header.php';?>

        
		<!-- Profile-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sign Up</h2>
            <h3 class="section-subheading text-muted">
					
<?php if (isset ($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		} 
								
		include'db_con.php';
		$id=$_SESSION['user_id'];
		$sql="select * from users where id='$id'";
		$result_set=$conn->query($sql);
		foreach($result_set as $user){
					$userId=$user['id'];
					$userName=$user['name'];
					$userEmail=$user['email'];
					$userPhone=$user['phone'];
					$userDOB=$user['dob'];
					$userCity=$user['city'];
					$userAddress=$user['address'];
					$userPostalcode=$user['postalcode'];
					
					}
	?></h3>
					
                </div>
<form action="update_profile.php" method="post" role="form>
    <input type="hidden" name="id" value="<?=$userId?> ">
	<div class="form-row">
		<div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?=$userName?> "/>
            <div class="validate"></div><br>
        </div>
        <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?=$userEmail?> "/>
            <div class="validate"></div><br>
        </div>
        <div class="col-md-6 form-group">
             <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" value="password"  />
             <div class="validate"></div><br>
        </div>		
        <div class="col-md-6 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" value="<?=$userPhone?>" />
              <div class="validate"></div><br>
        </div>
        <div class="col-md-6 form-group">
              <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" value="<?=$userDOB?>"/>
              <div class="validate"></div><br>
        </div>					
        <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?=$userCity?>" />
              <div class="validate"></div><br>
        </div>
        <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" value="<?=$userAddress?>" />
              <div class="validate"></div><br>
        </div>	
        <div class="col-md-6 form-group">
               <input type="tel" class="form-control" name="postalcode" id="postalcode" placeholder="Your PostCode" value="<?=$userPostalcode?>"/>
               <div class="validate"></div>
        </div>					
    </div>

        <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
</form>
            
	</div>
      
	  </section>
 
		<!-- Footer-->
<?php include'template/footer.php';?> 
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include'template/script.php';?> 
		</body>
</html>



