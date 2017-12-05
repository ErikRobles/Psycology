﻿<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="es"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es"> <!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10"/>
	<script type="text/javascript" src="[JS library]"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="selectivizr.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title>Viaje a tu interior</title>
	<script src="js/jquery-3.2.1.mini.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<meta name="description" content="Viaje a tu interior">
  	<meta name="author" content="ErikRobles">
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="js/PIE.js" type="text/javascript"></script>
	<![endif]-->

</head>
<body>
	<div class="navbar">
		<div class="logowrapper">
		<img class="logoImage" src="http://res.cloudinary.com/erikrobles/image/upload/v1510190612/headerLogo_imoe6a.png" style="width: 300px;"  alt="psicoterápia">
	</div><!--End of Logowrapper Div-->
		<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn">MENU</button>
		<div id="myDropdown" class="dropdown-content">
			<ul>
					<li><a href="index.html">Viaje Interior</a></li>
					<li><a href="terapia.html">Terapia</a></li>
					<li><a href="preguntas-frecuentes.html">Preguntas Frecuentes</a></li>
					<li><a href="contacto.html">Contacto</a></li>
			</ul>
			 </div>
		</div>
	</div>
	<img class="headerImage" src="http://res.cloudinary.com/erikrobles/image/upload/v1510190611/clouds_en4flk.jpg" alt="header image of clouds">
		<header>
		</header>
		<div class="container2">
			<div id="main">
		<div class="col-1 col">
			<h2>
			<strong><span>NOS ENCONTRAMOS EN:</span></strong>
			</h2>
			<h4>CONSULTORIO SUR</h4>
			<h5 class="address">Pennsylvania 291, casa 7, Cd de los Deportes, 03710 Ciudad de México, D.F.</h5><br />
			<div class="map"><img src="http://res.cloudinary.com/erikrobles/image/upload/v1510712738/pennsylvania291_akzcf9.jpg" alt="Imágen del mapa del cosultorio ubicada en la calle Pennsylvania 291"></div><br />
			<div class="map-button"><a href="https://www.google.com.mx/maps/place/IMA+Instinto+Maternal+y+Apego/@19.3848337,-99.1787834,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff77ce69e04f:0x562b29beb3086b50!8m2!3d19.3848337!4d-99.1765947?hl=en">Ver Mapa</a></div>
			</div>
		<div class="col-2 col">
			<h2>
			<strong><span>NOS ENCONTRAMOS EN:</span></strong>
			</h2>
			<h4>CONSULTORIO SUR</h4>
			<h5 class="address">ORIENTE 164 #406 COL. MOCTEZUMA 2A SECC CD MEX DELEG. VENUSTIANO CARRANZA C.P.15530 MX</h5><br />
			<div class="map"><img src="http://res.cloudinary.com/erikrobles/image/upload/v1510712734/Moctezuma406_s4od3z.jpg" alt="Imágen del mapa del consultorio ubicada en la colonia Moctezuma"></div><br />
			<div class="map-button"><a href="https://www.google.com.mx/maps/place/Calle+Ote.+164+406,+Moctezuma+2da+Secc,+15530+Ciudad+de+M%C3%A9xico,+CDMX/@19.4387478,-99.0953315,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1fbf900ca893d:0x7c9981bf47f4fe06!8m2!3d19.4387428!4d-99.0931428?hl=en">Ver Mapa</a></div>
			</div>
		<div class="col-3 col">
			<h3>ESTAMOS PARA AYUDARTE</h3>
			<h4>PREVIA CITA</h4>
			<h2>
			<strong><span style="font-size: 20px; font-weight: normal;">CONSULTORIO :  5785 5219</span></strong>
			</h2>
			<h2>
			<strong><span style="font-size: 20px; font-weight: normal; color: #696969;">WHATSAPP :  55 3459 2553</span></strong>
		</h2><br />
		<!--Form Data-->

	<!--New Contact Form -->

	<div class="form">
		<div class="form-body">
  		<form action="mailer.php" method="post">
    		<h3>Contacto Rápido</h3>
    		<h4>¡Contactanos y respondaremos pronto!</h4>
			<div class="form-row">
			<label class="form-label">Nombre: <span class="form-req">*</span></label>
    				<input placeholder="Nombre" type="text" name="name" class="form-value" tabindex="1" required autofocus>
    			</div>
    			<div class="form-row">
			<label class="form-label">Correo electrónico: <span class="form-req">*</span></label>
      				<input placeholder="Tu Correo Electronico" type="email" name="email" email="email" class="form-value" tabindex="2" required>
    			</div>
    			<div class="form-row">
			<label class="form-label">Teléfono: <span class="form-req">*</span></label>
      				<input placeholder="Número Telefónico" type="tel" name="phone" phone="phone" class="form-value" tabindex="3">
    			</div>
    			<div class="form-row">
			<label class="form-label">Asunto: <span class="form-req">*</span></label>
     				 <input placeholder="Asunto" type="text" name="subject" subject="subject"  class="form-value" tabindex="4" required>
    			</div>
    			<div class="form-row">
			<label class="form-label">Mensaje: <span class="form-req">*</span></label>
     				 <textarea placeholder="Tu mensaje aquí...." tabindex="5" name="comments" comments="comments" class="form-value" required></textarea>
    			</div>
    			<div class="form-row">
      				<input type="submit" value="Enviar" class="form-submit" onclick="return true;">
			</div>
 		 </form>
 		</div>
				<!--End of New Contact Form -->
  		</div>
		</div><!--end of columns div-->
	</div>
	</div><!--end of container 2 div-->



	<script src="js/menu.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="js/browser.js"></script>
  <script src="js/iebackground.js"></script>
  <script src="js/helper.js"></script>

	<footer>
		<div id="footer">
			<div class="footer-txt">
				<p><span>Copyright 2016. Psicoterapia, <br>Un viaje a tu Interior.<br />Todos los derechos reservados.</span></p>
			</div>
			<!-- AddToAny BEGIN -->
			<div class="social-buttons">
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
					<a class="a2a_button_linkedin" href="https://www.linkedin.com/in/psic-guillermina-ambriz-laguna-93285b11/"></a>
					<a class="a2a_button_email" href="https://www.addthis.com/tellfriend_v2.php?v=300&winname=addthis&pub=ra-5162fff83017c0e0&source=men-300&lng=es&s=email&url=http%3A%2F%2Fwww.psicoterapiaviajeinterior.com%2Fpsicoterapia.html&title=Psicoterapia%20Viaje%20a%20tu%20Interior&ate=AT-ra-5162fff83017c0e0/-/-/5a065c304dd91f2a/4&uid=5a0121f664bb0bb6&description=Terapia%20psicol%C3%B3gica%2C%20Psic%C3%B3loga%2C%20Atenci%C3%B3n%20psicol%C3%B3gica&ct=1&ui_email_to=&ui_email_from=&ui_email_note=&tt=0&captcha_provider=recaptcha2&pro=0&ats=imp_url%3D1%26smd%3Drsi%253D%2526gen%253D0%2526rsc%253D%2526dr%253D%2526sta%253DAT-ra-5162fff83017c0e0%25252F-%25252F-%25252F5a065c304dd91f2a%25252F1%26hideEmailSharingConfirmation%3Dundefined%26service%3Demail%26media%3Dundefined%26passthrough%3Dundefined%26email_template%3Dundefined%26email_vars%3Dundefined&atc=pubid%3Dra-5162fff83017c0e0%26product%3Dundefined%26widgetId%3Dundefined%26ui_pane%3Demail&rb=false"></a>
					<a class="a2a_button_pinterest"></a><br />
					<img class="design" src="http://res.cloudinary.com/erikrobles/image/upload/v1510372296/Robles-Ramos-Design_ynj5us.png" alt="logo for Robles Ramos Design">
				</div>
			</div>
		<script async src="https://static.addtoany.com/menu/page.js"></script>
		<!-- AddToAny END -->
		</div>
		</footer>
</body>
</html>
