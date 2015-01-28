<?php
set_time_limit(0);
$a_descargaCatalogo = implode(',',$_POST['descargaCatalogo']);
//Guardamos en la variable $html el cuerpo del mensaje
$html = "
<html >
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Documento sin título</title>
<style type=\"text/css\">
html {
height: 100%;
}
body{ 
background-color:#FFFFFF;
background-size: 100% 100%;
background-position: center center;
	height: 100%;
	text-align:left;
	margin:0 auto;
	z-index:0;
}
#centro {
	margin:0 auto;
	top:0px;
	z-index:1;
	width: 1024px;
}
#Principal {
	position:absolute;
	margin:0 auto;
	top:50px;
	z-index:20;
	width:1023px;
	left:0 auto;
	height: 26px;
}
#apDiv2 {
	position:absolute;
	left:78px;
	top:118px;
	width:147px;
	height:49px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:0px;
	top:202px;
	width:297px;
	height:69px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:777px;
	top:349px;
	width:188px;
	height:56px;
	z-index:2;
}
#apDiv5 {
	position:absolute;
	left:111px;
	top:197px;
	z-index:2;
}
#apDiv6 {
	position:absolute;
	left:492px;
	top:208px;
	z-index:2;
}
#apDiv7 {
	position:absolute;
	left:492px;
	top:380px;
	z-index:2;
}
#comenta {
	position:absolute;
	left:70px;
	top:60px;
	width:873px;
	height:407px;
	z-index:1;
}
#comentaImg {
	position:absolute;
	left:1px;
	top:320px;
	width:147px;
	height:49px;
	z-index:1;
}
.estilo1 {
	font-family: Calibri, \"Trebuchet MS\";
	font-size:11px;
	color:#80817C;
	text-align:left;
}
.estilo2 {
	font-family: Calibri, \"Trebuchet MS\";
	font-size:8px;
	color:#80817C;
	text-align:left;
}
.estilo3 {
	font-family: Calibri, \"Trebuchet MS\";
	font-size:11px;
	color:#80817C;
	text-align:left;
	}
</style>
</head>
<body>
<div id=\"centro\">	
<div id=\"comenta\">
    <table width=\"858\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td colspan=\"1\"width=\"182\" class=\"estilo3\">registro en www.cerrajes.com</td>
        <td colspan=\"2\">&nbsp;</td>
        </tr>
      <tr>
        <td colspan=\"4\">&nbsp;</td>
        </tr>
      <tr>
        <td class=\"estilo1\">Nombre</td>
        <td class=\"estilo1\" colspan=\"2\">".htmlspecialchars($_POST['nombreD'])."</td>
        </tr>
      <tr>
        <td class=\"estilo1\">Correo electr&oacute;nico</td>
        <td class=\"estilo1\" colspan=\"2\">".htmlspecialchars($_POST['correoD'])."</td>
        </tr>
      <tr>
        <td class=\"estilo1\">Ciudad</td>
        <td class=\"estilo1\" colspan=\"2\">".htmlspecialchars($_POST['ciudadD'])."</td>
        </tr>
      <tr>
        <td class=\"estilo1\">Estado</td>
        <td class=\"estilo1\" colspan=\"2\">".htmlspecialchars($_POST['estadoD'])."</td>
        </tr>
      <tr>
        <td class=\"estilo1\">Dirigido a:</td>
        <td class=\"estilo1\" colspan=\"2\">".htmlspecialchars($_POST['dirigidoD'])."</td>
        </tr>
      <tr>
        <td class=\"estilo1\">Catálogo(s):</td>
        <td class=\"estilo1\" colspan=\"2\">".htmlspecialchars($a_descargaCatalogo)."</td>
        </tr>
      <tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan=\"2\" align=\"right\"></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan=\"2\">&nbsp;</td>
        </tr>
    </table>
</div></div>

