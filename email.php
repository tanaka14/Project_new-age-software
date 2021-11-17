<!DOCTYPE HTML>
<html>
	<head>
		<title>New Age Software</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link type="text/css" href="assets/css/materialize.min.css" rel="stylesheet">
		<link type="text/css" href="assets/css/public/stlyes.css" rel="stylesheet">
		<link type="text/css" href="assets/css/styles.css" rel="stylesheet">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Header -->
				<header id="header" class="alt">
						<span class="logo rounded"><a href="index.html"><img src="images/logo.png" alt=""  /></a></span>
						<h1>New Age Software</h1>
						<p>African Innovation at Its best
						</p>
					</header>


						<!-- Get Started -->
 <!-- content -->
							<div class="mast grid m-2 p-1 rounded">
								<div class="col-span-1  m-1 p-1 center-align text-white">
								<a><h2 class="text text-2xl font-bold">Get in Touch</h2><br></a> 
								</div> 
								<div class=" card-panel  bg-blue-100 m-2 p-5 rounded-3xl  center-align">
									<form method="post" action="#">
										<div class="field half first">
											<label class=" text text-2xl" for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label class=" text text-2xl" for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label class=" text text-2xl" for="message">Description</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div><br>
										<ul class="actions">
											<li><input type="submit" value="Submit" class="button blue font-bold" /></li>
										</ul>
									</form>
									</div>
									<br>


						   </div>
						   <br>


						   <ul class="actions">
							<li><a href="index.html" class="button center-block" >Home Page</a></li>
						</ul>						
				

				<!-- Footer -->
					<footer id="footer">

						<section>
							<h2>Contact Details</h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd>La 27 &bull; Kwaluseni,Matsapha &bull; Swaziland</dd>
								<dt>Phone</dt>
								<dd>(+268) 76940304/ 79940304</dd>
								<dt>Email</dt>
								<dd>newagesoftware1@gmail.com</dd>
							</dl>
							<ul class="icons">
								<li><a  class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a  class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a  class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a  class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a  class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy;Design by: NAS.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>



<?php

$email_address = "newagesoftware1@gmail.com";
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$message = test_input($_POST['message']);


if (!empty($name) || !empty($email)) {

	       // Email message
        $email_msg = "Name: " . $name . "\nEmail: " . $email ."\nMessage: " . $message ."\n ";
        
        // Use wordwrap() if lines are longer than 70 characters
        $email_msg = wordwrap($email_msg, 70);
                
        // send email with mail(receiver email address, email subject, email message)
        mail($email_address, "[NEW] Website Quote", $email_msg);
        
        echo "Email sent";


    }

    



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
