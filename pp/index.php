<?php
include './nedmin/connect.php';

$fetch_home = $db->prepare("SELECT * FROM home WHERE home_id=1");
$fetch_home->execute();
$fetch_h = $fetch_home->fetch(PDO::FETCH_ASSOC);

$fetch_contact = $db->prepare("SELECT * FROM contact_info WHERE contact_id=1");
$fetch_contact->execute();
$fetch_c = $fetch_contact->fetch(PDO::FETCH_ASSOC);

$fetch_profile = $db->prepare("SELECT * FROM personal_info WHERE personal_id=1");
$fetch_profile->execute();
$fetch_p = $fetch_profile->fetch(PDO::FETCH_ASSOC);

$fetch_skill = $db->prepare("SELECT * FROM skills WHERE skill_id=1");
$fetch_skill->execute();
$fetch_s = $fetch_skill->fetch(PDO::FETCH_ASSOC);

$fetch_about = $db->prepare("SELECT * FROM about_me WHERE about_id=1");
$fetch_about->execute();
$fetch_a = $fetch_about->fetch(PDO::FETCH_ASSOC);

$fetch_settings = $db->prepare("SELECT * FROM site_settings WHERE settings_id=1");
$fetch_settings->execute();
$fetch_set = $fetch_settings->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $fetch_set['site_title']; ?> </title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="./assets/css/base.css">
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="stylesheet" href="./assets/css/vendor.css">

	<!-- script
   ================================================== -->
	<script src="./assets/js/modernizr.js"></script>
	<script src="./assets/js/pace.min.js"></script>
	<script src="https://kit.fontawesome.com/69b6bd0355.js" crossorigin="anonymous"></script>

	<!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="./assets/favicon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
	<header>
		<div class="top-bar">

			<div class="row">
				<div class="col-two">
					<a class="menu-toggle" href="#"><span>Menu</span></a>

				</div>
				<nav id="main-nav-wrap">

					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll" href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll" href="#about" title="">Hakkımda</a></li>
						<li><a class="smoothscroll" href="#contact" title="">İletişim</a></li>
						<li><a href="styles.html" title="">Style Demo</a></li>
					</ul>
				</nav>
			</div> <!-- /top-bar -->

		</div> <!-- /row -->
	</header> <!-- /header -->

	<!-- intro section
   ================================================== -->
	<section id="intro">

		<div class="intro-overlay"></div>

		<div class="intro-content">
			<div class="row">

				<div class="col-twelve">

					<h5>MERHABA, DÜNYA</h5>
					<h1><?php echo $fetch_set['title']; ?></h1>

					<p class="intro-position">
						<span><?php echo $fetch_set['subtitle']; ?></span>
					</p>

					<a class="button stroke smoothscroll" href="#about" title="">Hakkımda Daha Fazla</a>

				</div>

			</div>
		</div> <!-- /intro-content -->

		<ul class="intro-social">
			<li><a href="<?php echo $fetch_h['facebook'] ?>" target="_blank" title="Facebook"> <i class="fab fa-facebook-square fa-1x"></i>
			<li><a href="<?php echo $fetch_h['instagram'] ?>" target="_blank" title="İnstagram"><i class="fab fa-instagram-square fa-1x"></i>
			<li><a href="<?php echo $fetch_h['twitter'] ?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square fa-1x"></i>
			<li><a href="<?php echo $fetch_h['youtube'] ?>" target="_blank" title="youtube"><i class="fab fa-youtube-square fa-1x"></i>
			<li><a href="<?php echo $fetch_h['linkedin'] ?>" target="_blank" title="linkedin"> <i class="fab fa-linkedin fa-1x"></i>
		</ul> <!-- /intro-social -->

	</section> <!-- /intro -->


	<!-- about section
   ================================================== -->

	<section id="about">
		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Hakkımda</h5>
				<h1><?php echo $fetch_a['about_title'] ?></h1>

				<div class="intro-info"></div>

				<img src="./assets/images/profil.jpeg" style="width: 450px;" alt="Profile Picture">

				<p class="lead"><?php echo $fetch_a['bio'] ?> </p>
			</div>

		</div>
		</div> <!-- /section-intro -->

		<div class="row about-content">

			<div class="col-four tab-full">

				<h3>Profil</h3>

				<ul class="info-list">
					<li>
						<strong>İsim:</strong>
						<span><?php echo $fetch_p['namee'] ?></span>
					</li>
					<li>
						<strong>Doğum Tarihi:</strong>
						<span><?php echo $fetch_p['birthday'] ?></span>
					</li>
					<li>
						<strong>Memleket:</strong>
						<span><?php echo $fetch_p['province'] ?></span>
					</li>
					<li>
						<strong>İş:</strong>
						<span><?php echo $fetch_p['job'] ?></span>
					</li>
					<li>
						<strong>Üniversite:</strong>
						<span><?php echo $fetch_p['uni'] ?></span>
					</li>
					<li>
						<strong>Website:</strong>
						<span><?php echo $fetch_p['web_site'] ?></span>
					</li>


				</ul> <!-- /info-list -->

			</div>

			<div class="col-eight tab-full">
				<h3><?php echo $fetch_s['skill_title'] ?></h3>


				<p> <?php echo $fetch_s['content'] ?> </p>

				<ul class="skill-bars">
					<li>
						<div class="progress percent<?php echo $fetch_s['first_counter'] ?>"><span><?php echo $fetch_s['first_counter'] ?>%</span></div>
						<strong><?php echo $fetch_s['first_skill'] ?> </strong>
					</li>
					<li>
						<div class="progress percent<?php echo $fetch_s['second_counter'] ?>"><span><?php echo $fetch_s['second_counter'] ?>%</span></div>
						<strong><?php echo $fetch_s['second_skill'] ?> </strong>
					</li>
					<li>
						<div class="progress percent<?php echo $fetch_s['third_counter'] ?>"><span><?php echo $fetch_s['third_counter'] ?>%</span></div>
						<strong><?php echo $fetch_s['third_skill'] ?> </strong>
					</li>
					<li>
						<div class="progress percent<?php echo $fetch_s['fourth_counter'] ?>"><span><?php echo $fetch_s['fourth_counter'] ?>%</span></div>
						<strong><?php echo $fetch_s['fourth_skill'] ?> </strong>
					</li>
					<li>

						<div class="progress percent<?php echo $fetch_s['fifth_counter'] ?>"><span><?php echo $fetch_s['fifth_counter'] ?>%</span></div>
						<strong><?php echo $fetch_s['fifth_skill'] ?> </strong>
					</li>

				</ul> <!-- /skill-bars -->

			</div>

		</div>

		<div class="row button-section">
			<div class="col-twelve">
				<a href="#contact" title="İletişime Geç" class="button stroke smoothscroll">İletişime Geç</a>
				<a href="<?php echo $fetch_a['cv'] ?>" title="CV İndir" class="button button-primary">CV İndir</a>
			</div>
		</div>
	</section> <!-- /process-->




	<!-- contact
   ================================================== -->
	<section id="contact">

		<div style="right: -150px;" class="row section-intro">
			<div class="col-twelwe">

				<h5><?php echo $fetch_c['contact_title'] ?></h5>

				<p class="lead">Formu doldurarak bana ulaşabilirsiniz.</p>

			</div>
		</div> <!-- /section-intro -->

		<div class="row contact-form">

			<div class="col-twelve">

				<!-- form -->
				<form name="contactForm" id="contactForm" method="post" action="">
					<fieldset>

						<div class="form-field">
							<input name="contactName" type="text" id="contactName" placeholder="İsim" value="" minlength="1" required="">
						</div>
						<div class="form-field">
							<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
						</div>
						<div class="form-field">
							<input name="contactSubject" type="text" id="contactSubject" placeholder="Konu" value="">
						</div>
						<div class="form-field">
							<textarea name="contactMessage" id="contactMessage" placeholder="Mesaj" rows="10" cols="50" required=""></textarea>
						</div>
						<div class="form-field">
							<button class="submitform">Gönder</button>
							<div id="submit-loader">
								<div class="text-loader">Gönderiliyor...</div>
								<div class="s-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>
						</div>

					</fieldset>
				</form> <!-- Form End -->

				<!-- contact-warning -->
				<div id="message-warning">
				</div>
				<!-- contact-success -->
				<div id="message-success">
					<i class="fa fa-check"></i>Mesajın için teşekkürler!<br>
				</div>

			</div> <!-- /col-twelve -->

		</div> <!-- /contact-form -->

		<div class="row contact-info">

			<div class="col-four tab-full">

				<div class="icon">
					<i class="icon-pin"></i>
				</div>

				<h5>Burada bulabilirsiniz</h5>

				<p>
					<?php echo $fetch_c['locationn'] ?><br>
				</p>

			</div>

			<div class="col-four tab-full collapse">

				<div class="icon">
					<i class="icon-mail"></i>
				</div>

				<h5> Mail atabilirsiniz</h5>


				<a href="mailto:<?php echo $fetch_c['email'] ?>" target="_blank"><?php echo $fetch_c['email'] ?></a>


			</div>

			<div class="col-four tab-full">

				<div class="icon">
					<i class="icon-phone"></i>
				</div>

				<h5>Telefonla ulaşabilirsiniz</h5>


				<a href="tel:<?php echo $fetch_c['gsm'] ?>" target="_blank"><?php echo $fetch_c['gsm'] ?></a>



			</div>

		</div> <!-- /contact-info -->

	</section> <!-- /contact -->


	<!-- footer
   ================================================== -->

	<footer>
		<div class="row">

			<div class="col-six tab-full pull-right social">

				<ul class="footer-social">
					<li><a href="<?php echo $fetch_c['facebook'] ?>" target="_blank" title="Facebook"> <i class="fab fa-facebook-square fa-1x"></i>
					<li><a href="<?php echo $fetch_c['instagram'] ?>" target="_blank" title="İnstagram"><i class="fab fa-instagram-square fa-1x"></i>
					<li><a href="<?php echo $fetch_c['twitter'] ?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square fa-1x"></i>
					<li><a href="<?php echo $fetch_c['youtube'] ?>" target="_blank" title="youtube"><i class="fab fa-youtube-square fa-1x"></i>
					<li><a href="<?php echo $fetch_c['linkedin'] ?>" target="_blank" title="linkedin"> <i class="fab fa-linkedin fa-1x"></i>
				</ul>

			</div>

			<div class="col-six tab-full">
				<div class="copyright">
					<span><?php echo $fetch_c['copyright'] ?></span>

				</div>
			</div>

			<div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
			</div>

		</div> <!-- /row -->
	</footer>

	<div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- Java Script
   ================================================== -->
	<script src="./assets/js/jquery-2.1.3.min.js"></script>
	<script src="./assets/js/plugins.js"></script>
	<script src="./assets/js/main.js"></script>

</body>

</html>