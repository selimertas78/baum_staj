<?php
include_once "database.php";
include_once "functions.php"; ?>
<?php if (isset($_POST['kayit'])) {
      $ad     = $_POST['ad'];
      $soyad  = $_POST['soyad'];
      $kuladi = $_POST['kuladi'];
      $parola = $_POST['parola'] == $_POST['parola-y'] ? $_POST['parola'] : false;
      $email  = $_POST['email'];
      if ($parola) {
        kayitol($kuladi,$ad,$soyad,$parola,$email);
        echo "<b style='color:green;font-size:20px'>Kayıt işlemi başarılı.</b>";
      }
      else {
        echo "<b style='font-size:20px'>Parola aynı değil.</b>";
      }

      }
      elseif(isset($_POST['giris'])) {
        if (girisyap($_POST['kuladi'], $_POST['sifre'])) {
          echo "<b style='font-size:20px'>Giriş yapıldı.</b>";
          header("Location: index.php");

        }
        else {
          echo "<b style='font-size:20px'>Kullanıcı adı veya şifre yanlış.</b>";

        }
      } ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kayıt &amp; Giriş</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Panel Giriş &amp; Kayıt</h1>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Kullanıcı Adı</label>
				                        	<input type="text" name="kuladi" placeholder="Kullanıcı..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Şifre</label>
				                        	<input type="password" name="sifre" placeholder="Şifre..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn" name="giris">Giriş!</button>
				                    </form>
			                    </div>
		                    </div>

		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>

                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">

				                    <form role="form" action="" method="post" class="registration-form">
                              <div class="form-group">
                              <label class="sr-only" for="kuladi">Kullanıcı Adı</label>
                                <input type="text" name="kuladi" placeholder="Kullanıcı Adı..." class="form-first-name form-control" id="form-first-name">
                              </div>

                                <div class="form-group">
				                        	<label class="sr-only" for="parola">Parola</label>
				                        	<input type="password" name="parola" placeholder="Parolanız" class="form-control" id="form-password">
				                        </div>
                                <div class="form-group">
				                        	<label class="sr-only" for="parola-y">Parola Yeniden</label>
				                        	<input type="password" name="parola-y" placeholder="Parolanızı Yeniden Giriniz" class="form-control" id="form-password">
				                        </div>
                                <div class="form-group">
                                <label class="sr-only" for="ad">Adı</label>
                                  <input type="text" name="ad" placeholder="Adınız..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="soyad">Soyadı</label>
                                  <input type="text" name="soyad" placeholder="Soyadınız..." class="form-last-name form-control" id="form-last-name">
                                </div>
                                <div class="form-group">
				                        	<label class="sr-only" for="email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <button type="submit" class="btn" name="kayit">Kayıt Ol</button>
				                    </form>
			                    </div>
                        	</div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">

        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>

        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
