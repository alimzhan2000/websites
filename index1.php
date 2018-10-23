<html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>QiVita</title>
	<meta name="QiVita" content="company of a new medicine">
	<meta name="Alimzhan Kenesbekov" content="www.qivita.mcdir.ru/index1.php">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
    
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
    
    <script>
		// You can also use "$(window).load(function() {"
	$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
</head>

<body class="home-page">
	<div class="wrap-body">
		<header>
			<div class="top-bar">
				<div class="wrap-top zerogrid">
					<div class="row">
						<div class="col-2-3">
							<ul class="list-inline">
								<li class="mail"><span><i class="fa fa-envelope"></i> kenesbekov83@gmail.com</span></li>
								<li class="phone"><span><i class="fa fa-phone"></i>8 775 228 3812</span></li>
							</ul>
						</div>
						<div class="col-1-3">
							<ul class="list-inline top-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-logo">
				<a href="index1.php"><img src="images/qiv1.png" style="width:300px; height: 200px"></a>
			</div>
			<div id='cssmenu' >
				<ul>
				   <li class="active"><a href='index1.php'><span>Main</span></a></li>
				   <li class=' has-sub'><a href='#'><span>Prices</span></a>
					  <ul>
						 <li class='has-sub'><a href='kupitustroistvo.php'><span>Devices</span></a>
						 </li>
						 <li class='has-sub'><a href='skoraya.php'><span>Ambulance</span></a>
						 </li>
					  </ul>
				   </li>
				   <li><a href='kompany.php'><span>About company</span></a></li>
				   <li><a href='personal.php'><span>Personal</span></a></li>
				   <li class='last'><a href='contact.php'><span>Our location</span></a></li>
<!--
                    <li><a href='reg.php'><span>регистрация</span></a></li>
                    <li><a href='aft.php'><span>авторизация</span></a></li>
