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
				<figure><img src="imagenesSitio/catalogos/pleca_cat.jpg" alt=""></figure>
			</article>
			<article id="contenido">
				<article id="c_izq">
					<div id="tituloProductos" ><span>nuestros productos</span></div>	
					<?php require 'menu/.menu.php'; ?>	
					<figure id="descargasCatalogo">
						<a href="descargar.php"><img src="imagenesSitio/catalogos/icono_descarga.jpg" alt="descargar catálogos"></a>
					</figure>			
				</article>
				<article id="c_der2">
					<section class="catalogos">

						<article class="catalogosImg">
							<figure>
								<a id="img" href="http://www.cerrajes.me/catalogos/virtual/industrial/index.html" target="_blank" title="Ver catálogo virtual Industrial">
									<img src="imagenesSitio/catalogos/cat_industrial.png" alt="Catálogo Industrial"/>
								<figcaption>Catálogo Industrial</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/comercial/index.html" target="_blank" title="Ver catálogo virtual Comercial">
									<img src="imagenesSitio/catalogos/cat_Comercial.png" alt="Catálogo Comercial"/>
								<figcaption> Catálogo Comercial</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/jaladeras/index.html" target="_blank" title="Ver catálogo virtual jaladeras">
									<img src="imagenesSitio/catalogos/cat_jaladeras.png" alt="Catálogo jaladeras"/>
								<figcaption> Catálogo jaladeras</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/shine/index.html" target="_blank" title="Ver catálogo virtual Shine">
									<img src="imagenesSitio/catalogos/cat_shine.png" alt="Catálogo Shine"/>
								<figcaption> Catálogo Shine</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/vauth-sagel/index.html" target="_blank" title="Ver catálogo virtual Vauth-Sagel">
									<img src="imagenesSitio/catalogos/cat_vauth.png" alt="Catálogo Vauth-Sagel"/>
								<figcaption> Catálogo Vauth-Sagel</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/elite/index.html" target="_blank" title="Ver catálogo virtual Accesorios para clóset Elite">
									<img src="imagenesSitio/catalogos/cat_elite.png" alt="Accesorios para clóset Elite"/>
								<figcaption> Acces. para clóset Elite</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/futura/index.html" target="_blank" title="Ver catálogo virtual Correderas Futura y Unica">
									<img src="imagenesSitio/catalogos/cat_futura.png" alt="Correderas Futura y Unica"/>
								<figcaption> Correderas Futura y Unica</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/impaz/index.html" target="_blank" title="Ver catálogo virtual Corredera Impaz">
									<img src="imagenesSitio/catalogos/cat_impaz.png" alt="Corredera Impaz"/>
								<figcaption> Correderas Impaz</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/prime/index.html" target="_blank" title="Ver catálogo virtual Corredera Prime">
									<img src="imagenesSitio/catalogos/cat_prime.png" alt="Corredera Prime"/>
								<figcaption> Correderas Prime</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/ten/index.html" target="_blank" title="Ver catálogo virtual Corredera TEN">
									<img src="imagenesSitio/catalogos/cat_ten.png" alt="Corredera TEN"/>
								<figcaption> Correderas TEN</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/triomax/index.html" target="_blank" title="Ver catálogo virtual Corredera Triomax">
									<img src="imagenesSitio/catalogos/cat_trio.png" alt="Corredera Triomax"/>
								<figcaption> Correderas Triomax</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/triomax_t5/index.html" target="_blank" title="Ver catálogo virtual Corredera Triomax T5">
									<img src="imagenesSitio/catalogos/cat_T5.png" alt="Corredera Triomax T5"/>
								<figcaption> Correderas Triomax T5</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


							<figure>
								<a href="http://www.cerrajes.me/catalogos/virtual/levadizos_salice/index.html" target="_blank" title="Ver catálogo virtual Sistemas levadizos">
									<img src="imagenesSitio/catalogos/cat_levadizos.png" alt="Sistemas levadizos"/>
								<figcaption> Sistemas levadizos</figcaption>
								</a>
								<a id="down" class="icon-download" href="descarga.php" title="Descargar pdf"></a>
							</figure>


						</article>	

					</section>
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
	</div>
</body>
</html>