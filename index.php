<?php
	include 'includes/DB.php';
	// session_start();

	$query = "SELECT * FROM portfolio_alonarozner";

	$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<title>Portfolio website</title>
<meta name="author" content="Amit Bajracharya">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>



<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.css">


<link rel="stylesheet" href="assets/gridloading/css/component.css">
<link rel="stylesheet" href="assets/animate.css">
<link rel="stylesheet" href="style.css">



</head>

<body>
	<!-- header -->
	<div id="top" class="header-bg fullpage">
		<div class="header fullpage">
			<div class="container">
				<div class="absolute-center">
					<div class="row">
						<div class="col-sm-7">
							<h1 class="info animated fadeInDown"><a href="" class="logo"><br><u>Alona
										Rozner</u></a><br>I'm <span><b>software engineering student.</b></span></h1>
							<a href="#works" class="btn scroll animated bounceInUp">My Work</a>
							<a href="#contact" class="btn scroll animated bounceInDown">Contact me</a>
							<a href="#contact" class="btn scroll animated bounceInDown">CV</a>
						</div>
						<div class="col-sm-4 col-sm-offset-1">
							<div class="connect-icon">
								<div class="prof-links clearfix animated bounceInUp"> -->
								</div>

								<!-- <div class="social  clearfix  animated bounceInDown">
						<a href="https://www.facebook.com/alona.rozner/"><img alt="portfolio" src="images/facebook.png" width="32"></a>
						<a href="https://www.instagram.com/alonaroz15/"><img alt="portfolio" src="images/instagram.png"  width="32"></a>
						</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CV -->
	<div class="center">
		<div id="CV" class="portfolio spacer">
			<div class="container">
				<h2>CV</h2>
				<a class="btn scroll animated bounceInUp" href="cv/Alona Rozner.pdf" download>Download File</a>
			</div>
		</div>
	</div>

	<!-- works -->
	<div id="works" class="portfolio spacer">
		<div class="container">
			<h2 class="center">Works</h2>
			<ul class="grid effect-2" id="grid">
			<?php while($row = mysqli_fetch_array($result)) {?>
				<li><img alt="portfolio" src=<?php echo $row["picture"] ?>>
					<div class="overlay animated fadeIn"><span class="animated bounceIn"><a
								href=<?php echo $row["link"] ?> target="_blank"><i class="fa fa-link"></i>
								View project <?php echo $row["p_name"]?></a></span></div>
				</li>
				<?php }?>
				<!-- <li><img alt="portfolio" src="images/grid-image/2.jpg">
					<div class="overlay animated fadeIn"><span class="animated fadeInDown"><a
								href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i>
								View Website</a></span></div>
				</li>
				<li><img alt="portfolio" src="images/grid-image/3.jpg">
					<div class="overlay animated fadeIn"><span class="animated fadeInUp"><a
								href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i>
								View Website</a></span></div>
				</li>
				<li><img alt="portfolio" src="images/grid-image/4.jpg">
					<div class="overlay animated fadeIn"><span class="animated bounceIn"><a
								href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i>
								View Website</a></span></div>
				</li>
				<li><img alt="portfolio" src="images/grid-image/5.jpg">
					<div class="overlay animated fadeIn"><span class="animated fadeInDown"><a
								href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i>
								View Website</a></span></div>
				</li>
				<li><img alt="portfolio" src="images/grid-image/6.jpg">
					<div class="overlay animated fadeIn"><span class="animated bounceIn"><a
								href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i>
								View Website</a></span></div>
				</li> -->
				<!-- <li><img alt="portfolio" src="images/grid-image/7.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/1.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/2.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/6.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/2.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> View Website</a></span></div></li> -->
			</ul>
		</div>

		<!-- works -->




		<!-- testimonials -->
		<!-- <div class="testimonials-bg">
<div class="testimonials center spacer">
	<div class="container">
	<h2>Testimonials</h2>

	<div id="carousel-testimonials" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">	
			<div class="item active animated bounceInRight">
			<span class="animated slideInLeft"><img alt="portfolio" src="images/testimonials/1.jpg" width="100" class="img-circle"></span>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<span>Canada</span>
			</div>
			<div class="item  animated bounceInRight">
			<span class="animated slideInLeft"><img alt="portfolio" src="images/testimonials/1.jpg" width="100" class="img-circle"></span>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<span>Canada</span>
			</div>
			<div class="item  animated bounceInRight">
			<span class="animated slideInLeft"><img alt="portfolio" src="images/testimonials/1.jpg" width="100" class="img-circle"></span>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<span>Canada</span>
			</div>
	</div> -->

		<!-- Controls -->
		<a class="left arrow" href="#carousel-testimonials" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="right arrow" href="#carousel-testimonials" data-slide="next"><i class="fa fa-angle-right"></i></a>
		<!-- Controls -->
	</div>

	</div>
	</div>
	</div>
	<!-- testimonials -->








	</div>


	<!-- contact -->
	<div id="contact" class="footer center spacer">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-3 col-sm-6 contact-form">
					<h3>Contact me</h3>
					<div class="social  clearfix  animated bounceInDown">
						<a href="https://www.facebook.com/alona.rozner/"><img alt="facebook"
								src="images/facebook-logo.png" width="32"></a>
						<a href="https://www.instagram.com/alonaroz15/"><img alt="instagram"
								src="images/instagram-logo.png" width="32"></a>
						<a href="https://web.telegram.org"><img alt="telegram" src="images/telegram-logo.png"
								width="32"></a>
						<a href="https://web.whatsapp.com/"><img alt="whatsapp" src="images/whatsapp-logo.png"
								width="32"></a>
						<!-- <p>I am available for Freelancing work and collaboration.</p> -->
						<!-- <form  >
			<input type="text" name="form_name" class="form-control" placeholder="Name" >
			<input type="email"  name="form_email" class="form-control" placeholder="Email">
			<textarea name="form_message" class="form-control" placeholder="Message" rows="5"></textarea> -->
						<!-- <input type="submit"  name="Submit" class="btn btn-primary btn-lg" value="Hire Me!">
			</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- contact -->


	<a href="#top" class="toTop scroll"><i class="fa fa-angle-up"></i></a>


	<!-- gridloading script -->
	<script src="assets/gridloading/js/modernizr.custom.js"></script>
	<script src="assets/gridloading/js/masonry.pkgd.min.js"></script>
	<script src="assets/gridloading/js/imagesloaded.js"></script>
	<script src="assets/gridloading/js/classie.js"></script>
	<script src="assets/gridloading/js/AnimOnScroll.js"></script>
	<!-- gridloading script -->


	<script src="assets/scripts.js"></script>


</body>

</html>