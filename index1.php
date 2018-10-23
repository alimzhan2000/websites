<html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>QiVita</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
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
                                <a href="novost1.php"><h1 style="color: black">Названа главная опасность парацетамола</h1></a>
								<span style="color: black">Употребление лекарств на основе парацетамола может привести к нарушению репродуктивной функции и проблемам с развитием плода. Соответствующие данные опубликованы в журнале EBioMedicine.</span>
							</div>
						</li>
						<li>
							<img src="images/zuby1.jpg"style="width:100%;height:505px" alt="">
							<div class="caption" style="background-color: #e9ce16; color: black">
                                <a href="novost2.php"><h1 style="color: black">Cтоматолог рассказал, какие продукты есть для идеальных зубов</h1></a>
								<span>Практикующий стоматолог Льюис Эрлих из Центра стоматологических исследований Сиднея (Австралия) рассказал, какие продукты употребляет в течение дня, чтобы сохранять свои зубы в идеальном состоянии. Об этом пишет "Ридус".</span>
							</div>
						</li>
						<li>
							<img src="images/alko.jpg"style="width:100%;height:505px" alt="">
							<div class="caption" style="background-color: #e9ce16; color: black">
                                <a href="novost3.php"><h1 style="color: black">Ученые нашли новый способ борьбы с алкогольной зависимостью</h1></a>
								<span>Ученые из австралийского Университета Квинсленда обнаружили, что некоторые антидепрессанты могут обратить вредное воздействие алкоголя на клетки головного мозга. Результаты исследования опубликовали на сайте Medicalxpress.</span>
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
										<h2>Названа главная опасность парацетамола</h2>
										<p>Употребление лекарств на основе парацетамола может привести к нарушению репродуктивной функции и проблемам с развитием плода. Соответствующие данные опубликованы в журнале EBioMedicine.</p>
										<a href="novost1.php">Читать далее</a>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/parac1.jpeg">
										<h2>Cтоматолог рассказал, какие продукты есть для идеальных зубов</h2>
										<p>Практикующий стоматолог Льюис Эрлих из Центра стоматологических исследований Сиднея (Австралия) рассказал, какие продукты употребляет в течение дня, чтобы сохранять свои зубы в идеальном состоянии. Об этом пишет "Ридус".</p>
										<a href="novost2.php">Читать далее</a>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/parac2.jpg">
										<h2>Ученые нашли новый способ борьбы с алкогольной зависимостью</h2>
										<p>Ученые из австралийского Университета Квинсленда обнаружили, что некоторые антидепрессанты могут обратить вредное воздействие алкоголя на клетки головного мозга. Результаты исследования опубликовали на сайте Medicalxpress.</p>
										<a href="novost3.php">Читать далее</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box boxstyle-1 box-2">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="box-item">
								<blockquote><p>Если человек сам следит за своим здоровьем, то трудно найти врача, который знал бы лучше полезное для его здоровья, чем он сам.</p></blockquote>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-3-------------------->
				<section class="content-box box-3">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
									<h2>Наши преимущества</h2>
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
												<h3>НАЛИЧИЕ УЧЕБНЫХ МАТЕРИАЛОВ</h3>
												<p>Устройство имеет учебные материалы и каждый человек способен понять как работает технология и установить у себя</p>
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
												<h3>ИСПОЛЬЗОВАНИЕ НОВЕЙШИХ ТЕХНОЛОГИЙ</h3>
												<p>Мы используем только самые новые и передовые технологии в медицине, которые открылись в ближайшее 5-летие</p>
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
												<h3>СЕРТИФИЦИРОВАННЫЕ ВРАЧИ</h3>
												<p>Все врачи имеют докторские степени и имели опыт работы в передовых поликлиниках не только в Казахстане, но и в США и Кореи</p>
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
												<h3>НАДЕЖНОСТЬ И БЫСТРОТА</h3>
												<p>Устройство имеет все лицензии и сертификации </p>
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
								<h2>Покупка устройств</h2>
								<hr class="line">
									<div class="intro">Ознакомьтесь с нашим продуктом</div>
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
												<a href="ustroistvo1.php" style="background: none; margin-top:-80px;font-size: 18px; margin-left: 253px;margin-bottom: 95px;transform: rotate(-0.6deg)">Купить базовый пакет<br> (перчатка + браслет)</a>
											</div>
											<div class="project-des">
												<p style="background: lightyellow; margin-left:330px; margin-top: 100px">Цена: 99 000 тенге</p>
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
												<a href="ustroistvo2.php" style="background: none; margin-left:320px;margin-top: 68px;transform: rotate(50.5deg)">Купить только перчатку</a>
											</div>
											<div class="project-des">
												<p style="background:lightyellow; margin-left:45px;margin-top: 115px; transform: rotate(53deg)">Цена: 69 000 тенге</p>
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
								<li><a href="archive.php" style="font-size: 20px;">О компании</a></li>
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