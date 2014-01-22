<!doctype html>
<?php $m=0; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta description="El nuevo concepto que hemos desarrollado “Tiendas Cerrajes”, hace más sencillo, fácil y creativo, para ti, el diseño integral de tus espacios.">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/prefixfree.min.js"></script>

<link rel="stylesheet" type="text/css" href="Shadowbox/shadowbox.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="Shadowbox/shadowbox.js"></script>
<script type='text/javascript'>
Shadowbox.init({
    displayCounter:false,
    handleOversize: "resize",
    modal: true, //evita que se cierre con click fuera del recuadro principal
    overlayColor: "#000",//color de fondo
    overlayOpacity: 0.3,//transparencia
	language: "es",
	 players:  ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv']
});
</script>
<script type="text/javascript">
// $(document).ready(function(){
// 	setTimeout(function() {
// 	    Shadowbox.open({
//     	    content:    '<article><img src="imagenesSitio/inicio_02.png"></article>',
//     	    player:     "html",
//     	    width:      "800",
//     	    height:     "546"
//     	});
// 	}, 500);
// });
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
						En la actualidad el diseño de una casa, va más allá de lo necesario y funcional ya que existen posibilidades infinitas para crear casas que parecen obras de arte. <br>
						Tal es el caso de Pedralbes de FOA, esta casa está situada en uno de los lugares más exclusivos de Barcelona sobre 350 m2 en una colina, la construcción se adaptó 100% al terreno. <br>
						Está dividida en tres plantas y todas las habitaciones tienen ventanas que a su vez se conectan con las terrazas, todos los niveles están conectados con el jardín. La fachada recubierta de madera armoniza con el paisaje natural.<br>
						La casa es un diseño de FOA y fue terminada en el año 2008.<br><br>
						Fuente: <a>www.disenoyarquitectura.net</a> 
					</article>
					<figure> <img src="imagenesSitio/a101.jpg"><img src="imagenesSitio/a102.jpg"> </figure>
				</section>
				<section>
					<span>DECORANDO ESPACIOS</span>
					<article>
						Decorar los techos puede transformar los espacios de una manera drástica y original. <br>
						Con el uso de placas de yeso laminado es posible colocar todo tipo de estructuras a la medida, para así dejar de lado los techos planos y aburridos.<br>
						Cada placa mide entre 2 y 3 m de largo con un espesor entre los 6.5 y 19 mm, formadas por un núcleo de yeso de origen natural recubierto por dos capas de celulosa especial multihoja y se presenta en forma de tablero, en el interior tiene perfiles hechos de acero galvanizado que dan solidez y consistencia proporcionando aislamiento acústico y térmico.<br>
						Es un material no inflamable que se puede taladrar, cortar, curvear; se puede utilizar para muebles, objetos de decoración, dividir espacios dentro de la casa y hasta empotrar puertas corredizas.
					</article>
					<figure> <img src="imagenesSitio/a201.jpg"><img src="imagenesSitio/a202.jpg"> </figure>
				</section>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>