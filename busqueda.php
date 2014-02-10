<!doctype html>
<?php
$m=10;
//Mandamos llamar este archivo donde contiene la cadena de conexión a SQL Server
include("connections/sqlserver.inc.php");  

/***VARIABLES POR GET ***/
$numero1 = count($_GET);
$tags1 = array_keys($_GET);// obtiene los nombres de las varibles
$valores1 = array_values($_GET);// obtiene los valores de las varibles

for($i=0;$i<$numero1;$i++){// crea las variables y les asigna el valor
$$tags1[$i]=$valores1[$i];
}
/***VARIABLES POR POST ***/
$numero = count($_POST);
$tags = array_keys($_POST); // obtiene los nombres de las varibles
$valores = array_values($_POST);// obtiene los valores de las varibles

for($i=0;$i<$numero;$i++){ // crea las variables y les asigna el valor
$$tags[$i]=$valores[$i]; 
}
/*ahora solo hay que llamar las variables por su nombre*/

if ($txt_criterio<>"") {
  $txt_criterio = $txt_criterio;
} else {
	$txt_criterio='&nbsp;';
}
//Ya no usamos la clásica query de consulta como mysql_query ahora por definición de la función creada por adodb usamos la siguiente:
$query= $db->Execute("SELECT    tblIC_Producto.Clave_Producto, Descripcion2, tblIC_Producto.Descripcion, Foto, tblIC_ProductoPrecio.Precio,  Peso, Clave_Categoria, Clave_Categoria_Sub_1, cAlto, cAncho, cLargo, cMaterial, cAcabados, cMedida, cDescripcion3, Clave_UM, Comentario, clave_proveedor, cficha, cid_linea, t_linea.descripcion AS nombre_linea, t_sublinea.descripcion AS nombre_sublinea
		FROM         tblIC_Producto  
				INNER JOIN tblIC_ProductoPrecio ON tblIC_Producto.Clave_Producto = tblIC_ProductoPrecio.Clave_Producto
		        INNER JOIN t_linea ON tblIC_Producto.cid_linea = t_linea.id
				INNER JOIN t_sublinea ON tblIC_Producto.cid_sublinea = t_sublinea.sublinea
		WHERE
		(tblIC_Producto.cid_linea IS NOT NULL) AND
		(tblIC_ProductoPrecio.Lista_Precio = 1) AND
		/*(dbo.tblIC_Producto.Peso > 0) AND*/
		((tblIC_Producto.Descripcion LIKE '%" . $txt_criterio . "%') 
			OR (tblIC_Producto.Clave_Producto LIKE '%" . $txt_criterio . "%') 
			OR (tblIC_Producto.Clave_Categoria LIKE '%" . $txt_criterio . "%') 
			OR (tblIC_Producto.Clave_Categoria_Sub_1 LIKE '%" . $txt_criterio . "%') 
			OR (tblIC_Producto.Descripcion2 LIKE '%" . $txt_criterio . "%') 
			OR (t_linea.descripcion LIKE '%" . $txt_criterio . "%') 
			OR (t_sublinea.descripcion LIKE '%" . $txt_criterio . "%')
			) AND
			(tblIC_Producto.cid_linea = t_linea.id AND
			tblIC_Producto.cid_sublinea = t_sublinea.sublinea AND
			tblIC_Producto.cid_linea = t_sublinea.id_linea )
		ORDER BY
		tblIC_Producto.Clave_Producto ASC");
$totalRows = $query->_numOfRows;
// Verificamos si hemos realizado bien nuestro Query
if(!$query){
exit("Error en la consulta SQL");
} 
?>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/lightbox.css"/>
<script src="js/prefixfree.min.js"></script>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<title>Busqueda <?php echo $txt_criterio; ?> - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>

<link rel="stylesheet" type="text/css" href="Shadowbox/shadowbox.css">
<script type="text/javascript" src="Shadowbox/shadowbox.js"></script>
<script type="text/javascript">
	document.createElement('article');
	document.createElement('aside');
	document.createElement('figure');
	document.createElement('footer');
	document.createElement('header');
	document.createElement('hgroup');
	document.createElement('nav');
	document.createElement('section');

Shadowbox.init({
    displayCounter:false,
    handleOversize: "resize",
    modal: true, //evita que se cierre con click fuera del recuadro principal
    overlayColor: "#000",
    overlayOpacity: 0.8
});
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

			<article id="contenido715">
				<article id="busqueda">
				<?php 
					if 	($totalRows<>0)
					{ ?>
				    <div id="itemCampos">
						<article id="item_imagen">Imagen</article>
						<article id="item_nombre">Nombre</article>
						<article id="item_codigo">C&oacute;digo</article>
						<article id="item_descripcion">Descripci&oacute;n</article>
						<article id="item_ficha">Ficha</article>
						<!-- <article id="item_carrito">Comprar</article> -->
						<article id="item_precio">Precio</article>
					</div>
				<?php 
					foreach($query as $k => $row)
						{
						  	$peso = number_format($row["Peso"], 2, '.', ',');
						  	$iva = ($row["Precio"])*(1.16);
						  	$precioIVA=number_format(($iva), 2, '.', ',');			     	?>
									<div id="itm">
									<a href=".item.php?id=<?php echo $row['Clave_Producto'];  ?>" rel="shadowbox[item];width=800;height=488">
										<figure id="itm_imagen">  <img src="http://cerrajes.me/images/<?php echo $row['Clave_Producto'];  ?>.jpg"/> </figure>
										<article id="itm_nombre"><?php echo $row['Descripcion2'];  ?></article>
										<article id="itm_codigo"><?php echo $row['Clave_Producto'];  ?></article>
										<article id="itm_descripcion"><?php echo $row['Descripcion'];  ?></article>
									</a>
										<figure id="itm_ficha"><?php if ($row['cficha']) {?><a href="http://cerrajes.me/fichas/<?php echo  $row['cficha'].'.pdf';?>" target="_blank"> <img src="imagenesSitio/productos/adobe.jpg"> </a><?php } else {?><img src="imagenesSitio/productos/adobeG.jpg"><?php }?></figure>
										<!-- <figure id="itm_carrito"><a href="#"> <img src="imagenesSitio/productos/carrito.jpg"> </a></figure> -->
										<article id="itm_precio"> <?php echo '$ '.$precioIVA;?></article>
									</div>
					<?php	} 
					} else {
						echo "<article>no se encontraron coincidencias con '" .$txt_criterio. "'</article>";
					}
					?>
				</article>
			</article>
		</div>	
		<?php require (".footer.php") ?>
		<?php exit(""); ?>
	</div>
</body>
</html>