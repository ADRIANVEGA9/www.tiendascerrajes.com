<!doctype html>
<?php $m=4; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/file-validator.css">
<script src="js/prefixfree.min.js"></script>
<script src="js/validaForm.js"></script>
<title>Forma parte del equipo - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
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
</style>
<![endif]-->

<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->

</script>
</head>
<body>
	<div id="contenedorE">
		<div id="contenedor">
			<?php  require_once(".menu.php") ?>
		<article id="carruselHome">
			<figure><img src="imagenesSitio/equipo/equipo.jpg" alt=""></figure>
		</article>
			<article id="contenido">
				<article id="c_centro">
					<section id="equipo">
					<?php if (!$_POST){ ?>
						<span>
							Tiendas Cerrajes te invita a integrarte con nosotros. <br> Si deseas pertenecer a esta gran familia, ingresa los siguientes datos:
						</span>
							<form id="equipoForm" method="POST" enctype="multipart/form-data" onsubmit="return validate1(this)" >
							<fieldset>
								<section id="equipoEtiqueta">
									<label for="nombre">*Nombre</label>
									<label for="estado">*Estado</label>
									<label for="interes">*Área de interés</label>
									<label for="archivo">*Subir curriculo en formato PDF</label>
								</section>
								<section id="equipoCajas">
									<input type="text" name="nombre" id="nombre" placeholder="Nombre" required onkeypress="return validar(event)">
									<select name="estado" id="estado" placeholder="elige una opción" required onkeypress="return validar(event)">
										<script language="javascript">
										var states = new Array("Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "México", "Michoacán", "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas");
										for(var hi=0; hi<states.length; hi++) 
										document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
										</script>
									</select>
									<select name="interes" id="interes" placeholder="elige una opción" onkeypress="return validar(event)">
										<option value="Ventas">Ventas</option>
										<option value="Atencion_Cliente">Atención a Cliente</option>
										<option value="RRHH">Recursos Humanos</option>
										<option value="Finanzas">Finanzas</option>
										<option value="Contraloría">Contraloría</option>
										<option value="TI">Tecnología de Información</option>
										<option value="Compras_Logistica">Compras y Logística</option>
										<option value="Legal">Legal</option>
										<option value="Mkt">Mercadotecnia</option>
									</select>
									<input type="file" name="archivo" id="archivo" value="seleccionar" class='validaFile' data-type='pdf' data-max-size='2mb' required onkeypress="return validar(event)">
								</section>
								<section id="equipoEnvia">
									<input name="Enviar" type="submit" class="botonEnvia" id="button" value="ENVIAR"/>
								</section>
							</fieldset>
							</form>
							<?php 
							}	else { require_once("equipo_upload.php");}//fin else?>
					</section>

				</article>
			</article>
		</div>
		<?php require (".footer.php") ?>	
	</div>
<script src="js/jquery-1.7.2.min.js"></script>	
<script src="js/file-validator.js" type="text/javascript" charset="utf-8"></script>
<script src="js/app.js"></script>
<script>

	$('#button').click(fileError);

	function fileError(){
	var $valor 		= $('#archivo').val(),
		$tipo		= $valor.substring($valor.lastIndexOf('.') + 1).toLowerCase();
	console.log('dentro de función fileError');
	if ($tipo == 'pdf') {
		console.log('dentro de if en función fileError'+$tipo);
		return true;
		}
		else
		{
			console.log('dentro de else en función fileError '+$tipo);
			return false;
		}

	};
</script>
</body>
</html>