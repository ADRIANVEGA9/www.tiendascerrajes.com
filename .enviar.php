<?php

$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";
//Guardamos en la variable $html el cuerpo del mensaje
	$html = "
	<html >
	<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<title>Compartir contenido</title>
	<body>
	Hola ". $_POST['recomiendaN2'] ."<br/>
	Tu amigo ". $_POST['recomiendaN1'] ." quiere compartir este contenido de Tiendas Cerrajes contigo <br/>
	<a href=\"".$url."\"> Ver contenido</a><br/>
	TIENDAS CERRAJES<br/>Un espacio creativo e innovador para ti.
	</body>
	</html>
	";
	//Como queremos enviar el mensaje en formato html, colocamos las 2 cabeceras que nos permitirán hacerlo 
	$headers = "MIME-Version: 1.0\r\n";  
	$headers .= "Content-type: text/html; charset= utf-8\r\n"; 
	//Las siguientes 2 cabeceras, permitirán que el destinatario sepa a quién responder y quién le ha enviado el mensaje
	$micorreo = "avega@cerrajes.com";/*contacto@tiendascerrajes.com*/
	$correoAmigo = "$_POST[recomiendaE2]";
	$headers .= "Reply-To:". "$_POST[recomiendaE1]"."\r\n"; /*contacto@tiendascerrajes.com*/ 
	$headers .= "From:". "<".$_POST[recomiendaN1].">\r\n";/*contacto@tiendascerrajes.com*/
	$headers .= 'Bcc: sistemas@cerrajes.com' . "\r\n";
	//En este ejemplo suponemos que el mail del destinatario lo hemos enviado desde un formulario con el método post, pero es indistinto desde donde se lo obtenga (consulta a la base de datos, almacenado en una variable de sesi&oacute;n, enviado por get,etc.)
	ini_set("SMTP","mail.cerrajes.com");/*mail.tiendascerrajes.com*/
	ini_set("smtp_port","587");/*25*/
	ini_set("sendmail_from","mail.cerrajes.com");	/*mail.tiendascerrajes.com*/
	$asunto = "recomendación de "."$_POST[recomiendaN1]"." - vía www.tiendascerrajes.com\r\n";
	mail($correoAmigo, utf8_decode($asunto), utf8_decode($html),$headers)or die ("Su mensaje no pudo ser enviado, intente mas tarde."); 
	?>					
	<article id="compartido">
		<br/>
		Gracias por compartir este contenido.
 	</article>
