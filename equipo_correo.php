<?php
//Guardamos en la variable $html el cuerpo del mensaje
$html = "
<!doctype html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>Tiendas Cerrajes - Forma parte del equipo</title>
<style type=\"text/css\">
  html {
    height: 100%;
  }
  a {
    color: #71BF44;
    text-decoration: none;
  }
  body{ 
    background-color:#FFFFFF;
    background-size: 100% 100%;
    background-position: center center;
    font-family: Calibri;
    font-size: 16px;
    height: 100%;
    text-align:left;
    margin:0 auto;
    z-index:0;
  }
  h1 {
    color: #666;
  }
  div {
    color: #333;
  }
  strong {
    color: #467A28;
  }
</style>
</head>
<body>
  <img src='http://208.106.249.229/directorio/imagenesSitio/logo.jpg' alt='Tiendas Cerrajes'>
  <h1>currículo de ".$_POST['nombre']."</h1>
  <div>
    <strong>Nombre: </strong>".$_POST['nombre']." <br>
    <strong>Estado: </strong>".$_POST['estado']." <br>
    <strong>Área de interés: </strong>".$_POST['interes']." <br>
    <a href='http://tiendascerrajes.com/equipo/".$_POST['interes']."/".$nombreArchivo."'>ver archivo</a>
  </div>
</body>
</html>
";
//Como queremos enviar el mensaje en formato html, colocamos las 2 cabeceras que nos permitirán hacerlo 
$headers = "MIME-Version: 1.0\r\n";  
$headers .= "Content-type: text/html; charset= iso-8859-1\r\n"; 
//Las siguientes 2 cabeceras, permitirán que el destinatario sepa a quién responder y quién le ha enviado el mensaje
$micorreo = "pcamacho@tiendascerrajes.com";/*pcamacho@tiendascerrajes.com*/
$headers .= "Reply-To: contacto@tiendascerrajes.com\r\n"; /*contacto@tiendascerrajes.com*/ 
$headers .= "From: Forma parte del equipo - Tiendas Cerrajes<contacto@tiendascerrajes.com>\r\n";/*contacto@tiendascerrajes.com*/
$headers .= 'Bcc: avega@cerrajes.com' . "\r\n";
//En este ejemplo suponemos que el mail del destinatario lo hemos enviado desde un formulario con el método post, pero es indistinto desde donde se lo obtenga (consulta a la base de datos, almacenado en una variable de sesi&oacute;n, enviado por get,etc.)
ini_set("SMTP","mail.tiendascerrajes.com");/*mail.tiendascerrajes.com*/
ini_set("smtp_port","587");/*25*/
ini_set("sendmail_from","mail.tiendascerrajes.com");	/*mail.tiendascerrajes.com*/
mail($micorreo, " (correo recibido de www.tiendascerrajes.com - Forma parte del equipo)\r\n", utf8_decode($html),$headers)or die ("Su mensaje no pudo ser enviado, intente mas tarde.");  
?>					

	
