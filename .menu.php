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
	<nav>
	    <table >
		  <tr>
		    <td><a href="home.php" class="<?php if ($m==0) {echo 'activo';} ?>">inicio</a></td>
		    <td><a href="empresa.php" class="<?php if ($m==1) {echo 'activo';} ?>">quienes somos</a></td>
		    <td><a href="producto.php?id=01&id_sublinea=01" class="<?php if ($m==2) {echo 'activo';} ?>" onmousemove="MM_showHideLayers('menuOpProd','','show')" onmouseout="MM_showHideLayers('menuOpProd','','hide')">productos</a></td>
		    <td><a href="promociones.php" class="<?php if ($m==3) {echo 'activo';} ?>">promociones</a></td>
		    <td><a href="nuevosProductos.php" class="<?php if ($m==5) {echo 'activo';} ?>">nuevos productos</a></td>
		    <td><a href="videos.php" class="<?php if ($m==6) {echo 'activo';} ?>">videos</a></td>
		    <td><a href="contacto.php" class="<?php if ($m==7) {echo 'activo';} ?>">contacto</a></td>
		    <td><a href="ubicanos.php" class="<?php if ($m==8) {echo 'activo';} ?>">ub&iacute;canos</a></td>
		    <td><a href="equipo.php" class="<?php if ($m==4) {echo 'activo';} ?>">forma parte del equipo</a></td>
		    <td><a href="http://www.facebook.com/pages/Tiendas-Cerrajes/186839721354132?sk=wall" target="_blank" ><img src="imagenesSitio/fb.png"></a></td>
		  </tr>
		</table>
		<article id="menuOpProd" onmousemove="MM_showHideLayers('menuOpProd','','show')" onmouseout="MM_showHideLayers('menuOpProd','','hide')">
			<ul>
				<li><a href="producto.php?id=01&id_sublinea=01">Accesorios para gabinete</a></li>
				<li><a href="producto.php?id=02&id_sublinea=04">Correderas</a></li>
				<li><a href="producto.php?id=03&id_sublinea=01">Jaladeras y botones</a></li>
				<li><a href="producto.php?id=04&id_sublinea=99">Tornillos y conectores</a></li>
				<li><a href="producto.php?id=05&id_sublinea=01">Bisagras</a></li>
				<li><a href="producto.php?id=06&id_sublinea=01">Arquitectura</a></li>
				<li><a href="producto.php?id=07&id_sublinea=99">Iluminaci&oacute;n</a></li>
				<li><a href="producto.php?id=08&id_sublinea=00">Chapas y cerraduras</a></li>
				<li><a href="producto.php?id=09">Accesorios para cl&oacute;set</a></li>
				<li><a href="producto.php?id=10&id_sublinea=02">Accesorios de cocina y ba&ntilde;o</a></li>
				<li><a href="producto.php?id=11">Buzones</a></li>
			</ul>
		</article>
	</nav>