";
//Como queremos enviar el mensaje en formato html, colocamos las 2 cabeceras que nos permitirán hacerlo 
$headers = "MIME-Version: 1.0\r\n";  
$headers .= "Content-type: text/html; charset= iso-8859-1\r\n"; 
//Las siguientes 2 cabeceras, permitirán que el destinatario sepa a quién responder y quién le ha enviado el mensaje
$micorreo = "avega@cerrajes.com";/*contacto@cerrajes.com*/
$correoCli = "$_POST[correoD]";
$headers .= "Reply-To: contacto@tiendascerrajes.com\r\n"; /*contacto@tiendascerrajes.com*/ 
$headers .= "From: Contacto Tiendas Cerrajes<contacto@tiendascerrajes.com>\r\n";/*contacto@cerrajes.com*/
$headers .= 'Bcc: avega@cerrajes.com' . "\r\n";
//En este ejemplo suponemos que el mail del destinatario lo hemos enviado desde un formulario con el método post, pero es indistinto desde donde se lo obtenga (consulta a la base de datos, almacenado en una variable de sesi&oacute;n, enviado por get,etc.)
ini_set("SMTP","mail.cerrajes.com");/*mail.cerrajes.com*/
ini_set("smtp_port","587");/*25*/
ini_set("sendmail_from","mail.cerrajes.com");	/*mail.cerrajes.com*/
mail($micorreo, utf8_decode("Tiendas Cerrajes, Un espacio creativo e innovador diseñado para ti...\r\n"), utf8_decode($html),$headers)or die ("<article id='enviado'>Su mensaje no pudo ser enviado, intente mas tarde.</article>");  
$htmlCliente ="<html lang=\"es\">
		<head>
		<meta charset=\"utf-8\">
		<title>Documento sin título</title>
		<style type=\"text/css\">
		html {
		height: 100%;
		}
		body{ 
			background-color:#FFFFFF;
			background-size: 100% 100%;
			background-position: center center;
			height: 100%;
			text-align:left;
			margin:0 auto;
			z-index:0;
		}
		.estilo3 {
			font-family: Calibri, \"Trebuchet MS\";
			font-size:11px;
			color:#80817C;
			text-align:left;
		}
		</style>
		</head>
		<body>
		<div align=\"center\"><br>
			<figure><img src=\"http://cerrajes.me/registro/agradecimiento.jpg\"></figure>
		</div>
		</body>
		</html>	
		";
mail($correoCli, utf8_decode("Tiendas Cerrajes, Un espacio creativo e innovador diseñado para ti...\r\n"), utf8_decode($htmlCliente),$headers)or die ("Su mensaje no pudo ser enviado, intente mas tarde."); 
?>				
	<article id="enviado">
		GRACIAS <br> POR REGISTRARTE<br />
		<?php 
			require '_comprimir.php'; 
			require '_deleteFile.php'
		?>
		<figure class="enviado"><img src="imagenesSitio/catalogos/bisagra_web.png" alt=""></figure>
 	</article>
<!-- Código para doppler -->
<?php
/* This Doppler API Example use an existing library known as NUSOAP V0.7.1
* Information about this lib can be found at http://sourceforge.net/projects/nusoap/ 
*/
/*require'nusoap/nusoap.php';

$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
$client = new nusoap_client('http://api.fromdoppler.com/Default.asmx?wsdl', 'wsdl',
						$proxyhost, $proxyport, $proxyusername, $proxypassword);
$err = $client->getError();
if ($err) {
	echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

// $estado = array('Customfieldid' => 22121,'Value' => $_POST['estado']);
// $empresa = array('Customfieldid' => '22097','Value' => $_POST['empresa']);
// $telefono = array('Customfieldid' => '22099','Value' => $_POST['telefono']);

$estado = array('Customfieldid' => '37328','Value' => utf8_decode($_POST['estadoD']));
$ciudad = array('Customfieldid' => '37327','Value' => utf8_decode($_POST['ciudadD']));
$dirigido = array('Customfieldid' => '37329','Value' => utf8_decode($_POST['dirigidoD']));
$catalogo = array('Customfieldid' => '37330','Value' => utf8_decode($a_descargaCatalogo));
$param = array('APIKey' => 'D70B127D876B4339C7B896A7E28E336D',
		'SubscribersListID' => '591461',
		'FirstName' => utf8_decode($_POST['nombreD']),
		'EMail' => $_POST['correoD'],
		'CustomsFields' => array('customField' => array($estado,$ciudad,$dirigido,$catalogo))
		);	
$result = $client->call('AddSubscriberwithNameandCustoms', $param);
// Check for a fault

if ($client->fault) {
	echo '<h2>Fault</h2><pre>';
	print_r($result);
	echo '</pre>';
} else {
	// Check for errors
	$err = $client->getError();
	if ($err) {
		// Display the error
		echo '<h2>Error</h2><pre>' . $err . '</pre>';
	} 
}

/***********************************************/
/***********************************************/
?>
<!-- termina código doppler -->	