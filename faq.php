<?php include'template/head.php';?> 
 <?php include'template/header.php';?> 

<?php
if($_POST){
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['subject']=$_POST['subject'];
$_SESSION['message']=$_POST['message'];
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Pollution Measures</title>
</head>
<body>


<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	

	<div class="cd-faq__items">
		<ul id="basics" class="cd-faq__group">
			<li class="cd-faq__title"><h2>FAQ</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="http://www.airqualityontario.com/press/faq.php#best"><span>Where is the best air quality and lowest incidences of smog in the province?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Summer smog episodes in Ontario are often a part of a regional weather condition that prevails over much of northeastern North America.  Elevated levels of ozone and fine particulate matter are typically due to weather patterns that affect the lower Great Lakes region.  Such weather patterns are invariably associated with slow-moving high pressure cells across the region and result in the long-range transport of smog pollutants from neighbouring U.S. industrial and urbanized states during the flow of warm air from the southwest to the northeast.<p>          </div>
				</div> 
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="https://www.businesstoday.in/pti-feed/discovery-channel-to-air-documentary-series-on-indias-environment-friendly-startups/story/324068.html"><span>Discovery Channel to air documentary series on India's environment-friendly startups</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>New Delhi, Mar 3 (PTI) Discovery Channel is set to air a documentary series called 'Planet Healers' featuring eight of India's environment-friendly startups, who are working towards sustainable development, a statement released by the broadcaster said. The documentary series, which will be in four parts, will be hosted by Bollywood actor Jim Sarbh and is likely to be premiered on March 8 on the channel at 7 pm</p>
          </div>
				</div> 
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="https://www.who.int/health-topics/air-pollution#tab=tab_1"><span>Air Pollution</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Air pollution kills an estimated seven million people worldwide every year. WHO data shows that 9 out of 10 people breathe air containing high levels of pollutants. WHO is working with countries to monitor air pollution and improve air quality. <p></div>
				</div> 
			</li>
		</ul> 


		<ul id="account" class="cd-faq__group">
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="https://support.google.com/accounts/answer/41078?co=GENIE.Platform%3DDesktop&hl=en"><span>How do I change my password?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Follow the steps to recover your account. You'll be asked some questions to confirm it's your account and an email will be sent to you.  If you don’t get an email:
			Check your Spam or Bulk Mail folders.
			Add noreply@google.com to your address book.
			To request another email, follow the steps to recover your account .
			Check all email addresses you might've used to sign up or sign in to your account.
			2. Choose a password that you haven't already used with this account. Learn how to create a strong password.
			<p>
         </div>
				</div> 

		</ul> 
  
	</div><br><br>
	          <div class="text-component" >
            <b><p>Do the above articles are helpful.</p></b>
          </div>

	<a href="contact_action.php"  class="btn btn-primary">Yes</a>
	<a href="contact.php"  class="btn btn-primary">No</a>
  
  <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->


<?php include'template/footer.php';?> 
  <!-- End Footer -->
<?php include'template/script.php';?> 

</body>
</html>