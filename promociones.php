<!doctype html>
<?php $m=3; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery.js"></script>
<title>Promociones - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
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
var op = "op";
var opcionP = "p";
function mostrarOcultar(cual, otro)	{
	document.getElementById(opcionP).style.display = "none";
	document.getElementById(op).style.background = "rgb(241, 242, 242)";
	document.getElementById(op).style.color = "#333";
	op = cual;
	opcionP = otro;
	document.getElementById(opcionP).style.display = "block";
	document.getElementById(op).style.background = "#71BF44";
	document.getElementById(op).style.color = "#FEFEFE";
}
</script>
</head>
<body>
	<div id="contenedorE">
		<div id="contenedor">
			<?php  require_once(".menu.php") ?>
			<article id="contenido">
				<article id="c_izq">
					<article class="fondoE">
						<article id="menuNuevoProd">
							<ul>
								<li onclick="mostrarOcultar('op','p')"><a id="op">&#8226;&nbsp;&nbsp;VAUTH-SAGEL</a></li>
							  	<li onclick="mostrarOcultar('op1','p1')"><a id="op1">&#8226;&nbsp;&nbsp;JALADERAS SHINE</a></li>
 								<li onclick="mostrarOcultar('op2','p2')"><a id="op2">&#8226;&nbsp;&nbsp;SISTEMAS KINVARO</a></li> 
								<!--<li onclick="mostrarOcultar('op3','p3')" ><a id="op3">&#8226;&nbsp;&nbsp;ACCESORIOS PARA COCINA</a></li> 
								<li onclick="mostrarOcultar('op4','p4')" class="ultimo"><a id="op4">&#8226;&nbsp;&nbsp;CERRADURAS</a></li> -->
								<li class="ultimo"><a id="op5" class="icon-newtab virtual1" href="http://cerrajes.me/promociones/index.html" target="_blank">&#8226;&nbsp;&nbsp;CATÁLOGO DE PROMOCIÓN</a>
									<a class="virtual" href="http://cerrajes.me/promociones/index.html" target="_blank"><img src="imagenesSitio/promo/catalog_pagina-4.png"></a>
								</li>  
							</ul>
									<!-- <section id="QR">
										<img src="imagenesSitio/2014.png" alt="código QR">
										<span>Descarga el código QR en tu smart phone o tableta y comparte las promociones con tus amigos.</span>
									</section> -->
						</article>
						<article id="compartir">
							<article>RECOMIENDA ESTA PROMOCI&Oacute;N</article>
			<?php   require_once(".recomienda.php") ?>
						</article>
					</article>
				</article>
				<article id="c_der2">
					<section id="p">
						<img src="imagenesSitio/promo/promo_vaut_feb_mar.jpg">
					</section>
					<section id="p1">
						<img src="imagenesSitio/promo/promo_shine_feb_mar.jpg">
					</section>
						<section id="p2">
						<img src="imagenesSitio/promo/promo_kinvaro_feb_mar.jpg">
					</section>
	 			<!--	<section id="p3">
						<img src="imagenesSitio/promo/cocina_web2015.jpg">
					</section> 
						<section id="p4">
						<img src="imagenesSitio/promo/pag_cerradura.jpg">
					</section>
					<section id="p5">
						<img src="imagenesSitio/promo/pag_jaladeras.jpg">
					</section> -->
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>


</body>
</html>