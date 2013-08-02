<?php header("Content-type: text/css"); 

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
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
/*ahora solo hay que llamar las variables por su nombre ej: http://misitio.com/estearchivo.php?usuario=cristalab&password=sangre
para verlas solo pones la variable por su nombre
echo "nombre de usuario: ".$usuario."<br>password: ".$password;
en vez de usar $_GET['usuario'] y $_GET['password']
*/

if (isset($id)) {
  $id = $id;
} else {
	$id='00';
}

if (isset($id_sublinea)) {
  $id_sublinea = $id_sublinea;
} else {
	$id_sublinea='00';
}
?>
.btnProducto<?php echo $id_sublinea; ?> {	
	background-image: url(../imagenesSitio/productos/<?php echo $id; ?>/<?php echo $id_sublinea; ?>/<?php echo $id_sublinea; ?>_inactivo.jpg); 
	width: 194px; 
	height: 152px; 
	background-repeat: no-repeat;
}
.btnProducto<?php echo $id_sublinea; ?>:hover {	
	background-image: url(../imagenesSitio/productos/<?php echo $id; ?>/<?php echo $id_sublinea; ?>/<?php echo $id_sublinea; ?>_activo.jpg); 
	cursor: pointer;	
  transition: all 1s ease; 
  transform: scale(0.95);
}
