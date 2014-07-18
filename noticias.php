<!doctype html>
<?php $m=4; ?>
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

<title>Noticias - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
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
			<article id="carruselHome"></article>
			<article id="contenido">
				<article id="c_izq">
					<article class="fondoE">
						<article id="menuNuevoProd">
							<ul>
								 <li onclick="mostrarOcultar('n','op')" class="mayus"><a id="op" >&#8226;&nbsp;&nbsp;ganador de promoción junio</a></li>
							<!--	<li onclick="mostrarOcultar('n2','op2')" class="mayus"><a id="op2" >&#8226;&nbsp;&nbsp;apertura Guatemala</a></li> -->
							</ul>
						</article>
					</article>
				</article>
				<article id="c_der2">
					<section id="n">
						<img src="imagenesSitio/noticias/noticias.jpg">
					</section>
<!-- 					<section id="n2">
						<img src="imagenesSitio/noticias/noticias2.jpg">
					</section> -->
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>