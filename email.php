<?php

$nombreCliente = $_POST['nombreCliente'];
$emailCliente  = $_POST['emailCliente'];
$asuntoCliente = $_POST['asuntoCliente'];
$msjCliente    = $_POST['msjCliente'];

    $para    = "coronel.valentino@hotmail.com";
    $nameFull = "Pipina";
    $titulo  = "Mi Formulario de Contacto";
    $mensaje = "<html>".
    "<head><title>Email de Prueba</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        padding: 40px;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .bold{
        color:#333;
        font-size:25px;
        font-weight:bold;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px 0px 20px 0px;
    }
    </style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Hola PIPINA! recibiste un mail de: <strong class='bold'>" . $nombreCliente . " !</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p> Ya podes leer el mensaje y contactarte con tu cliente</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Mensaje: </strong> " . $msjCliente . " </p>" .
                "<p>&nbsp;</p>" .

    "</div>" .
    "</body>" .
"</html>";
    //Cabecera Obligatoria
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$nombreCliente .' <'.$emailCliente. '>' . "\r\n";
    $headers .= 'Cc:'. $emailCliente . "\r\n";
    
 
    
    mail("info@pipina-higiene.com", $asuntoCliente, $mensaje, $headers);

    
    
echo "<script>
    window.location='index.php';
</script>";
