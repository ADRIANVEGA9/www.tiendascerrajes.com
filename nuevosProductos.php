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
var opcionNT = "n1";
var opcionNO = "n2";
function mostrarOcultar(cual, otro)	{
	document.getElementById(opcionNT).style.display = "none";
	document.getElementById(opcionNO).style.display = "none";
	opcionNT = cual;
	opcionNO = otro;
	document.getElementById(opcionNT).style.display = "block";
	document.getElementById(opcionNO).style.display = "block";
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
								<li onclick="mostrarOcultar('n1','n2')" class="mayus"><a >&#8226;&nbsp;&nbsp;Sistema Gaviota</a></li>
								<li onclick="mostrarOcultar('n2','n3')" class="mayus"><a >&#8226;&nbsp;&nbsp;Perfil Gola</a></li>
								<li onclick="mostrarOcultar('n3','n4')" class="mayus"><a >&#8226;&nbsp;&nbsp;Bote de Basura</a></li>
								<li onclick="mostrarOcultar('n4','n5')" class="mayus"><a >&#8226;&nbsp;&nbsp;Tubo oval y luminario</a></li>
								<li onclick="mostrarOcultar('n5','n6')" class="mayus"><a >&#8226;&nbsp;&nbsp;Jaladeras de diseño</a></li>
								<li onclick="mostrarOcultar('n6','n7')" class="mayus" ><a >&#8226;&nbsp;&nbsp;Botones Cerrajes</a></li>
								<li onclick="mostrarOcultar('n7','n8')" class="mayus"><a >&#8226;&nbsp;&nbsp;Jaladeras de plástico</a></li>
								<li onclick="mostrarOcultar('n8','n9')" class="mayus" class="ultimo" ><a >&#8226;&nbsp;&nbsp;Bisagra Salice</a></li>
							</ul>
						</article>
						<article id="compartir">
							<article>RECOMIENDA ESTA SECCIÓN</article>
			<?php  require_once(".recomienda.php") ?>
						</article>
					</article>
				</article>
				<article id="c_der2">
					<section id="n1">
						<img src="imagenesSitio/nuevos/T01.jpg">
						<section id="textoNP">El nuevo Sistema neumático de apertura Gaviota ofrece libertad de movimiento al interior de cada gabinete a través de un mecanismo único de apertura precisa, en base a pistones de gas justo lo que un espacio moderno necesita. Cada gabinete de cocina, alacena, armario, clóset, recamara y centro de entretenimiento se convierte ahora en un gran espacio, un espacio Tiendas Cerrajes.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i01.jpg"></section>
						<article><a href="imagenesSitio/nuevos/1.pdf" rel="shadowbox" title="Sistema Gaviota">+ info...</a></article>
					</section>
					<section id="n2">
						<img src="imagenesSitio/nuevos/T02.jpg">
						<section id="textoNP">Las nuevas tendencias europeas en cocinas, puertas y gabinetes explotan la simplicidad, 
							limpieza y elegancia en todas sus vistas exteriores. Los nuevos perﬁles jaladera Gola de Tiendas Cerrajes, 
							muestran la innovación, la calidad y el estilo en cualquier parte del mueble eliminando visualmente las 
							jaladeras y botones para llevar el diseño más allá de lo convencional.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i02.jpg"></section>
						<article><a href="imagenesSitio/nuevos/2.pdf" rel="shadowbox" title="Perfil Gola">+ info...</a></article>
					</section>
					<section id="n3">
						<img src="imagenesSitio/nuevos/T03.jpg">
						<section id="textoNP">El nuevo bote basura Cerrajes, cuya instalación interior dentro del gabinete y su tapa 
							insertada sobre la cubierta de la cocina, permite al usuario tener acceso rápido para tirar los residuos 
							y/o basura. Su tapa en inox, provee estética a la cubierta y gracias a su sistema de ﬁjación, no estorba 
							ni entorpece el movimiento sobre la misma. 
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i03.jpg"></section>
						<article><a href="imagenesSitio/nuevos/3.pdf" rel="shadowbox" title="Bote de Basura">+ info...</a></article>
					</section>
					<section id="n4">
						<img src="imagenesSitio/nuevos/T04.jpg">
						<section id="textoNP">Innovación es lo que da vida a un espacio con clase. El Luminario LED ofrece iluminación 
							a gabinetes de cocina, baño, recamara, repisas, libreros, etc.; gracias a su pequeño tamaño y libertad de 
							instalación por su ﬁjación al ras en la parte superior del mueble.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i04.jpg"></section>
						<article><a href="imagenesSitio/nuevos/4.pdf" rel="shadowbox" title="Tubo oval y luminario">+ info...</a></article>
					</section>
					<section id="n5">
						<img src="imagenesSitio/nuevos/T05.jpg">
						<section id="textoNP">Las nuevas jaladeras de acero inoxidable de cerrajes, son la mejor opción para darle 
							vida a cada uno de tus muebles.  Su diseño exclusivo le da un toque especial a ese espacio creado por ti. 
							Su calidad, su precio y  sus variantes en tamaño, las hacen uno de los productos predilectos y más 
							importantes para Tiendas Cerrajes y en el mercado de herrajes para muebles.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i05.jpg"></section>
						<article><a href="imagenesSitio/nuevos/5.pdf" rel="shadowbox" title="Jaladeras de diseño">+ info...</a></article>
					</section>
					<section id="n6">
						<img src="imagenesSitio/nuevos/T06.jpg">
						<section id="textoNP">Descubre los nuevos botones Cerrajes, detalles únicos para muebles especiales. 
							Gracias a su diseño y a sus diferentes acabados, pueden ser utilizados prácticamente en cualquier tipo 
							de mueble (Cajones, puertas, etc.)Gran calidad, acabado perfecto e inmejorable precio, hacen de los 
							nuevos botones una solución a tus necesidades.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i06.jpg"></section>
						<article><a href="imagenesSitio/nuevos/6.pdf" rel="shadowbox" title="Botones Cerrajes">+ info...</a></article>
					</section>
					<section id="n7">
						<img src="imagenesSitio/nuevos/T07.jpg">
						<section id="textoNP">Descubre las nuevas jaladeras y botones infantiles Cerrajes, creados especialmente para 
							el diseño de cualquier tipo de mueble para los reyes del hogar. Su innovación, su acabado en 3 colores: 
							azul, amarillo y rosa, así como su calidad, los convierten en el herraje ideal para su aplicación en 
							gabinetes, cajones, clósets y cómodas de los pequeños.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i07.jpg"></section>
						<article><a href="imagenesSitio/nuevos/7.pdf" rel="shadowbox" title="Jaladeras de plástico">+ info...</a></article>
					</section>
					<section id="n8">
						<img src="imagenesSitio/nuevos/T08.jpg">
						<section id="textoNP">La apertura perfecta de puertas es esencial en cualquier tipo de mueble. En diseños 
							especiales como esquinas cerradas de cocinas, closets y otro tipo de gabinete, la solución es la Bisagra 
							SALICE -45º. Especialmente fabricada para puertas con ángulo negativo, provee una apertura de hasta 120º  
							aprovechando al máximo el espacio y ahorrando costos de material.
						</section>
						<section id="imagenNP"><img src="imagenesSitio/nuevos/i08.jpg"></section>
						<article><a href="imagenesSitio/nuevos/8.pdf" rel="shadowbox" title="Bisagra Salice">+ info...</a></article>
					</section>
					<section id="n9">

					</section>
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>