<!doctype html>
<?php $m=5; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="Shadowbox/shadowbox.css">
<script src="Shadowbox/shadowbox.js"></script>
<script type='text/javascript'>
Shadowbox.init({
overlayColor: "#2E3B4D",//color de fondo
overlayOpacity: "0.6",//transparencia
});
</script>
<title>Nuevos Productos - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
								<li onclick="mostrarOcultar('n','op')" class="mayus"><a id="op" >&#8226;&nbsp;&nbsp;Burro de planchar</a></li>
								<li onclick="mostrarOcultar('n2','op2')" class="mayus"><a id="op2" >&#8226;&nbsp;&nbsp;Organizador de platos</a></li>
								<li onclick="mostrarOcultar('n3','op3')" class="mayus" class="ultimo" ><a id="op3" >&#8226;&nbsp;&nbsp;Soporte magnético </a></li>
							</ul>
						</article>
						<article id="compartir">
							<article>RECOMIENDA ESTA SECCIÓN</article>
			<?php  require_once(".recomienda.php") ?>
						</article>
					</article>
				</article>
				<article id="c_der2">
					<section id="n">
						<img src="imagenesSitio/nuevos/i01.jpg">
					</section>
					<section id="n2">
						<img src="imagenesSitio/nuevos/i02.jpg">
					</section>
					<section id="n3">
						<img src="imagenesSitio/nuevos/i03.jpg">
					</section>
<!-- 					<section id="n4">
						<img src="imagenesSitio/nuevos/T04.jpg">
						<section id="textoNP">Innovación es lo que da vida a un espacio con clase. El Luminario LED ofrece iluminación 
							a gabinetes de cocina, baño, recamara, repisas, libreros, etc.; gracias a su pequeño tamaño y libertad de 
							instalación por su ﬁjación al ras en la parte superior del mueble.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i04.jpg"></section>
						<article><a href="imagenesSitio/nuevos/4.pdf" rel="shadowbox" title="Tubo oval y luminario">+ info...</a></article>
					</section> -->
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>