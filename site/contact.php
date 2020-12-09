<?php
if(isset($_POST['submit'])){
	$subject = $_POST['subject'];
	$to = "ranand@yahoo.com";
				
	$headers = "From:".strip_tags($_POST['name'])."<".$_POST['email']."> \r\n";
	$headers .= "Reply-To:".strip_tags($_POST['email'])."\r\n";
	$headers .= "BCC:  \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';		
		$message .='<table style="background-color:#eeeeee;" border="0" cellpadding="20" cellspacing="0" height="100%" width="100%">
		<tbody>
		<tr>
		<td width="20%">Name</td>
		<td width="80%">'.$_POST['name'].'</td>
		</tr>
		<tr>
		<td width="20%">Email</td>
		<td width="80%">'.$_POST['email'].'</td>
		</tr>
		<tr>
		<td width="20%">Mobile Number</td>
		<td width="80%">'.$_POST['mobile'].'</td>
		</tr>
		<tr>
		<td width="20%">Subject</td>
		<td width="80%">'.$_POST['subject'].'</td>
		</tr>
		<tr>
		<td width="20%">Comments</td>
		<td width="80%">'.$_POST['comments'].'</td>
		</tr>
		</tbody>
		</table>
		<body>
		</html>';

	$mail	=	@mail($to, $subject, $message, $headers);
	if($mail==true)
	{
		header("Location: contact.php?st=1");
	}
	else
	{
		header("Location: contact.php?st=2");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link href="images/favicon.png" rel="shortcut icon" type="image/png">
	<meta name="description" content="A Complete ENT & Women’s Care Hospital. For More details, Email us: ranand@yahoo.com, Call us: 0422 4213163." />
	<meta name="keywords" content="Anand ENT Hospital, ENT Care, Women’s Care, ENT Specialist, Dr. Anand, Dr. Vishnu Priya, Obstetrician, Gynecologist" />
	<title>Anand Hospitals</title>
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/meanmenu.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
    <link rel="stylesheet" href="css/nivo-slider.css" />
    <script src="js/jquery.min.js"></script>
</head>

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
    
		<!--Page Body Wrapper-->
        <div class="container-fluid page-body-wrapper">
        	<?php include 'header.php'?>
        	
        	<!--Main Panel-->
        	<div class="main-panel">
        		
        		<!--Banner Start-->
        		<div class="banner-area">
			        <div class="page-banner">
			        	<div class="container">
			        		<div class="page-title mb-20">
	        					<h3>Contact Us</h3>
	        					<div class="line"><img src="images/line.png"></div>
        					</div>
			        	</div>
			        </div>
        		</div>
        		<!--Banner End-->
        		
        		<!--Main Content Wrapper-->
        		<div class="main-content-wrap">
	        		
	        		<!--Content Start-->
	        		<div class="main-content contact-pg bg-1">
		        		<div class="container">
        					<div class="row">
        						<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
				                   <div class="sec-title mb-20 pt-0">
			        					<h3>Any Queries? Drop Us A Message</h3>
			        					<div class="line"><img src="images/line.png"></div>
		        					</div>
		        					<?php if(isset($_GET['st']) && $_GET['st'] == 1){?>
		        						<p style="color: green;">Your enquiry has been sent successfully. We will reach you out shortly. </p>
		        					<?php } elseif(isset($_GET['st']) && $_GET['st'] == 1){?>
		        						<p style="color: red;">Error while submit enquiry. Try again later</p>
		        					<?php }?>
				                   <form method="post" class="custom-form">
				                    	<div class="form-group row">
											<div class="col-md-6 sm-mb-20">
												<input name="name" type="text" class="form-control" placeholder="Name">
											</div>
											<div class="col-md-6">
												<input name="mobile" type="text" class="form-control" placeholder="Mobile Number">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-6 sm-mb-20">
												<input name="email" type="text" class="form-control" placeholder="Email Address">
											</div>
											<div class="col-md-6">
												<input name="subject" type="text" class="form-control" placeholder="Subject">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<textarea name="comments" class="form-control" placeholder="Comments"></textarea>
											</div>
										</div>
										<div class="form-group">
											<button name="submit" type="submit" class="btn btn--sm">Submit Now</button>
										</div>
				                    </form>
				                </div>
				                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				                   <div class="contact-info-box">
										<ul class="info-items">
											<li>
												<div class="icon-box">
													<div class="inner-box">
														<i class="fa fa-map-marker-alt"></i>
													</div>
												</div>
												<div class="text-box">
													<h5>ANAND HOSPITALS,</h5>
													<p>No 39-42, Sarojini Road, New Sidhapudur Coimbatore, Tamil Nadu, India 641044</p>
												</div>
											</li>
											<li>
												<div class="icon-box">
													<div class="inner-box">
														<i class="fa fa-envelope"></i>
													</div>
												</div>
												<div class="text-box">
													<h5>Mail Us</h5>
													<p><a href="mailto:ranand@yahoo.com">ranand@yahoo.com</a></p>
												</div>
											</li>
											<li>
												<div class="icon-box">
													<div class="inner-box">
														<i class="fa fa-phone fa-flip-horizontal"></i>
													</div>
												</div>
												<div class="text-box">
													<h5>Call Us</h5>
													<p>0422 4213163</p>
												</div>
											</li>
											<li>
												<div class="icon-box">
													<div class="inner-box">
														<i class="fa fa-clock"></i>
													</div>
												</div>
												<div class="text-box">
													<h5>Working Hours</h5>
													<p>Monday - Saturday : 8am - 7pm</p>
													<p>Sunday : Closed </p>
												</div>
											</li>
										</ul>
									</div>
				                </div>
        					</div>
		        		</div>
		        		<div class="map pt-0 pb-0 mt-30">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.2233509846737!2d76.97862359101488!3d11.021862164227556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859aa5539ff89%3A0x4c117452387bdd8e!2sAnand%20ENT%20Hospital!5e0!3m2!1sen!2sin!4v1604034261443!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
	        		</div>
	        		<!--Content End-->
	        		
        		</div>
        		<!--Main Content Wrapper End-->
        		
        		<?php include 'footer.php'?>
        	</div><!--Main Panel-->
        </div><!--Page Body Wrapper-->
        
    </div><!-- Wrapper End -->

    <!-- JS/CSS Files -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-addons.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
