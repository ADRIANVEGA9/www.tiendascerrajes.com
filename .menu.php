<script src="js/prefixfree.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/efecto.js"></script>
<script>
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>	
	<header>		
        <section id="logo"><a href="home.php"><img src="imagenesSitio/logo.jpg"></a>
			<!-- <section id="sesion"><a href="#">Iniciar Sesi&oacute;n</a> / <a href="#">Registrate</a></section> -->
				<article id="s3">
				 	<a href="catalogos.php">
				 		<img id="catalogos" src="imagenesSitio/catalogo.png"> 
				 	</a>
				 	<a href="noticias.php">
				 		<img id="parpadea" src="imagenesSitio/periodico.png"> 
				 	</a>
					<a href="aviso_de_privacidad.pdf" target="_blank" >
						<img id="imgAviso" src="imagenesSitio/aviso.jpg" title="Aviso de privacidad">
					</a>
				</article>
			</section>
			<?php // require_once(".social.html") ?><?php  require_once(".buscar.php") ?>
	</header>
<?php require 'nav.php';?>