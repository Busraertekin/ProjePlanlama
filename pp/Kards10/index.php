<?php
include '../nedmin/connect.php';

$sorgu = $db->prepare("SELECT*FROM site_settings ");
$sorgu->execute();

$bilgiyi_cek=$sorgu->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo $bilgiyi_cek['site_title']; ?> </title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<script src="https://kit.fontawesome.com/69b6bd0355.js" crossorigin="anonymous"></script> 

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="top-bar">

   		<div class="row"> 
			<div class="col-two">
   			 <a class="menu-toggle"  href="#"><span>Menu</span></a>

		    </div>		      
			    <nav  id="main-nav-wrap">

					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">Hakkımda</a></li>
						<li><a class="smoothscroll"  href="#contact" title="">İletişim</a></li>	
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
	   			<h1>Büşra Ertekin</h1>

	   			<p class="intro-position">
	   				<span>Bilgisayar Mühendisliği Öğrencisi</span>
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">Hakkımda Daha Fazla</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="#"><i class="fab fa-facebook-square fa-1x"></i>
         <li><a href="#"><i class="fab fa-instagram-square fa-1x"></i>
         <li><a href="#"><i class="fab fa-twitter-square fa-1x"></i>
         <li><a href="#"><i class="fab fa-youtube-square fa-1x"></i>
         <li><a href="#"> <i class="fab fa-linkedin fa-1x"></i>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Hakkımda</h5>
   			<h1>Beni tanıyın</h1>

   			<div class="intro-info"></div>
				

   				<img src="images/profil.jpeg" style="width: 450px;" alt="Profile Picture">

   				<p class="lead">Merhaba, İnönü Üniversitesi bilgisayar mühendisliği bölümünde okuyorum. Tekil faaliyetlerden hoşlandığım için karantinadan keyif alanlardanım. Pandemide oldukça fazla vakit ayırdığım hobiler dikiş, kanaviçe, amigurumi. Çat pat gitar, orta derecede yan flüt çalıyorum. 2 minnoş hamsterım var. Oldukça hayvanseverim ama annem evde köpek beslememe izin vermiyor. </p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-four tab-full">

   			<h3>Profil</h3>

   			<ul class="info-list">
   				<li>
   					<strong>İsim:</strong>
   					<span>Büşra ERTEKİN</span>
   				</li>
   				<li>
   					<strong>Doğum Tarihi:</strong>
   					<span>31 Ocak 1999</span>
				</li>
				<li>
				    <strong>Memleket:</strong>
					<span>Konya</span>
   				</li>
   				<li>
   					<strong>İş:</strong>
   					<span>Öğrenci</span>
   				</li>
				   <li>
					<strong>Üniversite:</strong>
					<span>İnönü Ü.</span>
				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.kardswebsite.com</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>02200201042@ogr.inonu.edu.tr</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-eight tab-full">  
   			<h3>Yetenekler</h3> 


   			    <p>Öğrenci olduğum için teknik bilgi gerektiren yeteneklerim henüz gelişmemiştir. Göz dolduran davranışsal yetenek oranlarım sayesinde kısa sürede teknik yeteneklerim bölümünü de açabileceğime inanıyorum. </p>

				<ul class="skill-bars"> 
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>Duygu Yönetimi</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>Sabır</strong>
				   </li>
				   <li>
				   	<div class="progress percent100"><span>100%</span></div>
				   	<strong>İtaat</strong>
				   </li>
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>Geri Bildirim</strong>
				   </li>
				   <li>

				   	<div class="progress percent75"><span>75%</span></div>
				   	<strong>İrade</strong>
				   </li>
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="İletişime Geç" class="button stroke smoothscroll">İletişime Geç</a>
   			<a href="#" title="CV İndir" class="button button-primary">CV İndir</a>
   		</div>   		
   	</div>
   </section> <!-- /process-->    



	            <!-- modal popups - begin
	            ============================================================= -->


	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div style="right: -150px;"  class="row section-intro">
   		<div class="col-twelwe">

   			<h5>İLETİŞİM</h5>

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
            Batman Merkez/Türkiye<br>
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5> Mail atabilirsiniz</h5>

   		
			<a href="mailto:02200201042@ogr.inonu.edu.tr" target="_blank">02200201042@ogr.inonu.edu.tr</a>
		
			 
   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Telefonla ulaşabilirsiniz</h5>

   		
				<a href="tel:+905533622634" target="_blank">+905533622634</a>

			   

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
					<li><a href="#"><i class="fab fa-facebook-square fa-1x"></i>
					<li><a href="#"><i class="fab fa-instagram-square fa-1x"></i>
					<li><a href="#"><i class="fab fa-twitter-square fa-1x"></i>
					<li><a href="#"><i class="fab fa-youtube-square fa-1x"></i>
					<li><a href="#"> <i class="fab fa-linkedin fa-1x"></i>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>©Kards Mart/2021.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
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
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>