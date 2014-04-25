<?php //Mandamos llamar este archivo donde contiene la cadena de conexión a SQL Server
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

if (isset($id)) {
  $id = $id;
} else {
  $id='03020412';
}

$query_product= $db->Execute("SELECT tblIC_Producto.Clave_Producto, t_linea.descripcion AS linea, t_sublinea.descripcion AS sublinea, cid_linea, cid_sublinea, Descripcion2, tblIC_Producto.Descripcion, Foto, tblIC_ProductoPrecio.Precio, Peso, cAlto, cAncho, cLargo, cMaterial, cAcabados, cMedida, cDescripcion3, Clave_UM, Comentario, cficha
FROM
tblIC_Producto
INNER JOIN tblIC_ProductoPrecio ON tblIC_Producto.Clave_Producto = tblIC_ProductoPrecio.Clave_Producto
INNER JOIN t_linea ON tblIC_Producto.cid_linea = t_linea.id
INNER JOIN t_sublinea ON tblIC_Producto.cid_linea = t_sublinea.id_linea AND tblIC_Producto.cid_sublinea = t_sublinea.sublinea
WHERE
(tblIC_Producto.Clave_Producto = '$id') AND
(tblIC_ProductoPrecio.Lista_Precio = 1) AND
(t_linea.id = tblIC_Producto.cid_linea ) AND
(t_sublinea.sublinea = tblIC_Producto.cid_sublinea)");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_product){
exit("Error en la consulta SQL");
}

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
<?php
foreach($query_product as $k => $row_product) 
{
  $iva = ($row_product["Precio"])*(1.16);
  $precioIVA=number_format(($iva), 2, '.', ',');  
?>  
  <section id="item">
   <div class="drop-shadow curved curved-hz-1"></div>
      <section id="sbit_titulo">
        <section id="sbit_nombre"><span><?php echo $row_product['Descripcion2'];  ?></span></section>
        <section id="sbit_familia"><span><?php echo $row_product['sublinea']; ?></span></section>
      </section>
      <section id="sbit_cuerpo">
        <section id="sbit_imagen">
          <section id="sbit_imgcentrar">
            <!-- <img src="http://cerrajes.me/images/<?php echo $row_product['Clave_Producto'];  ?>.jpg"> -->
            <img src="ver/ver.php?codigo=<?php echo $row_product['Clave_Producto'];  ?>">
          </section>
        </section>
        <section id="sbit_info">
          <section id="sbit_texto">
            <span>descripci&oacute;n</span> 
            <p><?php echo $row_product['cDescripcion3']; ?></p><br>
            <span>caracter&iacute;sticas</span><br>
            <section id="sbit_caract">
              <span class="sbit_caract">C&oacute;digo</span><p class="sbit_caract"><?php echo $row_product['Clave_Producto'];  ?></p>
              <span class="sbit_caract">UM</span><p class="sbit_caract"><?php echo strtolower($row_product['Clave_UM']);  ?></p>
              <span class="sbit_caract">Material</span><p class="sbit_caract"><?php echo ucfirst($row_product['cMaterial']);  ?></p>
              <span class="sbit_caract">Acabados</span><p class="sbit_caract"><?php echo ucfirst($row_product['cAcabados']);  ?></p>
              <span class="sbit_caract">Medida</span><p class="sbit_caract"><?php echo $row_product['cMedida'];  ?></p>
              <!-- <span class="sbit_caract">Caracter&iacute;sticas</span> -->
              <p class="sbit_caract100"><?php echo ucfirst($row_product['Comentario']);  ?></p>
              <span class="sbit_caract">Precio con IVA</span><p id="itm_precio" class="sbit_caract"><?php echo '$ '.$precioIVA;?></p> 
              <?php
                $umed=strtolower($row_product['Clave_UM']);//convertir a minusculas la unidad de medida
                if (($umed=='jgo') OR ($umed=='jg')) {  ?>
              <p class="derecha">precio por juego</p>
              <?php } else { ?>
              <p class="derecha">precio unitario</p>
              <?php } ?>
            </section>
            <figure><?php if ($row_product['cficha']) {?><a href="http://cerrajes.me/fichas/<?php echo  $row_product['cficha'].'.pdf';?>" target="_blank"><img src="imagenesSitio/productos/icon_adobe.jpg"></a><?php } else { ?> <img src="imagenesSitio/productos/icon_adobeG.jpg"><?php } ?> </figure>
            <!-- <figure><img src="Imagenessitio/productos/icon_carrito.jpg"></figure> -->
          </section>
        </section>
      </section>
            <section id="sbit_linea"><span><?php echo $row_product['linea']; ?></span></section>
            <div class="drop-shadow2 curved2 curved-hz-2"></div>
  </section>
<?php } ?>
</body>
</html>