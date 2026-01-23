<?php

class head {
    var $lang;
    var $path;
    var $filename;

    function __construct($language, $leng, $filename) {
        $this->lang = $leng;
        $this->path = $language;
        $this->filename = $filename;
        echo '
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <meta name="keywords" content="consultoria, servicios, TI, monitoreo, big data, servicios, analisis, seguridad, informatica, seguridad informatica, perimetral, firewall, ids, ips, telecomunicaciones, TICS, BSM, BCM, DRP, BCP, ITIL, Cobit, ISO 27001, ISO 27002, ISO 27035, cert, csirt, noc , soc, seguridad informatica, capacitacion, cursos, TT, TICs, analisis de datos, mineria de datos, dataware, hosting, housing, desarrollo, politicas, normatividad, enisa, first, alapsi, 20/20, trafico, red, reconstruccion, desencripcion, ciber defensa, ciber seguridad, firewall" />
    <meta name="rights" content="POSTECH IT SOLUTION PROVIDER" />
    <meta name="description" content="Postech IT Solution Provider, Soluciones en monitoreo y seguridad de la información." />
    <meta name="robots" CONTENT="All">

    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../favicon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../favicon-57.png">

    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-icons.css">
    <link rel="stylesheet" href="../css/swiper.css">
    <link rel="stylesheet" href="../css/custom.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title -->
    <title>Postech IT Solution Provider</title>
</head>
        ';
    }
}
?>