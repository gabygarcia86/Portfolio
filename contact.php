<?php
if(isset($_POST['email'])) {
	
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "gabriel.e.garcia@hotmail.com";
	$email_subject = "Website Contact Form";
	
	
	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form your submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['comments'])) {
		died('We are sorry, but there appears to be a problem with the form your submitted.');		
	}
	
	$name = $_POST['name']; // required
	$email_from = $_POST['email']; // required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
	$string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$name)) {
  	$error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Form details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Message: ".clean_string($comments)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  ;}
?>


<!-- Welcome to Gaby Garcia's Portfolio, Thanks for coming by! 
 ________  ________  ________      ___    ___      ________  ________  ________  ________  ___  ________     
|\   ____\|\   __  \|\   __  \    |\  \  /  /|    |\   ____\|\   __  \|\   __  \|\   ____\|\  \|\   __  \    
\ \  \___|\ \  \|\  \ \  \|\ /_   \ \  \/  / /    \ \  \___|\ \  \|\  \ \  \|\  \ \  \___|\ \  \ \  \|\  \   
 \ \  \  __\ \   __  \ \   __  \   \ \    / /      \ \  \  __\ \   __  \ \   _  _\ \  \    \ \  \ \   __  \  
  \ \  \|\  \ \  \ \  \ \  \|\  \   \/   / /        \ \  \|\  \ \  \ \  \ \  \\  \\ \  \____\ \  \ \  \ \  \ 
   \ \_______\ \__\ \__\ \_______\__/   / /          \ \_______\ \__\ \__\ \__\\ _\\ \_______\ \__\ \__\ \__\
    \|_______|\|__|\|__|\|_______|\____/ /            \|_______|\|__|\|__|\|__|\|__|\|_______|\|__|\|__|\|__|
                                 \|____|/                                                                                                                                                                                                                                                                           
-->
<html>
	<head>
		<title>Gaby Garcia | Digital Artist</title>
		<meta name="author" content="Gaby Garcia">
		<meta name="description"
			content="Gaby Garcia | Digital Artist - Video Games - Graphic Design - Web Design - Comic Books">
		<meta name="keywords"
			content="Gaby, Gaby Garcia, Gabriel, video games, graphic design, web, digital art, artist">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link
			href='http://fonts.googleapis.com/css?family=Cherry+Cream+Soda|Aldrich|Volkhov|Boogaloo'
			rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<!--  ------------------ Light Box ------------------  -->
		<!-- Add jQuery library -->
		<script type="text/javascript"
			src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css"
			media="screen" />
		<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			$(".fancybox").fancybox();
			});
		</script>
		<!--  ------------------ Light Box ------------------  -->
	</head>
<body>
    
<!--  ------------------ NAV BAR ------------------  -->
    
    <div id="menu">
     <div id="container">
		 
        <a href="index.html"><img src="images/logo.gif" alt="Gaby Garcia" class="logosmall" style=""></a>
		  
		 <ul class="navbar">
			 
			  <li><a href="portfolio.html">Portfolio</a>
                 <ul> 
					 
				   <li><a href="3DGallery.html">3D</a></li>
				   <li><a href="2DGallery.html">2D</a></li>
                   <li><a href="Websites.html">Web</a></li>
				   <li><a href="GraphicDesign.html">Design</a></li>
					 
				</ul>
             </li>
			
			 <!--  <li><a href="games.html">Games</a>       
			 </li>  -->
			 
			  <li><a href="services.html">Services</a>       
			 </li>
		
			  <li><a href="resume.html">Resume</a> 
			 </li>
			  
			  <li><a href="contact.html"  class="current">Contact</a> 
			 </li>
			  
		  </ul>
		 
		 <div id="navbarright">
			 
		
		<a href="http://3dgaby.deviantart.com/" target="blank" class="icons" ><img src="images/deviantart.gif" alt="Deviant Art" class="icons"></a>
        <a href="http://www.linkedin.com/pub/gabriel-garcia/15/410/a53" target="blank" class="icons"><img src="images/linkedin.gif" alt="Linkedin"class="icons"></a>
		<a href="mailto: gabriel.e.garcia@hotmail.com?" target="_top" class="icons" ><img src="images/email.gif" alt="Email Me" class="icons"></a>
        
			</div>
	 
     </div>
    </div>
    
    
<!-- ------------------ NAV BAR ------------------  -->

	
<!-- ------------------ Content ------------------  -->
		
	<div class="maincontent">
	
		<div id="topspacer"></div>
		
			<center><div class="pagetitle"><h1>Contact Info</h1></div></center>
		
		<div class="spacer"></div>
		
		<div class="contentholder">
		
		<div class="leftcol2">
			
					<center><br>
			<h1 style="margin-bottom: 0px; ">Gaby Garcia</h1>
					</center>
				<p style="font-size: 25px; padding: 25px;">
			Phone: <a href="tel:305-219-2146" style="margin-bottom: 0px; font-size: 25px;">305-219-2146</a><br><br>
			Email: <a href="mailto: gabriel.e.garcia@hotmail.com?" target="_blank" style="margin-bottom: 0px; font-size: 25px;">Gabriel.E.Garcia@hotmail.com</a>
				</p>
			<p style="font-size: 20px; padding-left: 25px;padding-right: 25px;padding-bottom: 25px;">Please feel free to call or text!</p>
			
				
		</div>
			
			<div class="rightcol3">
				
				<center>
				<h2 style="font-size: 30px; margin-top: 20px; padding: 25px; height: 120px;">Thanks for the message!</h2>
					</center>
				
					
			
	
		</div>
		
		</div>
			
	</div>
	
	
	
<!-- ------------------ Content ------------------  -->

	<div class="spacer"></div><div class="push"></div>
	
<!--  ------------------ FOOTER ------------------  -->

            <div id="footer" class="myHeights">
		  <center><p>
			  Gaby Garcia | Digital Artist<br>
			  <a href="mailto: gabriel.e.garcia@hotmail.com?" target="_blank" style="margin-bottom: 0px; font-size: 25px;">Gabriel.E.Garcia@hotmail.com</a><br>
			  
			  </p>
			  </center>
				
            </div> 

<!--  ------------------ FOOTER ------------------  -->
    
</body>
</html>