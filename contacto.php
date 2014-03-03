<!doctype html>
<?php $m=7; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/prefixfree.min.js"></script>
<script src="js/validaForm.js"></script>
<title>Contacto - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
<script>
	document.createElement('article');
	document.createElement('aside');
	document.createElement('figure');
	document.createElement('footer');
	document.createElement('header');
	document.createElement('hgroup');
	document.createElement('nav');
	document.createElement('section');
</script>

<!--[if IE ]><script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
var IE7_PNG_SUFFIX = ".png";
</script>
<style type="text/css">
.catalogo{visibility:hidden;
#catalogo01{visibility:show  !important;}
}
</style>
<![endif]-->

<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
</head>
<body>
	<div id="contenedorE">
		<div id="contenedor">
			<?php  require_once(".menu.php") ?>
			<article id="contenido">
			<?php if (!$_POST){ ?>
				<form id="contacto" method="post" onsubmit="return validate1(this)">
					<fieldset>
				
					<article id="c_izq">
						<article class="fondoE">
							<section id="contactoCheck">
								<span>Permítenos conocer tus sugerencias, dudas e inquietudes sobre nuestros productos y servicios.</span><br>
								<p>l&iacute;nea que m&aacute;s te interese</p>
								<label><input type="checkbox" name="checkbox" id="checkbox"> Accesorios para gabinete</label>
								<label><input type="checkbox" name="checkbox2" id="checkbox2"> Correderas</label>
								<label><input type="checkbox" name="checkbox3" id="checkbox3"> Jaladeras y botones</label>
								<label><input type="checkbox" name="checkbox4" id="checkbox4"> Tornillos y conectores</label>
								<label><input type="checkbox" name="checkbox5" id="checkbox5"> Bisagras</label>
								<label><input type="checkbox" name="checkbox6" id="checkbox6"> Arquitectura</label>
								<label><input type="checkbox" name="checkbox7" id="checkbox7"> Iluminaci&oacute;n</label>
								<label><input type="checkbox" name="checkbox8" id="checkbox8"> Chapas y cerraduras</label>
								<label><input type="checkbox" name="checkbox9" id="checkbox9"> Accesorios para cl&oacute;set</label>
								<label><input type="checkbox" name="checkbox10" id="checkbox10"> Accs. de cocina y ba&ntilde;o</label>
								<label><input type="checkbox" name="checkbox11" id="checkbox11"> Buzones</label>
							</section>
						</article>
					</article>
					<article id="c_der2">
							<span class="mayus, gris">CONTÁCTANOS</span><br><br>
						<section id="contactoEtiqueta">
							<label for="nombre">*Nombre</label>
							<label for="apellidos">*Apellidos</label>
							<label for="municipio">*Municipio</label>
							<label for="estado">*Estado</label>
							<label for="telefono">*Tel&eacutefono</label>
							<label for="correo">*Correo electr&oacutenico</label>
							<label for="empresa">Empresa</label>
							<label for="giro">Giro de la empresa</label>
							<label for="telOf">Tel&eacutefono oficina</label>
							<label for="web">Sitio web</label>
						</section>
						<section id="contactoCajas">
							<input type="text" name="nombre" id="nombre" placeholder="Nombre" required onkeypress="return validar(event)"></td>
							<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required onkeypress="return validar(event)"></td>
							<input type="text" name="municipio" id="municipio" placeholder="Municipio" required onkeypress="return validar(event)"></td>
							<input type="text" name="estado" id="estado" placeholder="Estado" required onkeypress="return validar(event)"></td>
							<input type="tel" name="ladaT" id="ladaT" placeholder="Lada" required onkeypress="return validarNum(event)"></td>
							<input type="tel" name="telefono" id="telefono" placeholder="Tel&eacute;fono" required onkeypress="return validarNum(event)"></td>
							<input type="mail" name="correo" id="correo" placeholder="ejemplo@dominio.ext" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required ></td>
							<input type="text" name="empresa" id="empresa" placeholder="Empresa" onkeypress="return validarTxtNum(event)"></td>
							<input type="text" name="giro" id="giro" placeholder="Giro de la empresa" onkeypress="return validar(event)"></td>
							<input type="tel" name="ladaTOf" id="ladaTOf" placeholder="Lada" onkeypress="return validarNum(event)"></td>
							<input type="tel" name="telOf" id="telOf" placeholder="Tel&eacute;fono oficina" onkeypress="return validarNum(event)"></td>
							<input type="url" name="web" id="web" placeholder="http.//www.tusitio.com"></td>
						</section>
						<section id="contactoEnvia">
							<label for="mensaje">Comentarios</label>
							<textarea name="mensaje" id="mensaje" placeholder="déjanos tu comentario" required onkeyup="Textarea_Sin_Enter(event.keyCode, this.id);" onkeypress="Textarea_Sin_Enter(event.keyCode, this.id);return validarTxtNum(event)"></textarea>
							<span>Tus datos ser&aacute;n de uso confidencial y nos ayudarán a responder de manera adecuada tus comentarios.<input name="Enviar" type="submit" class="botonEnvia" id="button" value="&nbsp;"/> </span>
						</section>
					</article>

					</fieldset>
				</form>
				<?php }
					else 
						{ 
							require_once(".contacto.php");
					 	}//fin else?>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>