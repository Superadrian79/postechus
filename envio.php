<?php

//************************* ENVIO DE EMAIL **********************************************************
include("mandaemail.inc");

if ( isset($_POST['direccionenvio']) && isset($_POST['paginaconfirmacion']) ) {
    $mailTo = $_POST['direccionenvio'];
    $mailFrom = $_POST['email'];
    $mailSubject = "Formulario de contacto postech.us";
    $now = date('d-m-Y');
    $empresa = $_POST['empresa'];
	$telefono = $_POST['telefono'];
	$comentarios = $_POST['comentarios'];
	$name = $_POST['nombre'];
	$paginac = $_POST['paginaconfirmacion'];
	

	/** MODIFIQUE AQUI EL CODIGO, INCLUYA UNA LINEA COMO LA DE  Nombre: $nombre Y
	'** DESPUES \n 
	'** PARA CADA CAMPO QUE HAYA AGREGADO SIN BORRAR <<<EOT y EOT; E INDIQUE EL
    FORMATO DEL CORREO */
$bodycorreo=
"<table width=\'700\' border=\"0\" bordercolor=\"#333333\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\"><tr><td><table width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td><img src=\"http://www.superadrian.com.mx/images/mensaje1.jpg\" width=\"700\" height=\"200\" alt=\"Mensaje Nuevo\" /></td></tr>
        <tr>
          <td  bgcolor=\"#000000\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#ffd200\"><h3>FECHA</h3></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#f4f4f4\">".$now."</font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#ffd200\"><h3>NOMBRE</h3></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#f4f4f4\">".$_POST['name']."</font></td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\">&nbsp;</td>
        </tr>		
        <tr>
          <td bgcolor=\"#000000\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#ffd200\"><h3>EMPRESA</h3></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#f4f4f4\">".$_POST['empresa']."</font></td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#ffd200\"><h3>TEL�FONO</h3></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#f4f4f4\">".$_POST['telefono']."</font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#ffd200\"><h3>EMAIL</h3></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#f4f4f4\">".$_POST['mailFrom']."</font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#000000\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#ffd200\"><h3>COMENTARIOS</h3></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#f4f4f4\">".$_POST['comentarios']."</font></td>
        </tr>
        <tr>
          <td bgcolor=\"#1f2532\">&nbsp;</td>
        </tr>
        <tr>
          <td><img src=\"http://www.superadrian.com.mx/images/mensaje2.jpg\" width=\"700\" height=\"72\" alt=\"http://www.superadrian.com.mx/\" /></td>
        </tr>
      </table></td>
    </tr>
  </table>";
  
$mailFormat = 0; // 0 para correo HTML o 1 para correo de texto
$mailBody = <<<EOT
/*
Fecha: $now\n
Nombre: $name\n
Empresa: $empresa\n
Telefono: $telefono\n
Email: $mailFrom\n
Cometarios:$comentarios\n
*/
$bodycorreo;
Fin del email
EOT;
  
  

    MandaEmail($mailTo,$mailFrom,$mailSubject,$mailBody,$mailFormat);	  		  		
    
    //***MANDA A LA P�GINA DE CONFIRMACION Y LE PASA LO QUE TRAEN LOS CAMPOS nombre y email
    
    Header("Location:". $_POST['paginaconfirmacion'] . "?nombre=" . $_POST['nombre'] . "&email=" . $_POST['email']);
    
    //*** FIN MANDA A LA P�GINA DE CONFIRMACION Y LE PASA LO QUE TRAEN LOS CAMPOS nombre y email
} else {

$head = '<?xml version="1.0" encoding="UTF-8"?>';
$head .= <<<EOT
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>CONTACTENOS</title>
<style type="text/css">
<!--
body { 
  font-family:"Lucida Grande","Lucida Console",sans-serif;
}
#content {
  font-size:0.8em;
    position:absolute;
    width:750px;
    left:50%;
    margin-left:-392px;
    margin-top:3em;
    padding:15px;
    border:2px solid gray;
}
#content h4 {
  font-family:"georgia",serif;
    font-size:1.5em;
    color:brown;
    font-variant:small-caps;
    margin-top:0;
}
-->
</style>
</head>

<body>

<div id="content">
<h4>Se han generado los siguientes errores</h4>
EOT;

	echo $head;

	if(!isset($_POST['direccionenvio'])) {
    	echo '<p>No se puede enviar el formulario porque el campo "direccionenvio" est&aacute; vac&iacute;o</p> $mailTo';
    }
    
    if(!isset($_POST['paginaconfirmacion'])) {
    	echo '<p>No se puede enviar el formulario porque el campo "paginaconfirmacion" est&aacute; vac&iacute;o</p>'.$_POST['paginaconfirmacion'];
    }
    
    $bott =<<<EOT
</div>
</body>
</html>
EOT;

	echo $bott; 
}
//**********************FIN ENVIO DE EMAIL **********************************************************
?>
