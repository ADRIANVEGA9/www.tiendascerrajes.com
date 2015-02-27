<!doctype html>
<?php $m=400; 
?>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/lightbox.css"/>
<script src="js/prefixfree.min.js"></script>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>




<title>Catálogos - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
<script>
	document.createElement('article');
	document.createElement('aside');
	document.createElement('figure');
	document.createElement('footer');
	document.createElement('header');
	document.createElement('hgroup');
	document.createElement('nav');
	document.createElement('section');
</script><!--[if IE ]><script type="text/javascript">
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
<script type="text/javascript" >
var opcionNT = "n";
var op = "op";
// var opcionNO = "n2";
function mostrarOcultar(cual, op_menu)	{
	document.getElementById(opcionNT).style.display = "none";	
	// document.getElementById(opcionNO).style.display = "none";
	document.getElementById(op).style.background = "#DDD";
	document.getElementById(op).style.color = "#333";
	opcionNT = cual;
	// opcionNO = otro;
	op = op_menu;
	document.getElementById(opcionNT).style.display = "block";
	// document.getElementById(opcionNO).style.display = "block";
	document.getElementById(op).style.background = "#71BF44";
	document.getElementById(op).style.color = "#FEFEFE";
}
</script>
</head>
<body>
	<div id="contenedorE">
		<div id="contenedor">
			<?php  require_once(".menu.php") ?>
			<article id="carruselHome">
				<figure><img src="imagenesSitio/catalogos/descarga_cat.jpg" alt=""></figure>
			</article>
			<article id="contenido">
				<article id="c_izq">
					<div id="tituloProductos" ><span>nuestros productos</span></div>	
					<?php require 'menu/.menu.php'; ?>
				</article>
				<article id="c_der2">
					<section class="descargasCatalogo">
						<?php if (@!$_POST['nombreD']){ ?><!-- @ SE USA PARA EVITAR QUE MANDE LOS ERRORES 'NOTICE' DE PHP -->
						<form id="descargasForm" method="post" >
							<fieldset id="datos"> <legend>Registra tus datos & descarga de manera gratuita nuestros catálogos</legend>
								<label for="nombreD">nombre</label><input type="text" name="nombreD" id="nombreD" tabindex="1" required />
								<label for="correoD">correo</label><input type="email" name="correoD" id="correoD" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+[a-zA-Z0-9-])*$"  tabindex="2" required>
								<label for="ciudadD">ciudad</label><input type="text" name="ciudadD" id="ciudadD"  tabindex="3" required/>
								<label for="estadoD">estado</label><input type="text" name="estadoD" id="estadoD"  tabindex="4" required/>

							</fieldset>
							<fieldset id="opcionesSelect">	<span>dirigido a:</span>							
								<input name="dirigidoD" type="radio" id="dirigidoD_0" form="descargasForm" tabindex="5" value="Particular" checked required="" >
									<label for="dirigidoD_0">Particular</label>
								<input name="dirigidoD" type="radio" id="dirigidoD_1" form="descargasForm" tabindex="6" value="Arquitecto"  required="">
									<label for="dirigidoD_1">Arquitecto</label>
								<input name="dirigidoD" type="radio" id="dirigidoD_2" form="descargasForm" tabindex="7" value="Diseñador"  required="">
									<label for="dirigidoD_2">Diseñador</label>
								<input name="dirigidoD" type="radio" id="dirigidoD_3" form="descargasForm" tabindex="8" value="Constructor"  required="">
									<label for="dirigidoD_3">Constructor</label>
								<input name="dirigidoD" type="radio" id="dirigidoD_4" form="descargasForm" tabindex="9" value="ama de casa"  required="">
									<label for="dirigidoD_4">ama de casa</label>
							</fieldset>
							<fieldset id="opcionesCatalogos">
							<!-- 	<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_0" form="descargasForm" tabindex="10" value="industrial.pdf">
					    		<label for="descargaCatalogo_0">Catálogo Industrial</label> -->
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_1" form="descargasForm" tabindex="11" value="comercial.pdf">
					    		<label for="descargaCatalogo_1">Catálogo Comercial</label>
				<!-- 				<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_2" form="descargasForm" tabindex="12" value="jaladeras.pdf">
					    		<label for="descargaCatalogo_2">Catálogo Jaladeras y Botones</label> -->
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_3" form="descargasForm" tabindex="13" value="Shine.pdf">
					    		<label for="descargaCatalogo_3">Catálogo Shine</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_4" form="descargasForm" tabindex="14" value="vauth-sagel.pdf">
					    		<label for="descargaCatalogo_4">Catálogo Vauth Sagel</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_5" form="descargasForm" tabindex="15" value="elite.pdf">
					    		<label for="descargaCatalogo_5">Catálogo Accesorios para clóset Elite</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_6" form="descargasForm" tabindex="16" value="futura.pdf">
					    		<label for="descargaCatalogo_6">Catálogo Correderas Futura y única</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_7" form="descargasForm" tabindex="17" value="impaz.pdf">
					    		<label for="descargaCatalogo_7">Catálogo Corredera Impaz</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_9" form="descargasForm" tabindex="19" value="ten.pdf">
					    		<label for="descargaCatalogo_9">Catálogo Corredera TEN</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_10" form="descargasForm" tabindex="20" value="triomax.pdf">
					    		<label for="descargaCatalogo_10">Catálogo Corredera Triomax</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_11" form="descargasForm" tabindex="21" value="T5.pdf">
					    		<label for="descargaCatalogo_11">Catálogo Corredera Triomax T5</label>
								<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_12" form="descargasForm" tabindex="22" value="levadizos_salice.pdf">
					    		<label for="descargaCatalogo_12">Catálogo Sistemas levadizos Salice</label>

						
								<button type="submit" id="validar" class="btn btn-default">DESCARGA GRATIS</button>
								<input type="hidden" name="registroH" value="a" />
								<div class="error"></div>								
							</fieldset>
							<figure><img src="imagenesSitio/catalogos/bisagra_web.png" alt=""></figure>
						</form>
						<?php }
						elseif (isset($_POST['nombreD']))
						{ 
							require ("_descarga.php");
					 	}//fin else?>

					 	<section id="avisoPrivacidad">
					 		tus datos no se usarán con otros fines. <a href="aviso_de_privacidad.pdf" target="_blank">consulta nuestro aviso de privacidad</a>
					 	</section>						
					</section>
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>

	<script type="text/javascript">
		$("#descargasForm").submit( function(){
		        var check 		= $("input[type='checkbox']:checked").length;
		        var nombreText 	= $('#nombreD').val();
		        var correoText 	= $('#correoD').val();
		        var ciudadText 	= $('#ciudadD').val();
		        var estadoText 	= $('#estadoD').val();
					
					if (nombreText == "") {
		                $('.error').text("Por favor ingresa tu nombre");
		                $('#nombreD').focus();
		                return false;						
					}	
					if (correoText == "")
					{
		                $('.error').text("Por favor ingresa tu correo");
                		$('#correoD').focus();
		                return false;	
					}	
					if (ciudadText == "")
					{
		                $('.error').text("Por favor ingresa la ciudad");
                		$('#ciudadD').focus();
		                return false;	
					}
					if (estadoText == "")
					{
		                $('.error').text("Por favor ingresa el estado");
            			$('#estadoD').focus();
		                return false;	
					} 

				   if (check == 0){
		                $('.error').text("Seleccione al menos un cátalogo para descargar");
		                return false;
		            } 
		            else {
		            	$('.error').hide();
						$('#validar').attr('disabled','disabled');
						$('#validar').text('Creando archivo .zip ...');
		                return true;
			        }     
			    });

	</script>
</body>
</html>