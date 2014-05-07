<!doctype html>
<?php $m=0; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="El nuevo concepto que hemos desarrollado “Tiendas Cerrajes”, hace más sencillo, fácil y creativo, para ti, el diseño integral de tus espacios.">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/prefixfree.min.js"></script>

<link rel="stylesheet" type="text/css" href="Shadowbox/shadowbox.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="Shadowbox/shadowbox.js"></script>
<script type="text/javascript">
	// window.onload = function() {

	//     // open a welcome message as soon as the window loads
	//     Shadowbox.open({
	//         content:    'carrusel/carrusel.PHP',
	//         player:     "iframe",
	//         height:     820,//620
	//         width:      750
	//     });

	// };
</script>
<script type='text/javascript'>
	Shadowbox.init({
	    displayCounter:false,
	    handleOversize: "resize",
	    //modal: true, //evita que se cierre con click fuera del recuadro principal
	    overlayColor: "#000",//color de fondo
	    overlayOpacity: 0.3,//transparencia
		language: "es",
		 players:  ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv']
	});
</script>
<title>Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
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
</head>
<body>
	<div id="contenedorE">
		<div id="contenedor">
			<?php  require_once(".menu.php") ?>
			<article id="carruselHome">
				<iframe src=".home.html" name="iview" width="962" height="452"  scrolling="No" frameborder="0" id="iview" border="0"></iframe>
			</article>
			<article id="contenidoHome">
				<section>
					<span>CASAS ESPECTACULARES</span>
					<article>
						<p>El diseño moderno de una casa, no solo busca combinaciones de diferentes materiales; también propuestas nuevas que permitan la entrada de aire, luz y contacto cercano con la naturaleza.</p><br> 
						<p>El diseño de Rooftecture M, Shuhei  Endo, una casa en Osaka, Japón; terminada en 2010, brinda una propuesta innovadora que integra recubrimientos de acero y voladizos con volúmenes curvos y formas rectas; dando un contraste poco habitual y arriesgado con  la combinación de formas, y materiales como acero con madera de pino.</p><br> 
						 <p>Los espacios comunes quedan "abiertos al exterior"; como la sala, que es totalmente de cristal, sin embargo; esta casa garantiza por completo habitabilidad y privacidad para sus habitantes.</p><br><br>
						 
					</article>
					<figure class="ancho"> <img src="imagenesSitio/a101.jpg"> </figure>
				</section>
				<section>
					<span>DECORANDO ESPACIOS</span>
					<article>
						<p>Es común que con el paso del  tiempo nuestro hogar reciba más y más artículos y ropa que vamos acumulando. Así que es imprescindible contar con un espacio especial para poder almacenar todo, y que además sea decorativo y funcional. </p><br>

						<p>Si cuentas con el espacio en tu habitación; una buena opción es integrar a tu vestidor o clóset accesorios que faciliten la organización de prendas y accesorios; tales como zapateras extraíbles, corbateros, porta pantalones, etc.</p><br>

						<p>Aprovecha la parte interna de la puerta de tus closets (si no son corredizos); para colgar bolsas, o un espejo; o bien,  colocar abrigos o cosas que estén actualmente en uso.</p><br><br>
					</article>
					<figure> <img src="imagenesSitio/a201.jpg"><img src="imagenesSitio/a202.jpg"></figure>
				</section>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>