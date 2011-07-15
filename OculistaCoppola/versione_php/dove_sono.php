<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>
        <link href='css/print.css' rel='stylesheet' type='text/css' media="print">
        <script type="text/javascript" src="js/googlemaps.js"></script>
        <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAHfYocY9LRpi1Usy7qamz4BQlXS8n1cS3OCdVQt8Ve_eGU6PzghSAwq2PfkMvOp-DmkYl13rp8ImXQw" type="text/javascript"></script>
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
      <script type="text/javascript" src="js/print_section.js"></script>
        <title>Dove sono | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Informazioni per raggiungere lo studio del Dott.Salvatore Coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
    <div id="contenuto">
      <div class="titolo_pagina_corrente" style="background-image:url('img/titoli_pagina.gif'); background-position:0px -180px"></div>
      <br />
      <div id="testo_pagina_corrente" style="width:97%">
        <span style="font-weight:bold;">Sede dello Studio:</span> Contrada Sant'Eustacchio, n.1 - 83100, Avellino
        <br /><br />
        <div id="mappa" style="width:90%;height:400px;margin:0 auto; margin-bottom:10px"></div>
        <br />
        <div class="titolo_pagina_corrente" style="background-image:url('img/titoli_pagina.gif'); background-position:0px -217px; height:35px"></div>
        <br />
        <form id="dati_provenienza" action='#mappa'>
          <div id="box_itinerario" style="background-image:url('img/bg_itinerario.jpg'); width:748px; height:236px; margin:0 auto;">
            <input type='hidden' id='fd_stato' value="Italia" />
            <span id="titolo_itinerario" style="font-size:26pt;font-family: 'Swanky and Moo Moo', arial, serif; position:relative; top:10px; left:230px;">Calcola il tuo itinerario</span>
            <span id="sottotitolo_itinerario" style="font-size:20pt;font-family: 'Swanky and Moo Moo', arial, serif; position:relative; top:40px; left:-290px;">Inserire i dati di provenienza</span>
            <div style="position:relative; top:50px; left:80px; width:400px">
              <table>
                <tr>
                  <td><span class="label_itinerario">Provincia:</span></td>
                  <td><input class="input_itinerario" name="provincia" type="text" id="fd_provincia"></td>
                </tr>
                <tr>
                  <td><span class="label_itinerario">Comune:</span></td>
                  <td><input class="input_itinerario" type="text" name="comune" id="fd_comune" ></td>
                </tr>
                <tr>
                  <td><span class="label_itinerario">Via:</span></td>
                  <td><input class="input_itinerario" type="text" id="fd_via" ></td>
                </tr>
              </table>
              <div id="pulsanti" style="position:relative; top:10px; left:75px;">
                <input id="mostra_percorso" class="button" type="submit" value='Mostra percorso' style="width:125px;" />
                <input id="cancella_percorso" class="button" type='button' value='Cancella percorso' style="width:125px;" />
              </div>
            </div>
          </div>
          <div id="printed">
            <h2>Itinerario per raggiungere lo studio del Dott.Coppola</h2>
            <strong id="info_start"></strong>
          </div>
          <div id="percorso">
            <div id="stampa_button" style="display:none; cursor:pointer; position:relative; width:150px; left:700px" onclick="stampa()">
              <span>Stampa Itinerario</span>
              <img src="img/print.png" alt="Logo Stampa">
            </div>
          </div>
        </form>
      </div>
      <div id="sc_image"></div>
    </div>
    <script type="text/javascript">
      $('#mostra_percorso').click(function(){
        if ( $('#fd_via').val() === '' || $('#fd_comune').val() === '' || $('#fd_provincia').val() === ''){
          alert("E' necessario compilare tutti i campi");
          return false;
        }
        else{
          $('#stampa_button').delay('500').fadeIn();
          showDirection();
          return false;
        }
      });
      $('#cancella_percorso').click(function(){
        cancella_percorso();
        $('#stampa_button').hide();
        $('.input_itinerario').val('');
      });
      function stampa()
      {
        comune = $("input[name=comune]").val();
        provincia = $("input[name=provincia]").val();
        $('#info_start').html('Partenza da: '+comune+' ('+provincia+')');
        window.print();
      }
    </script>
<?php  require_once 'finish.php'?>