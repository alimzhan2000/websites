<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>QiVita</title>
    <meta name="QiVita" content="company of a new medicine">
	<meta name="Alimzhan Kenesbekov" content="www.qivita.mcdir.ru/index1.php">
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	
</head>

<body class="contact-page">
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
		</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container zerogrid">
				<div class="crumbs">
					<ul>
						<li><a href="index1.php">Main</a></li>
						<li><a href="skoraya.php">Order an ambulance</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div class="row">
						<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Contacts</h1>
                        <img src="images/map.PNG"style="width:1400px;height:500px;"/>
						<br>
						<div class="col-1-3">
							<div class="wrap-col">
                                <p style="font-size: 20px">
Our contacts: <br>
Phone: 8 775 228 3812 <br>
Home: 3334454 <br>
                                </p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 style="margin: 20px 0 20px 30px">If you have a question, write to us!</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="vopros.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Type your name" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="mail" id="email" placeholder="Type your email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="col-full">
													<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Theme" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message"></textarea>
												</div>
											</label>
											<center><input class="sendButton" type="submit" name="submit" value="SEND"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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