<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="js/googlemaps.js"></script>
        <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAHfYocY9LRpi1Usy7qamz4BRJPr4OMGDUGsod9sPZI3M-yok19hRLVJAtVPmSr3Kfx0_6Jg862MkRaQ" type="text/javascript"></script>
        <script type="text/javascript">
            window.onload = function(){
                var idMap = 'mappa';
                var idPercorso = 'percorso';
                var latitudineMarker = 40.9357049;
                var longitudineMarker = 14.7753978;
                var infoMarker = 'Dott.Salvatore Coppola - Oculista';
                initialize("mappa", "percorso", latitudineMarker, longitudineMarker, infoMarker);
            }
            window.onunload = function(){
                GUnload();
            }
        </script>
        <title>Dove sono | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Informazioni per raggiungere lo studio del Dott.Salvatore Coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
    <div id="contenuto">
        <div id="titolo_pagina_corrente">
            <img src="img/dovesono.png" />
        </div>
        <div id="testo_pagina_corrente" style="width:97%">
          <form action='#mappa' onSubmit='showDirection(); return false;'>
            <td><input type='hidden' id='fd_stato' value="Italia" /></td>
            <div style="padding-top:10px;">Inserire i dati di provenienza:</div>
            <div style="padding:10px;">
              <table>
                <tr>
                  <td>Provincia:</td>
                  <td><input type='text' id='fd_provincia' ></td>
                </tr>
                <tr>
                  <td>Comune:</td>
                  <td><input type='text' id='fd_comune' ></td>
                </tr>
                <tr>
                  <td>Via:</td>
                  <td><input type='text' id='fd_via' > <br></td>
                </tr>
              </table>
              <input type='submit' value='Mostra percorso'>
              <input type='button' value='Cancella percorso' onClick='cancella_percorso();'>
            </div>
            <div id="percorso"></div>
          </form>
          <div id="mappa" style="width:100%;height:400px;"></div>
        </div>
        <div id="sc_image"></div>
    </div>
<?php  require_once 'finish.php'?>