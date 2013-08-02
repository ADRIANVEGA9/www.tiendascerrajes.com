<?php require_once('Connections/productos.php'); ?>
<?php
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
  $id='9900';
}

mysql_select_db($database_productos, $productos);
$query_product = sprintf("SELECT * FROM t_productos WHERE id_linea = '$line' AND id_sublinea = '$subline' AND codigo = '$id'");
$product = mysql_query($query_product, $productos) or die(mysql_error());
$row_product = mysql_fetch_assoc($product);
$totalRows_product = mysql_num_rows($product);

mysql_select_db($database_productos, $productos);
$query_linea = sprintf("SELECT descripcion FROM t_linea WHERE id = '$line' ");
$linea = mysql_query($query_linea, $productos) or die(mysql_error());
$row_linea = mysql_fetch_assoc($linea);
$totalRows_linea = mysql_num_rows($linea);

mysql_select_db($database_productos, $productos);
$query_sublinea = sprintf("SELECT descripcion FROM t_sublinea WHERE id_linea = '$line' AND sublinea='$subline' ");
$sublinea = mysql_query($query_sublinea, $productos) or die(mysql_error());
$row_sublinea = mysql_fetch_assoc($sublinea);
$totalRows_sublinea = mysql_num_rows($sublinea);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=ISO-8859-1">
<title>Tiendas Cerrajes&reg; Un espacio creativo e innovador dise&ntilde;ado para ti...</title>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/normalize.css">
<script src="js/prefixfree.min.js"></script>
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
</head>
<body style="background-color: rgba(255, 255, 255, 0.90)">

    <section id="item">
	<div class="drop-shadow curved curved-hz-1"></div>
        	<section id="sbit_titulo">
	          <section id="sbit_nombre"><span><?php echo $row_product['nombre'];  ?></span></section>
	          <section id="sbit_familia"><span><?php echo $row_sublinea['descripcion']; ?></span></section>
          </section>
          <section id="sbit_cuerpo">
          		<section id="sbit_imagen">
                <section id="sbit_imgcentrar">
                  <img src="ver/ver.php?codigo=<?php echo $row_product['codigo'];  ?>">
                </section>
              </section>
          		<section id="sbit_info">
                  <section id="sbit_texto">
                    <span>descripci&oacute;n</span> 
                    <p>
                   <?php echo $row_product['descripcionL'];  ?>
                    </p><br>
                    <span>caracter&iacute;sticas</span>
                    <br>
                    <section id="sbit_caract">
                      <span class="sbit_caract">C&oacute;digo</span><p class="sbit_caract"><?php echo $row_product['codigo'];  ?></p>
                      <span class="sbit_caract">UM</span><p class="sbit_caract"><?php echo $row_product['um'];  ?></p>
                      <span class="sbit_caract">Material</span><p class="sbit_caract"><?php echo $row_product['material'];  ?></p>
                      <span class="sbit_caract">Acabados</span><p class="sbit_caract"><?php echo $row_product['acabado'];  ?></p>
                      <span class="sbit_caract">Medida</span><p class="sbit_caract"><?php echo $row_product['medida'];  ?></p>
                      <span class="sbit_caract">Caracteristicas</span><p class="sbit_caract"><?php echo $row_product['caracteristicas'];  ?></p>
                      <span class="sbit_caract">Precio</span><p id="itm_precio" class="sbit_caract"><?php echo "$999,999.99";  ?></p>
                       
                    </section>
                  <figure><img src="imagenesSitio/productos/icon_adobe.jpg"><img src="Imagenessitio/productos/icon_carrito.jpg"></figure>
                  </section>
                </section>
          </section>
              <section id="sbit_linea"><span><?php echo $row_linea['descripcion']; ?></span></section>
              <div class="drop-shadow2 curved2 curved-hz-2"></div>
    </section>
</body>
</html>