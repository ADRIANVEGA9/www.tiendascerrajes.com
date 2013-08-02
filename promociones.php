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
var opcionPR = "pr1";
var opcionP = "p1";
function mostrarOcultar(cual, otro)	{
	document.getElementById(opcionPR).style.display = "none";
	document.getElementById(opcionP).style.display = "none";
	opcionPR = cual;
	opcionP = otro;
	document.getElementById(opcionPR).style.display = "block";
	document.getElementById(opcionP).style.display = "block";
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
								<li onclick="mostrarOcultar('pr1','p1')"><a class="activoP">&#8226;&nbsp;&nbsp;BUZ&Oacute;N-MAN&Iacute;A</a>
									<section id="pr1"><br>Descubre los nuevos buzones que tenemos para ti... Est&eacute;ticamente id&oacute;neos para las casas modernas y espacios espectaculares.<br><br>
										Elaborados en materiales diversos como:<br><br>
										Acero inoxidable<br>
										Pl&aacute;stico de alta resistencia<br>
										Met&aacute;lico esmaltado<br><br>
										Consulta con tu asesor de ventas los diferentes estilos y medidas.</section>
								</li>
<!-- 								<li onclick="mostrarOcultar('pr2','p2')"><a>&#8226;&nbsp;&nbsp;SUPER VERANO DE 10</a>
									<section id="pr2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </section>
								</li>
								<li onclick="mostrarOcultar('pr3','p3')"><a>&#8226;&nbsp;&nbsp;TUBO OVAL LED</a>
									<section id="pr3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </section>
								</li>
								<li onclick="mostrarOcultar('pr4','p4')" ><a>&#8226;&nbsp;&nbsp;ACCESORIOS PARA BA&Ntilde;O</a>
									<section id="pr4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </section>
								</li>
								<li onclick="mostrarOcultar('pr5','p5')" class="ultimo"><a>&#8226;&nbsp;&nbsp;N&Uacute;MEROS MET&Aacute;LICOS</a>
									<section id="pr5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </section>
								</li> -->
							</ul>
						</article>
						<article id="compartir">
							<article>RECOMIENDA ESTA PROMOCI&Oacute;N</article>
			<?php   require_once(".recomienda.php") ?>
						</article>
					</article>
				</article>
				<article id="c_der2">
					<section id="p1">
						<img src="imagenesSitio/promo/01.jpg">
					</section>
<!-- 					<section id="p2">
						<img src="imagenesSitio/promo/02.jpg">
					</section>
					<section id="p3">
						<img src="imagenesSitio/promo/03.jpg">
					</section>
					<section id="p4">
						<img src="imagenesSitio/promo/04.jpg">
					</section>
					<section id="p5">
						<img src="imagenesSitio/promo/05.jpg">
					</section> -->
				</article>
			</article>
		</div>	
	</div>
</body>
</html>