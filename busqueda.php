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
	$txt_criterio='cerrajes';
}
//Ya no usamos la clásica query de consulta como mysql_query ahora por definición de la función creada por adodb usamos la siguiente:
$query= $db->Execute("SELECT    tblIC_Producto.Clave_Producto, Descripcion2, Descripcion, Foto, tblIC_ProductoPrecio.Precio,  Peso, Clave_Categoria, Clave_Categoria_Sub_1, cAlto, cAncho, cLargo, cMaterial, cAcabados, cMedida, cDescripcion3, Clave_UM, Comentario, clave_proveedor

		FROM         tblIC_Producto  INNER JOIN
		          tblIC_ProductoPrecio ON tblIC_Producto.Clave_Producto = tblIC_ProductoPrecio.Clave_Producto
		WHERE
		(dbo.tblIC_ProductoPrecio.Lista_Precio = 1) AND
		/*(dbo.tblIC_Producto.Peso > 0) AND*/
		((dbo.tblIC_Producto.Descripcion LIKE '%" . $txt_criterio . "%') OR (dbo.tblIC_Producto.Clave_Producto LIKE '%" . $txt_criterio . "%'))
		ORDER BY
		tblIC_Producto.Clave_Producto ASC");

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
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<title>Busqueda <?php echo $txt_criterio; ?> - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
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

			<article id="contenido715">
				<article id="busqueda">
				    <div id="itemCampos">
						<article id="item_imagen">Imagen</article>
						<article id="item_nombre">Nombre</article>
						<article id="item_codigo">C&oacute;digo</article>
						<article id="item_descripcion">Descripci&oacute;n</article>
						<article id="item_ficha">Ficha</article>
						<article id="item_carrito">Comprar</article>
						<article id="item_precio">Precio</article>
					</div>
					<?php 
					foreach($query as $k => $row)
						{
					$precio = number_format($row["Precio"], 2, '.', ',');
				  	$peso = number_format($row["Peso"], 2, '.', ',');
				  	$precioIVA=number_format((($precio)*(1.16)), 2, '.', ',');
				  	$b=$k+1;
						 //echo $b."<br>";
					     // echo "C&oacute;digo: ".$row["Clave_Producto"]."<br>";
					     // echo "Nombre: ".$row["Descripcion2"]."<br>";
					     // echo "Descripci&oacute;n: ".$row["Descripcion"]."<br>";
					     // echo "Alto: ".$row["cAlto"]."<br>";
					     // echo "Ancho: ".$row["cAncho"]."<br>";
					     // echo "Largo: ".$row["cLargo"]."<br>";
					     // echo "Acabado: ".$row["cAcabados"]."<br>";
					     // echo "Medida: ".$row["cMedida"]."<br>";
					     // echo "Descripci&oacute;n: ".$row["cAcabados"]."<br>";
					     // echo "UM: ".$row["Clave_UM"]."<br>";
					     // echo "Caracteristicas: ".$row["Comentario"]."<br>";
					     // echo "Material: ".$row["cMaterial"]."<br>";
					     // echo "Peso: ".$peso."<br>";
					     // echo "Precio: ".$precio."<br>"."<br>";
			     	?>
									<div id="itm">
										<section><?php echo $row['registros']; ?></section>
										<figure id="itm_imagen"> <img src="ver/ver.php?codigo=<?php echo $row['Clave_Producto'];  ?>"/> </figure>
										<article id="itm_nombre"><?php echo $row['Descripcion2'];  ?></article>
										<article id="itm_codigo"><?php echo $row["Clave_Producto"];  ?></article>
										<article id="itm_descripcion"><?php echo $row["Descripcion"];  ?></article>
										<figure id="itm_ficha"> <img src="imagenesSitio/productos/adobe.jpg"> </figure>
										<figure id="itm_carrito"> <img src="imagenesSitio/productos/carrito.jpg"> </figure>
										<article id="itm_precio"> <?php echo $precioIVA;?> </article>
									</div>
							<?php
						}
						exit("&nbsp;");
					?>
				</article>
			</article>
		</div>	
	</div>
</body>
</html>