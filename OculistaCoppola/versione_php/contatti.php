<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Contatti | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Informazioni per contattare il Dott.Salvatore Coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
    <div id="contenuto">
        <div id="titolo_pagina_corrente">
            <img src="img/contatti.png" />
        </div>
        <div id="testo_pagina_corrente" style="width:860px">
            Il Dottor Salvatore Coppola si trova ad Avellino, Contrada Sant'Eustachio n�1 (vicino campo sportivo), e <b>riceve per appuntamento</b></br>
            </br>
            <table>
                <tr>
                    <td>
                        <img src="img/logo.jpg" alt="Logo Salvatore Coppola" style="width:37.5px; height:18.75px;">
                    </td>
                    <td width="40%">Studio</td>
                    <td>0825 22641</td>
                </tr>
                <tr>
                    <td>
                        <img src="img/logo.jpg" alt="Logo Salvatore Coppola" style="width:37.5px; height:18.75px;">
                    </td>
                    <td width="35%">Cellulare (Tre)</td>
                    <td>3356298388</td>
                </tr>
                <tr>
                    <td>
                        <img src="img/logo.jpg" alt="Logo Salvatore Coppola" style="width:37.5px; height:18.75px;">
                    </td>
                    <td width="40%">Cellulare (Wind)</td>
                    <td>3293036057</td>
                </tr>
                <tr>
                    <td>
                        <img src="img/logo.jpg" alt="Logo Salvatore Coppola" style="width:37.5px; height:18.75px;">
                    </td>
                    <td width="40%">E-mail</td>
                    <td>oculistacoppola@yahoo.it</td>
                </tr>
            </table>
            <br>Per maggiori informazioni potete lasciarci un messaggio compilando i seguenti campi: <br>
            
            <form action="invio_dati.php" method="post">
                <table width=450 border=0 cellpadding=2 cellspacing=2 bgcolor="">
                    <tr valign=top>
                        <td colspan=3><div align=left><br>
                    <tr valign=top>
                    <td align=right width=120 ><div align=left>Nome</div></td>
                        <td width=400>
                            <input name="nome" id="nome" type="text" size=30>
                        </td>
                    </tr>
                    <tr valign=top>
                        <td ><div align=left>Cognome</div></td>
                        <td ><input name="cognome"  type="text" id="cognome" size=30></td>
                    </tr>
                    <tr valign=top>
                        <td ><div align=left>Indirizzo</div></td>
                        <td ><input name=indirizzo type=text id=indirizzo size=30></td>
                    </tr>
                    <tr valign=top>
                        <td ><div align=left>Città</div></td>
                        <td>
                            <input name=citta  type=text id=citta size=30 >
                        </td>
                    </tr>
                    <tr valign=top>
                        <td><div align=left>CAP</div></td>
                        <td ><input name=cap type=text id=cap size=30></td>
                    </tr>
                    <tr valign=top>
                        <td><div align=left>Telefono</div></td>
                        <td><input name=tel type=text id=tel size=30></td>
                    </tr>
                    <tr valign=top>
                        <td><div align=left>E-mail:</div></td>
                        <td class=copyright><input name=email  type=text size=30></td>
                    </tr>
                    <tr valign=top>
                        <td colspan=2 >&nbsp;</td>
                    </tr>
                    <tr valign=top>
                        <td colspan=2 >
                            <div align=left>Richiesta<br>
                                <textarea name=richiesta cols=50 rows=5 wrap=hard id=richiesta></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr valign=top>
                        <td colspan=2 align=center><input type=submit class=button name=Invia value=Invia></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="sc_image"></div>
    </div>
<?php  require_once 'finish.php'?>