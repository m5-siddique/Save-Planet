 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php"><span>Pollution</span>&nbsp Measures</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
		<?php include'template/location.php'?>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="about.php">About</a>
          <ul><li><a href="about.php">About Us</a></li></li></ul>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="faq.php">FAQ</a></li>
		  <li class="drop-down"><a href="sign_up_form.php" title="Get Free Air pollution Kit by signing up" >Sign Up</a>
            <ul>
          </li>
		  <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){?> 
				<li><a href="sign_out.php">Sign Out</a></li>
			</ul>
				<li class="drop-down"><a href="updatepassword.php">Update Password</a>
				<li><a href="profile.php"><?= $_SESSION['user_name'] ?></a></li>
          <?php } else{?>
				<li><a href="sign_in_form.php">Sign In</a></li>
		  <?php } ?> 	
        </ul>
		
	  </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://twitter.com/InsideNatGeo/" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/InsideNatGeo/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/insidenatgeo/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/insidenatgeo/" class="youtube"><i class="icofont-youtube"></i></a>
        <a href="rss_reader.php"><img src="https://feed.surfing-waves.com/images/rss-icon.png" alt="rss icon" width="14" height="14"></a>
		
      </div>

    </div>
  </header><!-- End Header -->
