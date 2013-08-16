<!doctype html>
<?php //Mandamos llamar este archivo donde contiene la cadena de conexión a SQL Server
include("sqlserver.inc.php");  

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

if (isset($id)) {
  $id = $id;
} else {
	$id='01';
}

if (isset($id_sublinea)) {
  $id_sublinea = $id_sublinea;
} else {
	$id_sublinea='01';
}

//Ya no usamos la clásica query de consulta como mysql_query ahora por definición de la función creada por adodb usamos la siguiente:
$query_menul= $db->Execute("SELECT t_sublinea.id_linea, t_sublinea.id, t_linea.descripcion, t_sublinea.sublinea, t_sublinea.descripcion as 'descripcion_sublinea' FROM t_sublinea
							 INNER JOIN t_linea ON t_sublinea.id_linea = t_linea.id
							 WHERE
							 t_sublinea.id = 1
							 ORDER BY t_sublinea.id_linea ASC");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_menul){
exit("Error en la consulta SQL");
}

$query_menusublinea= $db->Execute("SELECT id, sublinea, descripcion FROM t_sublinea WHERE id_linea = '$id' ORDER BY sublinea");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_menusublinea){
exit("Error en la consulta SQL");
}

$query_linea= $db->Execute("SELECT * FROM t_linea WHERE id = '$id'");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_linea){
exit("Error en la consulta SQL");
}

$query_txtsublinea= $db->Execute("SELECT t_linea.descripcion, t_sublinea.descripcion AS 'descripcion_sublinea', t_sublinea.frase, t_sublinea.sublinea, t_sublinea.id_linea
				FROM
				t_linea
				INNER JOIN t_sublinea ON t_linea.id = t_sublinea.id_linea
				WHERE
				t_sublinea.id_linea = '$id' AND
				t_sublinea.sublinea = '$id_sublinea'");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_txtsublinea){
exit("Error en la consulta SQL");
}

// mysql_select_db($database_productos, $productos);
// $query_product = sprintf("SELECT * FROM t_productos WHERE id_linea = '$id' AND id_sublinea = '$id_sublinea'");
// $product = mysql_query($query_product, $productos) or die(mysql_error());
// $row_product = mysql_fetch_assoc($product);
// $totalRows_product = mysql_num_rows($product);

?>
<?php $m=2; ?>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Productos - Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/lightbox.css"/>
<script src="js/prefixfree.min.js"></script>

<link rel="stylesheet" type="text/css" href="Shadowbox/shadowbox.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
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
</script>
</head>
<body>
	<div id="contenedorE">
		<div id="contenedor">
			<?php  require_once(".menu.php") ?>
			<article id="contenidoAuto">
				<article id="c_izqP">
					<article id="menuProdHome">
						<ul>
							<?php
							foreach($query_menul as $k1 => $row_menul) {
							?>
								<li><a href="productoA.php?id=<?php echo $row_menul['id_linea'];?>&id_sublinea=<?php echo $row_menul['sublinea'];?>" class="<?php if ($id==$row_menul['id_linea']){ echo activoP;} ?>"><?php echo $row_menul['descripcion'];?></a> </li>	
										<?php
											if ($row_menul['id_linea']==$id) {
											foreach($query_menusublinea as $k => $row_menusublinea)
											{	
												if (($row_menul['sublinea'] <> 99) AND ($row_menul['id_linea']==$id))
												{ 
													if (($row_menusublinea['sublinea'])==($id_sublinea))
													{
													?>
														<a class="sublinea sublineaActivo" >
													<?	echo $row_menusublinea['descripcion'].'</a>'; 
													} else
													{
													?>
														<a class="sublinea" href="productoA.php?id=<?php echo $row_menul['id_linea']; ?>&id_sublinea=<?php echo $row_menusublinea['sublinea'];?>">
													<?	echo $row_menusublinea['descripcion'].'</a>'; 														
													}

												}
											}
											}
											?>
							<?php }
							 ?>
						</ul>
					</article>
				</article>
				<article id="c_derP">
 <!-- cuando ya se ha seleccionado alguna sublinea entonces esta con valor <> 99 / si la linea no tiene sublineas entra directo a productos y el total de sublineas entonces es =1 por lo cual sublinea =99-->
						<section id="textoP"> 
							<span> 
							<?php 
							foreach($query_txtsublinea as $k => $row_txtsublinea)
							{
								if ($id_sublinea <> 99) 
									{
										echo $row_txtsublinea['descripcion'].' . ';
										echo $row_txtsublinea['descripcion_sublinea'].' ';  
									}
								else
									{
										echo $row_txtsublinea['descripcion'];
									}
							?>
							</span>
								<p ><?php echo $row_txtsublinea['frase'];  ?></p>
								<br>
								<p><?php echo $row_txtsublinea['texto'];  ?></p>
							<?php
							} ?>
						</section>
<!-- 						<?php if ($totalRows_product>0)
						{ ?>
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
								do 
								{ ?>
									<div id="itm">
									<a href=".itemA.php?id=<?php echo $row_product['codigo'];  ?>&line=<?php echo $row_product['id_linea'];  ?>&subline=<?php echo $row_product['id_sublinea'];  ?>" rel="shadowbox[item];width=800;height=488">
										<figure id="itm_imagen">  <img src="ver/ver.php?codigo=<?php echo $row_product['codigo'];  ?>"/> </figure>
										<article id="itm_nombre"><?php echo $row_product['nombre'];  ?></article>
										<article id="itm_codigo"><?php echo $row_product['codigo'];  ?></article>
										<article id="itm_descripcion"><?php echo $row_product['descripcion'];  ?></article>
									</a>
										<figure id="itm_ficha"><a href="#"> <img src="imagenesSitio/productos/adobe.jpg"> </a></figure>
										<figure id="itm_carrito"><a href="#"> <img src="imagenesSitio/productos/carrito.jpg"> </a></figure>
										<article id="itm_precio"> $999,999.99</article>
									</div>
							<?php } 
									while ($row_product = mysql_fetch_assoc($product));
						} //end if 
								?> -->
				</article>
			</article>
		</div>	
<?php exit("&nbsp;"); ?>
	</div>
</body>
</html>