<?php
$nome      =  trim($_GET['nome']);
$cognome   =  trim($_GET['cognome']);
$telefono  =  trim($_GET['telefono']);
$email     =  trim($_GET['email']);
if (empty($email))
  $email = "L'utente non ha specificato un indirizzo email";
$messaggio =  trim(htmlspecialchars($_GET['messaggio']));

$oggetto = "Messaggio inviato da www.oculistacoppola.it";
$headers = 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: '.$email;

$message =  "<html>
                <head>
                    <title> $oggetto </title>
                </head>
            <body>
                <p>----------------------------------------</p>
                <b>Nome e Cognome:</b> $nome $cognome<br />
                <b>Recapito Telefonico:</b> $telefono<br />
                <b>Email:</b> $email<br />
                <b>Testo del messaggio:</b><br />
                <p>$messaggio</p>
                <p>----------------------------------------</p>
            </body>
            </html>";
$message = str_replace("\\", "",$message);
$destinatario = "mariosperanza88@gmail.com";

$arrayToJs = array();
if (mail($destinatario,$oggetto,$message,$headers))
  $arrayToJs[0] = true;
else
  $arrayToJs[0] = false;

echo json_encode($arrayToJs);

?>
