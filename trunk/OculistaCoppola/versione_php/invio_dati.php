<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mario
 * Date: 28/05/11
 * Time: 17.26
 * To change this template use File | Settings | File Templates.
 */
 ?>
Riepilogo campi:<br>
<?php
	echo "Nome: $_POST[nome] <br>";
    echo "Cognome: $_POST[cognome] <br>";
    echo "Indirizzo: $_POST[indirizzo] <br>";
    echo "Citta': $_POST[citta]<br>";
    echo "CAP: $_POST[cap] <br>";
    echo "Telefono: $_POST[tel] <br>";
    echo "E-mail: $_POST[email] <br>";
	echo "Richiesta: $_POST[richiesta] <br>";

	$messaggio="Questa email ti è stata inviata dal sito. L'utente $_POST[nome] (a cui puoi rispondere a: $_POST[indirizzo], ti ha contattato per motivi di $_POST[richiesta].\n";

    mail("mariosperanza88@gmail.com", "Mail dal Sito", $messaggio, "From: mariosperanza@live.it");
?>