<!DOCTYPE html>
<html lang="es">
<head>
<title>inicio - Titulo</title>
<link href="stylesheets/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="stylesheets/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="stylesheets/nivo-slider.css" type="text/css" media="screen" />
<link type='text/css' href='stylesheets/osx.css' rel='stylesheet' media='screen' />
<script >
	function comprobarPOST() {

		var verificar=true;

		if(!document.getElementById("usuario").value) {
			alert("El usuario es requerido");
			document.getElementById("usuario").focus();
			verificar=false		
		}	else if (!document.getElementById("nombre").value) {
			alert("El nombre es requerido");
			document.getElementById("nombre").focus();
			verificar=false		
		}	else if (!document.getElementById("password").value) {
			alert("La contrase&ntilde;a es requerida");
			document.getElementById("password").focus();
			verificar=false		
		} 	else if (!document.registrate.sexo_rdo[0].checked && !document.registrate.sexo_rdo[1].checked) {
			alert("El campo sexo es requerido");
			document.registrate.sexo_rdo[0].focus();
			verificar = false
		}
		if (verificar) {
			document.registrate.submit();
		}
	}	

	window.onload = function() {
		document.getElementById("registrarse").onclick = comprobarPOST;

	}
</script>
</head>
<body>
<!-- header -->
<header>
	<!-- logo -->
	<div id="logo">
		<h1>Programacion Variada</h1>
		<span>eslogan</span>
	</div>
	<!-- login box -->
	<div id="login">
		<form action="#" method="post">
			<div id="date">
				<input name="user" type="text" placeholder="Usuario" />
				<input name="clave" type="password" placeholder="clave" />
			</div>
			<div id="boton">
				<input name="entrar" type="submit" value="Entrar" />
			</div>
			<div id="reg"><a href="register.php" class='osx'>Registrarse!</a></div>
		</form>
	</div>
</header>
<!-- modal register -->
<div id="osx-modal-content">
	<div id="osx-modal-title">Registrarse!</div>
	<div class="close"><a href="#" class="simplemodal-close">x</a></div>
	<div id="osx-modal-data">
		<form name="registrate" action="" method="post" enctype="application/x-www-form-urlencoded">
			<span>Usuario: <input type="text" name="usuario_txt" id="usuario" placeholder="usuario"/></span>
			<br/><br/>
			<span>Nombre: <input type="text" name="nombre_txt" id="nombre" placeholder="nombre"/></span>
			<br/><br/>
			<span>Contrase&ntilde;a <input type="password" name="password_txt" id="password" placeholder="Contraseña"/></span>
			<br/><br/>
			<span>Sexo
			<input type="radio" name="sexo_rdo" value="m"/>
			Masculino&nbsp;
			<input type="radio" name="sexo_rdo" value="f"/>
			Femenino
			</span>
			<br/><br/>
			<input type="hidden" name="registrarse_hdn" value="post"/>
			<input type="button" id="registrarse" name="registrarse_btn" value="Registrarse"/>
		</form>
	</div>
</div>
<!-- navegador o menu -->
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
	</ul>
</nav>
<!-- el jodido slider -->
<div class="slider">
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="slider-img/nemo.jpg" data-thumb="slider-img/nemo.jpg" alt="" title="This is an exa dasd asd asd  dad ad as afaf asf mple of a caption" /></a>
            <img src="slider-img/walle.jpg" data-thumb="slider-img/walle.jpg" alt="" data-transition="slideInLeft" />
        </div>
    </div>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
	</script>
