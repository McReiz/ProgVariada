<!DOCTYPE html>
<html lang="es">
<head>
<title>inicio - Titulo</title>
<link href="theme/ProgVariada/stylesheets/style.css" type="text/css" rel="stylesheet">
<link href="theme/ProgVariada/stylesheets/default/default.css" type="text/css" media="screen" rel="stylesheet" />
<link href="theme/ProgVariada/stylesheets/nivo-slider.css" type="text/css" media="screen" rel="stylesheet" />
<link href='theme/ProgVariada/stylesheets/osx.css' rel='stylesheet' media='screen' type='text/css' />
<!-- Slider scripts -->
<script type="text/javascript" src="theme/ProgVariada/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="theme/ProgVariada/js/jquery.nivo.slider.js"></script>
	
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
		<h1><?php echo $web_name ?></h1>
		<span><?php echo $web_eslogan ?></span>
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
			<div id="reg"><a href="#" class='osx'>Registrarse!</a></div>
		</form>
	</div>
</header>
<!-- modal box register -->
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
<!-- Modal box scripts -->
<script type='text/javascript' src='theme/ProgVariada/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='theme/ProgVariada/js/osx.js'></script>
<!-- navegador o menu -->
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
	</ul>
</nav>