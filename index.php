<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Respuesta</title>
	<link rel="icon" href="favicon.ico" type="img/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="css/style2.css" rel="stylesheet" type="text/css">

	<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script src="contactform/contactform.js"></script>

	<!-- =======================================================
	Theme Name: Knight
	Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
	Author: BootstrapMade
	Author URL: https://bootstrapmade.com
	======================================================= -->

</head>
<body>
	<?php
	@$ApiKey = "sdB7oY5795N36xb4qI8awp6Dlv";
	@$merchant_id = $_REQUEST['merchantId'];
	@$referenceCode = $_REQUEST['referenceCode'];
	@$TX_VALUE = $_REQUEST['TX_VALUE'];
	@$New_value = number_format($TX_VALUE, 1, '.', '');
	@$currency = $_REQUEST['currency'];
	@$transactionState = $_REQUEST['transactionState'];
	@$firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
	@$firmacreada = md5($firma_cadena);
	@$firma = $_REQUEST['signature'];

	@$reference_pol = $_REQUEST['reference_pol'];
	@$cus = $_REQUEST['cus'];
	@$extra1 = $_REQUEST['description'];
	@$pseBank = $_REQUEST['pseBank'];
	@$lapPaymentMethod = $_REQUEST['lapPaymentMethod'];
	@$transactionId = $_REQUEST['transactionId'];

	if (@$_REQUEST['transactionState'] == 4 ) {
		$estadoTx = "Transaccion aprobada";
	}
	else if (@$_REQUEST['transactionState'] == 6 ) {
		$estadoTx = "Transaccion rechazada";
	}
	else if (@$_REQUEST['transactionState'] == 104 ) {
		$estadoTx = "Error";
	}
	else if (@$_REQUEST['transactionState'] == 7 ) {
		$estadoTx = "Transaccion pendiente";
	}
	else {
		@$estadoTx=$_REQUEST['mensaje'];
	}
	?>
	<header class="header" id="header"><!--header-start-->
		<div class="container">
			<figure class="logo2 animated fadeInDown delay-07s">
				<a href="#"><img src="img/logohouse.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Gracias por tu compra</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>Bienvenido a Quick Inn</li>
			</ul>
			<a class="link2 animated fadeInUp delay-1s servicelink" href="#service">Mas detalles</a>
		</div>
	</header><!--header-end-->

	<nav class="main-nav-outer" id="test"><!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#service">Detalles de compra</a></li>
				<li><a href="#contact">Contactanos</a></li>
				<li class="small-logo"><a href="#header"><img src="img/small-logo-quick.png" alt=""></a></li>
				<li><a href="#acelerador">Haste acelerador Gratis</a></li>
				<li><a href="#vendedor">Publica Gratis</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav><!--main-nav-end-->

	<section class="main-section alabaster" id="service"><!--main-section alabaster-start-->
		<div class="container">
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img  src="img/iphone.png" alt="">
				</figure>
				<div class="col-lg-7 col-sm-8 featured-work">
					<h2>Detalles de tu Compra</h2>
					<?php
					if (@strtoupper($firma) == @strtoupper($firmacreada)) {
						?>
						<P class="padding-b">Resumen de tu compra</P>
						<div class=" col-xs-12 featured-box">
							<div class="featured-box-col1 col-xs-3  wow fadeInRight delay-02s">
								<i class="fa-pencil-square-o"></i>
							</div>
							<div class="col-xs-3 wow fadeInRight delay-02s">
								<p><h3>Referencia de venta</h3>
									<?php echo $reference_pol; ?></p>
								</div>
								<div class="featured-box-col1 col-xs-3 wow fadeInRight delay-02s">
									<i class="fa-credit-card"></i>
								</div>
								<div class="col-xs-3 wow fadeInRight delay-02s">
									<p><h3>transaccion</h3>
										<?php echo $referenceCode; ?></p>
									</div>
								</div>
								<div class=" col-xs-12 featured-box">
									<div class="featured-box-col1 col-xs-3  wow fadeInRight delay-02s">
										<i class="fa-usd"></i>
									</div>
									<div class="col-xs-3 wow fadeInRight delay-02s">
										<p><h3>Valor total:</h3>
											$<?php echo number_format($TX_VALUE); ?> <?php echo $currency; ?></p>
										</div>
										<div class="featured-box-col1 col-xs-3 wow fadeInRight delay-02s">
											<i class="fa-cubes"></i>
										</div>
										<div class="col-xs-3 wow fadeInRight delay-02s">
											<p><h3>Entidad:</h3>
												<?php echo ($lapPaymentMethod); ?></p>
											</div>
										</div>
										<div class=" col-xs-12 featured-box">
											<div class="featured-box-col1 col-xs-4  wow fadeInRight delay-02s">
												<i class="fa-cog"></i>
											</div>
											<div class="col-xs-4 wow fadeInRight delay-02s">
												<p><h3>Estado:</h3>
													<?php echo $estadoTx; ?></p>
												</div>

											</div>

											<?php
										}
										else
										{
											?>
											<P class="padding-b">Porfavor, Comunicate con soporte para mas detellas de tu compra</P>
											<div class="featured-box">
												<div class="featured-box-col1 wow fadeInRight delay-06s">
													<i class="fa-exclamation-triangle"></i>
												</div>
												<div class="featured-box-col2 wow fadeInRight delay-06s">
													<h3>Error</h3>
													<p>Algo ocurrio con los detalles de tu compra comunicate con nostros <a href="#contact">aqui</a> </p>
												</div>
											</div>
											<?php
										}
										?>
										<a class="Learn-More" href="#">Learn More</a>
									</div>
								</div>
							</div>
						</section>
						<section class="main-section alabaster" id="acelerador"><!--main-section alabaster-start-->
							<div class="container">
								<div class="row">
									<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
										<img  src="img/posh1.png" alt="">
									</figure>
									<div class="col-lg-7 col-sm-8 featured-work">
										<h2>Prueba ser Acelerador</h2>
										<P class="padding-b"></P>
										<div class="featured-box">
											<div class="featured-box-col1 wow fadeInRight delay-06s">
												<i class="fa-space-shuttle" ></i>
											</div>
											<div class="featured-box-col2 wow fadeInRight delay-06s">
												<h3>Acelerador</h3>
												<p>Si lo que buscas es ganar dinero, estas en el sitio indicado...
													Sin horarios, sin jefes y sin descuentos... Las metas son tuyas  <a target="_blanck" href="http://acelerador.quickinmobiliario.co/">QUICK EL PLACER DE GANAR DINERO</a> </p>
												</div>
											</div>
											<a class="Learn-More" href="#">Learn More</a>
										</div>
									</div>
								</div>
							</section>

							<section class="main-section alabaster" id="vendedor"><!--main-section alabaster-start-->
								<div class="container">
									<div class="row">
										<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
											<img  src="img/posh2.png" alt="">
										</figure>
										<div class="col-lg-7 col-sm-8 featured-work">
											<h2>Publica gratis tu primer inmueble</h2>

											<P class="padding-b"></P>
											<div class="featured-box">
												<div class="featured-box-col1 wow fadeInRight delay-06s">
													<i class="fa-bolt" ></i>
												</div>
												<div class="featured-box-col2 wow fadeInRight delay-06s">
													<h3>Fácil y rápido</h3>
													<p>La nueva forma de que tu inmueble llegue a más compradores y se venda en menos tiempo.
  												<a target="_blanck" href="http://vendedor.quickinmobiliario.co/">Publica</a> </p>
													</div>
												</div>

												<a class="Learn-More" href="#">Learn More</a>
											</div>
										</div>
									</div>
								</section>
								<div class="container">
									<section class="main-section contact" id="contact">
										<div class="row">
											<div class="col-lg-6 col-sm-7 wow fadeInLeft">
												<div class="contact-info-box address clearfix">
													<h3><i class=" icon-map-marker"></i>Direccion:</h3>
													<span>Calle 94a # 11a - 27<br>Chico Norte</span>
												</div>
												<div class="contact-info-box phone clearfix">
													<h3><i class="fa-phone"></i>Telefono:</h3>
													<span>(+57) 322 760 77 88</span>
												</div>
												<div class="contact-info-box email clearfix">
													<h3><i class="fa-pencil"></i>email:</h3>
													<span>info@quickinmobiliario.com</span>
												</div>

												<ul class="social-link">
													<li class="twitter"><a target="_blanck" href="https://twitter.com/QuickInmo"><i class="fa-twitter"></i></a></li>
													<li class="facebook"><a target="_blanck" href="https://www.facebook.com/QuickInmobiliario/"><i class="fa-facebook"></i></a></li>
													<li class="dribbble"><a target="_blanck" href="https://www.instagram.com/quickinnmobiliario/"><i class="fa-instagram"></i></a></li>
													<li class="pinterest"><a target="_blanck" href="https://www.youtube.com/channel/UC1RPH1tJZxYrD4vVvE5Am4A"><i class="fa-youtube"></i></a></li>

												</ul>
											</div>

											<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
												<figure class=" wow fadeInLeft">
													<img  src="img/posh3.png" alt="">
												</figure>
											</div>
										</div>
									</section>
								</div>
								<footer class="footer">
									<div class="container">
										<div class="footer-logo"><a href="#"><img src="img/small-logo-quick.png" alt=""></a></div>
										<span class="copyright">&copy; Quick Inn</span>
										<div class="credits">

										<a target="_blanck" href="https://quickinmobiliario.com/">quickinmobiliario.com</a>
									</div>
								</div>
							</footer>


							<script type="text/javascript">
							$(document).ready(function(e) {
								$('#test').scrollToFixed();
								$('.res-nav_click').click(function(){
									$('.main-nav').slideToggle();
									return false

								});

							});
							</script>

							<script>
							wow = new WOW(
								{
									animateClass: 'animated',
									offset:       100
								}
							);
							wow.init();
							</script>


							<script type="text/javascript">
							$(window).load(function(){

								$('.main-nav li a, .servicelink').bind('click',function(event){
									var $anchor = $(this);

									$('html, body').stop().animate({
										scrollTop: $($anchor.attr('href')).offset().top - 102
									}, 1500,'easeInOutExpo');
									/*
									if you don't want to use the easing effects:
									$('html, body').stop().animate({
									scrollTop: $($anchor.attr('href')).offset().top
								}, 1000);
								*/
								if ($(window).width() < 768 ) {
									$('.main-nav').hide();
								}
								event.preventDefault();
							});
						})
						</script>

						<script type="text/javascript">

						$(window).load(function(){


							var $container = $('.portfolioContainer'),
							$body = $('body'),
							colW = 375,
							columns = null;


							$container.isotope({
								// disable window resizing
								resizable: true,
								masonry: {
									columnWidth: colW
								}
							});

							$(window).smartresize(function(){
								// check if columns has changed
								var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
								if ( currentColumns !== columns ) {
									// set new column count
									columns = currentColumns;
									// apply width to container manually, then trigger relayout
									$container.width( columns * colW )
									.isotope('reLayout');
								}

							}).smartresize(); // trigger resize to set container width
							$('.portfolioFilter a').click(function(){
								$('.portfolioFilter .current').removeClass('current');
								$(this).addClass('current');

								var selector = $(this).attr('data-filter');
								$container.isotope({

									filter: selector,
								});
								return false;
							});

						});

						</script>

					</body>
					</html>