</div>
<!-- articulos, noticias, tutoriales -->
<article>
	<!-- el principal -->
	<section id="principar">
		<h2>Lorem ipsum dolor sit amet</h2>
		<div id="content">Lorem ipsum dolor sit amet, materia puella. Ardalio nos filiae suo aperuit pariter necandum loco balbutienti servis rex. Tyri aliquam laetandum prudentia qualia nutrix. Fecit per accipere filia navem causa. Taliarche secretum conpaginari tacitus qui dicens hoc puella ut casus homini interimat potius operabatur ad suis.Lorem ipsum dolor sit amet, at ipsum ait in modo ad quia iuvenis naves rebum scias sit aliquip ipsa hospes. Sibi adsedit in lucem in deinde duas horrido in deinde cupis hominem hortante Suave canere se ad quia ei. Quicquid eam in deinde vero non coepit. Solodorum ait regem consolatus dum autem quod ait regem consolatus dum animae ait est se sed eu fugiens laudo in. Horreo Athenagora eius sed dominum in rei finibus veteres hoc.Lorem ipsum dolor sit amet, num praebeo deum me in rei sensibilium. Zurziaca in deinde plectrum anni ipsa quod non coepit amatrix tolle. Utinam rediit est Apollonius eius non ait in deinde vero cum, stans sed dominum sit in modo genito in rei completo litus ostendam Apollonio! Quicquid eam sed dominum oculos rex Stranguillio in deinde duas recitare. Innocentis sit dolor virgo decubuit rimas in deinde cupis ei primum gaudet de tuae designaverant ut casus.</div>
	</section>
	<!-- los secundarios -->
	<section id="secundario">
		<h2>Lorem ipsum dolor sit amet</h2>
		<div id="content">Lorem ipsum dolor sit amet, materia puella. Ardalio nos filiae suo aperuit pariter necandum loco balbutienti servis rex. Tyri aliquam laetandum prudentia qualia nutrix. Fecit per accipere filia navem causa. Taliarche secretum conpaginari tacitus qui dicens hoc puella ut casus homini interimat potius operabatur ad suis.Lorem ipsum dolor sit amet, at ipsum ait in modo ad quia iuvenis naves rebum scias sit aliquip ipsa hospes. Sibi adsedit in lucem in deinde duas horrido in deinde cupis hominem hortante Suave canere se ad quia ei. Quicquid eam in deinde vero non coepit. Solodorum ait regem consolatus dum autem quod ait regem consolatus dum animae ait est se sed eu fugiens laudo in. Horreo Athenagora</div>
	</section>
	<section id="secundario">
		<h2>Lorem ipsum dolor sit amet</h2>
		<div id="content">Lorem ipsum dolor sit amet, materia puella. Ardalio nos filiae suo aperuit pariter necandum loco balbutienti servis rex. Tyri aliquam laetandum prudentia qualia nutrix. Fecit per accipere filia navem causa. Taliarche secretum conpaginari tacitus qui dicens hoc puella ut casus homini interimat potius operabatur ad suis.Lorem ipsum dolor sit amet, at ipsum ait in modo ad quia iuvenis naves rebum scias sit aliquip ipsa hospes. Sibi adsedit in lucem in deinde duas horrido in deinde cupis hominem hortante Suave canere se ad quia ei. Quicquid eam in deinde vero non coepit. Solodorum ait regem consolatus dum autem quod ait regem consolatus dum animae ait est se sed eu fugiens laudo in. Horreo Athenagora</div>
	</section>
	<!-- terceros -->
	<section id="terceros"><h2>Lorem ipsum dolor sit amet</h2></section>
	<section id="terceros"><h2>Lorem ipsum dolor sit amet</h2></section>
	<section id="terceros"><h2>Lorem ipsum dolor sit amet</h2></section>
	<section id="terceros"><h2>Lorem ipsum dolor sit amet</h2></section>
	<section id="terceros"><h2>Lorem ipsum dolor sit amet</h2></section>	
</article>
<!-- footer -->
<footer>
	<div id="copy">
		<div id="dere">
			&copy; Todos los derechos reservados. Design <a href="http://reizweb.net" target="_blank">by ReizWeb</a>
		</div>
		<menu>
			<h4>Afiliados</h4>
			<li><a href="#">afiliado1</a></li>
			<li><a href="#">afiliado2</a></li>
			<li><a href="#">afiliado3</a></li>
			<li><a href="#">afiliado4</a></li>
		</menu>
		<menu>
			<h4>Menu</h4>
			<li><a href="#">menu1</a></li>
			<li><a href="#">menu2</a></li>
			<li><a href="#">menu3</a></li>
			<li><a href="#">menu4</a></li>
		</menu>
		<menu>
			<h4>Otros</h4>
			<li><a href="#">afiliado1</a></li>
			<li><a href="#">afiliado1</a></li>
			<li><a href="#">afiliado1</a></li>
			<li><a href="#">afiliado1</a></li>
		</menu>
	</div>
</footer>
<!-- Load JavaScript files -->
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/osx.js'></script>
</body>
</html>
	
	