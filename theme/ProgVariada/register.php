<!-- registrarse for responsive -->
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