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
				<iframe src=".home.html" name="iview" width="962" height="358"  scrolling="No" frameborder="0" id="iview" border="0"></iframe>
			</article>
			<article id="contenido">
				<article id="c_izq">
					<div id="tituloProductos" ><span>nuestros productos</span></div>	
					<?php require 'menu/.menu.php'; ?>	
					<figure id="descargasHome">
						<a href="descargar.php"><img src="imagenesSitio/icon_catalog.png" alt="descargar catálogos"></a>
					</figure>			
				</article>

				<article id="homeContenido">
						<h1>ESTILOS & TENDENCIAS</h1>
						<article>
							<section>
								<p>EeStairs logró dar solución a “lo que la industria estaba esperando”, LA ESCALERA DE ACERO EN ESPIRAL, que permite acceder a azoteas y áticos en tan sólo 1m² o poco más; logrando así, la revolución en escaleras, al no hacer uso de espacio innecesario. 
								</p><br>
							</section>
							<figure> <img src="imagenesSitio/EeStairs.jpg"> </figure>
							<figcaption>www.eestairs.com</figcaption>
						</article>
						<article>
							<section>
								<p>La menor cantidad de muebles, así como,  la división de paneles y el contraste de texturas, permitirán dar continuidad y realce a una habitación, creando un ambiente placentero dentro de un lugar pequeño. Estilo minimalista que busca sólo lo esencial de un espacio.</p><br>
							</section>
							<figure> <img src="imagenesSitio/division-de-espacio-4-650x430.jpg"></figure>
							<figcaption>www.decoracion365.com</figcaption>
						</article>
						<article>
							<section>
								<p>Las paredes blancas como recurso para crear espacios amplios y su combinación con objetos coloridos, son una tendencia Australiana que se refleja en la arquitectura, diseño y decoración de un hogar. Imprimiendo un estilo joven, fresco y con energía.
								</p><br>								 
							</section>
							<figure> <img src="imagenesSitio/apartamento-australia.jpg"> </figure>
							<figcaption>arquitecturadecasas.blogspot.mx</figcaption>
						</article>
						<article>
							<section>
								<p>Si de espacios reducidos hablamos, un TIP útil es hacer uso del espacio encima del refrigerador; apostando por estanterías para colocar vinos,  libros de cocina o el microondas, generando pequeños pero funcionales espacios de almacenamiento dentro del hogar.
								</p><br>
							</section>
							<figure> <img src="imagenesSitio/apartmenttherapy.jpg"></figure>
							<figcaption>www.apartmenttherapy.com</figcaption>
						</article>
				</article>

			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>