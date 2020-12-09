<?php
if(isset($_POST['submit'])){
	$subject = 'Book an appointment';
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
		<td width="20%">Speciality</td>
		<td width="80%">'.$_POST['speciality'].'</td>
		</tr>
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
		<td width="20%">Message</td>
		<td width="80%">'.$_POST['message'].'</td>
		</tr>
		</tbody>
		</table>
		<body>
		</html>';

	$mail	=	@mail($to, $subject, $message, $headers);
	if($mail==true)
	{
		header("Location: bookappointment.php?st=1");
	}
	else
	{
		header("Location: bookappointment.php?st=2");
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
    <link href="css/nice-select.css" rel="stylesheet">
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
	        					<h3>Book an Appointment</h3>
	        					<div class="line"><img src="images/line.png"></div>
        					</div>
			        	</div>
			        </div>
        		</div>
        		<!--Banner End-->
        		
        		<!--Main Content Wrapper-->
        		<div class="main-content-wrap">
	        		
	        		<!--Content Start-->
	        		<div class="main-content appointment-pg bg-1">
		        		<div class="container">
        					<div class="row">
        						<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        							<?php if(isset($_GET['st']) && $_GET['st'] == 1){?>
		        						<p style="color: green;">Your enquiry has been sent successfully. We will reach you out shortly. </p>
		        					<?php } elseif(isset($_GET['st']) && $_GET['st'] == 1){?>
		        						<p style="color: red;">Error while submit enquiry. Try again later</p>
		        					<?php }?>
				                   <form method="post" class="form-horizontal">
										<div class="form-group row">
											<label class="control-label col-sm-4">Choose Speciality</label>
											<div class="col-sm-8">
												<select name="speciality" class="form-control">
													<option>ENT</option>
													<option>WOMEN'S CARE</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-4">Name</label>
											<div class="col-sm-8">
												<input name="name" class="form-control" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-4">Email</label>
											<div class="col-sm-8">
												<input name="email" class="form-control" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-4">Contact Number</label>
											<div class="col-sm-8">
												<input name="mobile" class="form-control" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-4">Message</label>
											<div class="col-sm-8">
												<textarea name="message" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 offset-sm-4">
												<button name="submit" type="submit" class="btn btn--sm">Submit Now</button>
											</div>
										</div>
									</form>
									<p><strong> Note:</strong> Please note that once you fill and submit the Appointment Request form above, our Digital OP Scheduling Coordinator will contact you by email or phone within 48 hours to find an appointment that best meets your needs. Please note that appointments are not made until confirmed by our Digital OP Scheduling Coordinator..</p>
				                </div>
				                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				                	<img src="images/appointment-img.png" class="img-fluid">
				                </div>
        					</div>
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
    <script src="js/jquery.nice-select.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
