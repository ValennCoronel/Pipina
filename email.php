<?php

$nombreCliente = $_POST['nombreCliente'];
$emailCliente  = $_POST['emailCliente'];
$asuntoCliente = $_POST['asuntoCliente']
$msjCliente    = $_POST['msjCliente'];

    $para    = $emailCliente;
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
                "<span>Felicitaciones <strong class='bold'>" . $nombreCliente . " . . .!</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p>Su formulario de Contacto funciona perfectamente...!</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Mensaje: </strong> " . $msjCliente . " </p>" .
                "<p>&nbsp;</p>" .
        "<p>¡Gracias por suscribirse a mi Canal </p>" .
        "<p>&nbsp;</p>" .
        "<p><span class='bold'> Wed Developer! </span></p>" .
        "<p>&nbsp;</p>" .
        "<p>".
            "<a title='WebDeveloper' href='https://blogangular-c7858.web.app'>". 
                "<img src='https://www.google.com/imgres?imgurl=https://yt3.ggpht.com/ytc/AAUvwnjY8Foc9Ct0-w-QRRywhm0ZpqWa311gaebiyY4y%3Ds900-c-k-c0x00ffffff-no-rj&imgrefurl=https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA&tbnid=DVxprGL7RdZC3M&vet=1&docid=gMUhMRzL85dPqM&w=900&h=900&source=sh/x/im' alt='Logo' width='100px'/>". 
            "</a>". 
        "</p>" .
    "</div>" .
    "</body>" .
"</html>";
    //Cabecera Obligatoria
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: WebDeveloper <programadorphp2017@gmail.com>' . "\r\n";
    $headers .= 'Cc: noresponder@pruebaroyalcanin.com.co' . "\r\n";
    
    //OPCIONAR
    $headers .= "Reply-To: "; 
    $headers .= "Return-path:"; 
    $headers .= "Cc:"; 
    $headers .= "Bcc:"; 
    
    mail($para, $titulo, $mensaje, $headers);

    
    
echo "<script>
    window.location='index.php';
</script>";

?>