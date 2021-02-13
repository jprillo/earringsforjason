<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <title>Christmas earrings and ornaments as low as $5.</title>
      <meta name="description" content="Handmade Christmas earrings and ornaments. See what I have before I run out. Earrings for Holidays. ">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="canonical" href="http://earringsforholidays.com">
      <meta property="og:url" content="http://earringsforholidays.com">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Christmas earrings and ornaments as low as $5.">
      <meta property="og:image" content="http://earringsforholidays.com/img/jason-cartoon.png">
      <meta property="og:description" content="Handmade Christmas earrings and ornaments. See what I have before I run out. Earrings for Holidays. ">
      <meta property="og:site_name" content="earringsforholidays.com">
      <meta property="article:author" content="jasonprillo">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@site_account">
      <meta name="twitter:creator" content="@individual_account">
      <meta name="twitter:url" content="http://earringsforholidays.com">
      <meta name="twitter:title" content="Christmas earrings">
      <meta name="twitter:description" content="Handmade Christmas earrings and ornaments. See what I have before I run out. Earrings for Holidays.">
      <meta name="twitter:image" content="http://earringsforholidays.com/img/candy.jpg">
      <!-- <link rel="manifest" href="site.webmanifest"> -->
      <link rel="apple-touch-icon" href="icon.png">
      <!-- Place favicon.ico in the root directory -->
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="stylesheet" href="css/stylemin.css">
	  <meta name="theme-color" content="#000000">
	  
   </head>
   <body>
		<style> label{color: darkgreen; font-weight: 700;}
		
		
		h3{
			color: darkgreen;
		}
		</style>

      <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <header>
         <div class="navagation-wrap col-12" style="position: fixed;">
            <div id="main-nav-wrap">
               <div class="logo-wrap">
                  <a href="/">
                  <img src="img/EarringsforHolidays.png"width="100%" alt="earrings for holidays logo">
                  </a>
               </div>
               <div style="display: flex; ">
                  <div class="responsive-nav">
                     <ul class="nav">
                        <!--
                           <li><a id="active" href="/">HOME</a></li>
                           <li><a href="web-design" class="hack">PROCESS</a></li>
                           <li><a href="blog" class="hack">BLOG</a></li>-->
                        <li><a class="mobile-only" href="contact">Order</a></li>
                     </ul>
                  </div>
                  <div class="responsive-contact">
                     <a class="contact-btn" href="contact">Order Now</a>
                  </div>
               </div>
               <div id="hamburger-wrap">
                  <div class="burger-open">
                     <span class="line line01"></span>
                     <span class="line line02"></span>
                     <span class="line line03"></span>
                  </div>
               </div>
            </div>
         </div>
         <!-- *********************************END Navagation************************** -->
      </header>
<div class="hero-page foot-back" >
    <div >
		<h1>Contact Me</h1>
		<h3 >Email me and I'll get right back to you.<br> First come first serve until I run out.</h3>

		<br><br><br>

		<div class="form-wrap col-6"> 


			<?php if($msg != ''): ?>
	<div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
<?php endif; ?>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">         
  
 

			<fieldset  >						
			<label  for="name">Name <span class="primary-text">*</span></label>
			<input id= "name" placeholder="Your Name"  type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</fieldset>
			
			<fieldset>										
			<label  for="email">Email<span class="primary-text">*</span></label>	
			<input  id="email" placeholder="Email Address" type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</fieldset> 			
		
			<label  for="message">Your Order<span class="primary-text">*</span></label>		
			<fieldset>	
					
			<textarea id="message" name="message" rows="6" placeholder="" value="<?php echo isset($_POST['message']) ? $message : ''; ?>" ></textarea>
			</fieldset>
			
			<fieldset>
			<button class="submit" name="submit" type="submit" id="form-submit" data-submit="...Sending">Submit</button>
			</fieldset>	
				
			
			</form>

		</div>

		
    </div>

  

</div>



<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
        $name = htmlspecialchars($_POST['name']);  
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'sara@earringsforholidays.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
          <h4>Message</h4><p>'.$message.'</p>
        

				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>






<div class="footer ">

   <div class="scrolltotop">
   <a >To Top</a>
</div>
<div class="text-center">
   <p>&#169; 2019 earringsforholidays.com</p>
   <a href="#">SITEMAP</a>/
   <a href="#">PRIVACY POLICY</a>

</div>

</div>


					 
					
				  
		 
		 
		 
		 
		 
		   
		   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		   <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
		   <script src="js/plugins.js"></script>
		   <script src="js/main.js"></script>
		
		 
		 
		   <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
		    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141219963-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141219963-1');
</script>
		 </body>
		 
		 </html>
		 