<?php include 'config.php'?>
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
	        					<h3>Blog</h3>
	        					<div class="line"><img src="images/line.png"></div>
        					</div>
			        	</div>
			        </div>
        		</div>
        		<!--Banner End-->
        		
        		<!--Main Content Wrapper-->
        		<div class="main-content-wrap">
	        		
	        		<!--Content Start-->
	        		<div class="main-content blog-pg bg-1">
		        		<div class="container">
        					<div class="row">
        						<?php $res = get_results('select * from blogs where status = 1 order by id desc');
								foreach ($res as $key => $value) {
								?>
        						<div class="col-lg-12">
		        					<div class="blog-box">
				                        <div class="blog-img">
				                            <figure>
				                                <img src="<?= $value['image'] ? '../anand-admin/api/uploads/'.$value['image'] : 'images/video/videothumb-1.jpg'?>" alt="img" class="img-responsive">
				                            </figure>
				                        </div>
				                        <div class="blog-txt">
				                            <h3><a href="blogdetail.php"><?= $value['title']?></a></h3>
				                            <div class="blog-txt-info">
				                                <p class="bdate"><?= $value['created_on']?></p>
				                            </div>
				                            <p><?= substr($value['content'], 0,100)?></p>
				                            <a href="blogdetail.php?id=<?= $value['id']?>" class="btn btn--sm">Read More</a>
				                        </div>
				                    </div>
        						</div>
        						<?php }?>
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
    <script src="js/script.js"></script>
</body>
</html>