-->
				</ul>
			</div>
			<div class="slider">
				<!-- Slideshow -->
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
							<img src="images/medd.jpg"style="width:100%;height:505px" alt="">
							<div class="caption" style="background-color: #e9ce16; color: black">
                                <a href="novost1.php"><h1 style="color: black">The main danger of paracetamol</h1></a>
								<span style="color: black">The use of drugs based on paracetamol can lead to a violation of reproductive function and problems with fetal development. Relevant data are published in the journal EBioMedicine.</span>
							</div>
						</li>
						<li>
							<img src="images/zuby1.jpg"style="width:100%;height:505px" alt="">
							<div class="caption" style="background-color: #e9ce16; color: black">
                                <a href="novost2.php"><h1 style="color: black">The stomatologist told what products there are for perfect teeth</h1></a>
								<span>Practicing dentist Lewis Ehrlich from the Sydney Center for Dental Research (Australia) told us what foods he consumed during the day to keep his teeth in perfect condition. This is written by "Ridus"</span>
							</div>
						</li>
						<li>
							<img src="images/alko.jpg"style="width:100%;height:505px" alt="">
							<div class="caption" style="background-color: #e9ce16; color: black">
                                <a href="novost3.php"><h1 style="color: black">Scientists have found a new way to combat alcohol dependence</h1></a>
								<span>Scientists from the Australian University of Queensland have discovered that some antidepressants can reverse the harmful effects of alcohol on brain cells. The results of the study were published on the website of Medicalxpress.</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
				<section class="content-box box-1">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/parac.jpg">
										<h2>The main danger of paracetamol</h2>
										<p>The use of drugs based on paracetamol can lead to a violation of reproductive function and problems with fetal development. Relevant data are published in the journal EBioMedicine.</p>
										<a href="novost1.php">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/parac1.jpeg">
										<h2>The stomatologist told what products there are for perfect teeth</h2>
										<p>Practicing dentist Lewis Ehrlich from the Sydney Center for Dental Research (Australia) told us what foods he consumed during the day to keep his teeth in perfect condition. This is written by "Ridus"</p>
										<a href="novost2.php">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/parac2.jpg">
										<h2>Scientists have found a new way to combat alcohol dependence</h2>
										<p>Scientists from the Australian University of Queensland have discovered that some antidepressants can reverse the harmful effects of alcohol on brain cells. The results of the study were published on the website of Medicalxpress.</p>
										<a href="novost3.php">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box boxstyle-1 box-2"style="width: 100%">
					<div class="zerogrid"style="width: 100%">
						<div class="row wrap-box" style="width: 100%"><!--Start Box-->
							<div class="box-item" style="">
								<blockquote><p>If a person watches for his own health, it is difficult to find a doctor who would know better useful for his health than he does</p></blockquote>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-3-------------------->
				<section class="content-box box-3">
					<div class="ze rogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
									<h2>Our advantages</h2>
									<hr class="line"> 
								</div>
							</div>
							<div class="row">
								<div class="col-1-4">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/feature-icon-1.png" />
											</div>
											<div class="box-item-content">
												<h3>AVAILABILITY OF TRAINING MATERIALS</h3>
												<p>The device has teaching materials and everyone is able to understand how technology works and to install</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/feature-icon-2.png" />
											</div>
											<div class="box-item-content">
												<h3>USE OF THE LATEST TECHNOLOGIES</h3>
												<p>We use only the newest and most advanced technologies in medicine, which opened in the nearest 5 years</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/feature-icon-3.png" />
											</div>
											<div class="box-item-content">
												<h3>CERTIFIED DOCTORS</h3>
												<p>All doctors have doctoral degrees and had work experience in advanced outpatient clinics not only in Kazakhstan, but also in the USA and Korea</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/feature-icon-4.png" />
											</div>
											<div class="box-item-content">
												<h3>RELIABILITY AND QUICKLY</h3>
												<p>The device has all licenses and certifications</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="content-box boxstyle-2 box-4">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
								<h2>Buying devices</h2>
								<hr class="line">
									<div class="intro">View our product</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-6-------------------->
				<section class="content-box box-6">
					<div class="zerogrid" style="width: 100%;">
						<div class="row wrap-box"><!--Start Box-->
							<div class="col-1-2">
								<div class="portfolio-box">
									<img src="images/proto.jpeg"style="height: 121.2%; width:100%" class="img-responsive" alt="">
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="ustroistvo1.php" style="background: lightyellow; margin-top:-110px;font-size: 18px; margin-left: 253px;transform: rotate(-0.6deg)">Buy a basic package<br> (glove + bracelet)</a>
											</div>
											<div class="project-des">
												<p style="background: lightyellow; margin-left:250px; margin-top: 100px">Price: 99 000 tenge</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-2">
								<div class="portfolio-box">
									<img src="images/photoperchatki.JPG" class="img-responsive" alt="" style="height: 121.2%; width:100%">
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="ustroistvo2.php" style="background:lightyellow; margin-left:352px;margin-top: 28.5px;transform: rotate(50deg)">Buy only a glove</a>
											</div>
											<div class="project-des">
												<p style="background:none; margin-left:45px;margin-top: 115px; transform: rotate(53deg)">Price: 69 000 tenge</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">About us</h3>
							<p>Although the company and the year from the day of its foundation, we have succeeded not only in successfully diagnosed, but also in qualitative and rapid response to the call of customers. I hope you will be satisfied with the use of our service!</p>
							<p></p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">See more</h3>
							<ul>
								<li><a href="kupitustroistvo.php" style="font-size: 20px;">Buy device</a></li>
								<li><a href="skoraya.php" style="font-size: 20px;">Order an ambulance</a></li>
								<li><a href="kompany.php" style="font-size: 20px;">About company</a></li>
								<li><a href="index1.php" style="font-size: 20px;">Main</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
						</div>
					</div>
					<div class="col-1-4 col-footer-4">
						<div class="wrap-col">
							<h3 class="widget-title">Subscription</h3>
							<p>Do not miss the news from our company</p>
							<p>Email address:</p>
							<form action="podpisat.php" method="post">
								<input type="name" name="mail" value="" size="40"style="width:200px; height: 30px; padding:10px; background-color: lightgrey" placeholder="Your Email" />
								<input type="submit" name="submit" value="SUBSCRIBE" class="button button-subcribe" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="zerogrid wrapper">
					Copyright @ QiVita - Designed by Alimzhan Kenesbekov
				</div>
			</div>
		</footer>
	</div>
</body>
</html>