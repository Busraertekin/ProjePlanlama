<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Giriş ve Kayıt</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smooth Sliding Forms template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700" rel="stylesheet"><!--web font-->
<!-- //web font -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<!-- main -->
	<div class="main agileits-w3layouts text-center">
		<div class="container">
		<?php if(isset($_GET['status']) && $_GET['status'] == 'no') { ?> 
			 <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                 <strong>Hata!</strong> Bizimle iletişime geçin.
             </div>
		<?php } elseif(isset($_GET['register']) && $_GET['register']=='hasadmin') { ?>  
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                 <strong>Hata!</strong> Kayıtlı admin mevcut.
             </div>
		<?php } 
		 elseif(isset($_GET['register']) && $_GET['register']=='lowchar') { ?>  
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                 <strong>Hata!</strong> Şifre Minimum 6 Karakter Olabilir.
             </div>
		<?php }
		elseif(isset($_GET['register']) && $_GET['register']=='inequal') { ?>  
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                 <strong>Hata!</strong> Şifreler Farklı.
             </div>
		<?php } ?>

		</div>
		<div class="main-agileinfo"> 
			<div class="agileui-forms">
				<div class="container-form">
					<div class="form-item log-in" ><!-- login form-->
						<div class="w3table agileinfo" id="giris"> 
							<div class="w3table-cell register" > 
								<div class="w3table-tophead">
									<h2>Giriş</h2>
									<form method="POST"action="./process.php">
									<?php if(isset($_GET['status']) && $_GET['status']=='ok') { ?>
									  <div class="alert alert-success alert-dismissible fade in" role="alert">
                                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                           </button>
                                           Hoşgeldin,
										   <strong> <i> <?php echo $user = $_GET['user_name']?></i>!</strong> Başarılı şekilde kayıt oldunuz.
                                        </div>
							        <?php } elseif(@$_GET['login'] == 'no'){ ?>
                                    <div class="alert alert-danger alert-dismissible fade in" role="alert"  >
                                      <strong>Hata!</strong> Girilen bilgiler yanlış.
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                                      </button>
                                    </div>

                                     <?php } elseif(@$_GET['logout'] == 'ok'){ ?>
            
                                     <div class="alert alert-warning alert-dismissible fade in" role="alert" >
                                    <strong>Çıkış yapıldı.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                                    </button>
                                    </div>
                                    <?php } ?> 
								</div>
								<form action="index.php" method="post"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="user_name" required=""> 
											<label>Kullanıcı Adı</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="Password" name="password" required="">
											<label>Şifre</label>
											<span></span>
										</div>
																				
										<input type="submit" name="login"value="Giriş"> 
									</div>
									<div class="social-grids">
										
										<div class="clear"> </div>
									</div>

								</form>  
							</div>
						</div>
					</div>
					<div class="form-item sign-up"><!-- sign-up form-->
						<div class="w3table w3-agileits" id="kayit">
							<div class="w3table-cell register" >   
									<h3>Kayıt Ol</h3>
								<form action="process.php" method="POST">
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="user_name" required=""> 
											<label>İsim</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="email" name="email" required="">
											<label>Email</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="password" name="password" required="">
											<label>Şifre</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="password" name="password2" required="">
											<label>Şifre Tekrarı</label>
											<span></span>
										</div>
										
									</div>
									<input type="submit" name="signup"  value="Kayıt ol">
								</form>

							</div>
						</div>
					</div>
				</div>
				<div class="container-info">
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Hesabın var mı? </p>
								<div class="btn"> Giriş </div>
							</div>
						</div>
					</div>
					<div class="info-w3lsitem">
						    <div class="w3table">
						        <div class="w3table-cell">
								     <?php 

							         $control = @$db->prepare("SELECT * FROM user");
                                     $control ->execute();
                                     $has_admin = $control->rowCount();
                                     if($has_admin == 0) {?>

							              <p> Hala kayıt olmadın mı?</p>
									   
							             <div class="btn">Kayıt</div>
									 <?php } ?>  
						        </div>
					        </div>
					    </div>
					    <div class="clear"> </div>
				    </div> 
				
			</div> 
		</div>	
	</div>   
	<!-- //main -->
	<!-- copyright -->
	<div class="copyw3-agile">
	</div>
	<!-- //copyright --> 
	<!-- js -->  
	<script  src=" js/jquery-1.12.3.min.js"></script> 
	<script>
		$(".info-w3lsitem .btn").click(function() {
			  $(".main-agileinfo").toggleClass("log-in");
			});
			$(".container-form .btn").click(function() {
			  $(".main-agileinfo").addClass("active");
		});
	</script>
	<!-- //js --> 
</body>

<!-- jQuery -->
<script src="./vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>

</html>