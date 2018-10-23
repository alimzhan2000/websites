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

<body class="archive-page">
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
				<div class="crumbs">
					<ul>
						<li><a href="index1.php">Главная</a></li>
						<li><a href="skoraya.php">Заказать скорую</a></li>
					</ul>
				</div>
				<div id="main-content" class="col-2-3">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<a href="ustroistvo1.php"><h3>Купить базовый пакет устройства:</h3></a>
							</div>
							<div class="art-content">
								<img src="images/proto.jpeg" style="width: 100%; height: 600px;"/>
								<p style="font-size: 50px;margin-top: 20px; margin-bottom: 20px;">Цена: 99 000 тенге</p>
							</div>
							<a class="button button02" href="ustroistvo1.php">Подробнее</a>
						</article>
						<article>
							<div class="art-header">
								<a href="ustroistvo2.php"><h3>Купить только перчатку: </h3></a>
							</div>
							<div class="art-content">
								<img src="images/photoperchatki.JPG" style="width: 100%; height: 600px;"/>
								<p style="font-size: 50px;margin-top: 20px; margin-bottom: 20px;">Цена: 69 000 тенге</p>
							</div>
							<a class="button button02" href="ustroistvo2.php">Подробнее</a>
						</article>
					</div>
				</div>
				<div id="sidebar" class="col-1-3">
					<div class="wrap-sidebar">
						<!---- Start Widget ---->
						<div class="widget wid-about">
							<div class="wid-header">
								<h5>Наши достижения</h5>
							</div>
							<div class="wid-content">
								<img src="images/lic.jpg"/>
								<img src="images/lic1.jpg"/>
                                <img src="images/lic2.jpeg"/>
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