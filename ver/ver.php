<? 
include '../connections/conexion.php';
$codigo = (isset($_GET["codigo"])) ? $_GET["codigo"] : exit();
$sql = "SELECT imagen
                FROM t_imagenes 
                WHERE codigo = $codigo";
# Conexi&oacute;n a la base de datos
$conn = mysql_query($sql, $link) or die(mysql_error($link));
$datos = mysql_fetch_array($conn);
// La imagen
$imagen = $datos[0];
// que acabamos de recuperar del campo blob
header("Content-Type: image/png");
// Muestra la imagen
echo $imagen; 
?> 
