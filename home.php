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
						<p>Actualmente en el diseño moderno de una casa, se toma en cuenta además de la funcionalidad de sus espacios, el cuidado y preservación del medio ambiente. Es por eso que en Zeigler Build se dieron a la tarea de restaurar 31 contenedores marítimos para diseñar una casa de tres niveles en Queensland, Australia.</p><br>
						<p> Esta casa está rodeada de un frondoso bosque y un río; cuenta con cuatro habitaciones distribuidas en los dos niveles superiores, en los que se encuentran como parte de la decoración, desde grafittis hasta mosaicos.</p><br>
						<p> En su interior cuenta también con áreas como sala de lectura, estudio de arte, gimnasio y una piscina; todo este lujo contrasta con la primera impresión que puede causar la casa desde el exterior, siendo una auténtica casa de lujo realizada con materiales reciclados.</p><br><br>
						 
					</article>
					<figure> <img src="imagenesSitio/a101.jpg"> </figure>
				</section>
				<section>
					<span>DECORANDO ESPACIOS</span>
					<article>
						<p>El estilo vintage es una manera casual para decorar mezclando elementos antiguos y nuevos; dando como resultado una decoración muy personal.</p><br>
						<p> 
Para lograrlo puedes combinar telas antiguas, de colección y de bajo costo para decorar cualquier habitación de tu casa; por ejemplo la cocina.</p><br>
						<p>
Lograr una cocina de inspiración vintage es posible cambiando solo unos pocos detalles; actualmente en el mercado, puedes conseguir estufas de cocina prácticas, muebles, jaladeras y botones con estilo antiguo; además de muchos objetos de cocina en materiales como cerámica, barro y vidrio que te ayudarán a lograr el “look” de una cocina de campo antigua.</p><br><br><br><br>
					</article>
					<figure> <img src="imagenesSitio/a201.jpg"></figure>
				</section>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>