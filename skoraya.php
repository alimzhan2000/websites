<html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>QiVita</title>
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
				<a href="index.html"><img src="images/qiv1.png" style="width:300px; height: 200px"></a>
			</div>
			<div id='cssmenu' >
				<ul>
				   <li class="active"><a href='index1.php'><span>Главная</span></a></li>
				   <li class=' has-sub'><a href='#'><span>Цены</span></a>
					  <ul>
						 <li class='has-sub'><a href='kupitustroistvo.php'><span>Устройства</span></a>
						 </li>
						 <li class='has-sub'><a href='skoraya.php'><span>Скорая</span></a>
						 </li>
					  </ul>
				   </li>
				   <li><a href='kompany.php'><span>О компании</span></a></li>
				   <li><a href='personal.php'><span>наш персонал</span></a></li>
				   <li class='last'><a href='contact.php'><span>Контакты</span></a></li>
				</ul>
			</div>
		</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container zerogrid">
				<div id="main-content">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
                                <p style="font-size: 20px;">
                                Наши контакты:<br>
                                Телефон: 8 775 228 3812<br>
                                Домашний: 3334454<br>
                                </p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 style="margin: 20px 0 20px 30px">Напишите нам и мы Вам перезвоним!</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="sk.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Введите имя" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="name" name="tel" id="name" placeholder="Введите телефон" required="required" />
													</div>
												</div>
											</label>
											<center><input class="sendButton" type="submit" name="submit" value="ПОДПИСАТЬСЯ"></center>
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
							<h3 class="widget-title">О нас</h3>
							<p>Хоть компании и год со дня основания, мы преуспели не только по успешно поставленным диагнозом, но и качественной и быстрой реакции на вызов клиентов. Надеюсь, Вы будете удовлетворены использованием нашей услуги!</p>
							<p></p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Смотрите также</h3>
							<ul>
								<li><a href="kupitustroistvo.php" style="font-size: 20px;">Купить устройство</a></li>
								<li><a href="skoraya.php" style="font-size: 20px;">Заказать скорую</a></li>
								<li><a href="kompany.php" style="font-size: 20px;">О компании</a></li>
								<li><a href="index1.php" style="font-size: 20px;">Главная</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
						</div>
					</div>
					<div class="col-1-4 col-footer-4">
						<div class="wrap-col">
							<h3 class="widget-title">Подписка</h3>
							<p>Не пропускайте новости от нашей компании</p>
							<p>Email address:</p>
							<form action="podpisat.php" method="post">
								<input type="name" name="mail" value="" size="40"style="width:200px; height: 30px; padding:10px; background-color: lightgrey" placeholder="Your Email" />
								<input type="submit" name="submit" value="ПОДПИСАТЬСЯ" class="button button-subcribe" />
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