<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registrate a Progvariada</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Registrate"/>
	<meta name="viewport" content="width=device-width,initial-sacle=1"/>
	<link href="stylesheets/style.css" type="text/css" rel="stylesheet">
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
			<div id="reg"><a href="register.php">Registrarse!</a></div>
		</form>
	</div>
</header>
<!-- navegador o menu -->
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
	</ul>
</nav>
<article>
	<div id="registrate">
		<h1>Registrate</h1>
		<br/>
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
</body>
</html>