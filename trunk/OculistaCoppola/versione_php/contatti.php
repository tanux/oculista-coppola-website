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
            <p> Per maggiori informazioni potete lasciarci un messaggio compilando i seguenti campi: </p>
            <form action="invio_dati.php" method="post">
              <label>Nome e Cognome</label>
              <div class="input_text">
                <input class="testo_input" type="text" id="nome" value="Es: Mario Rossi" title="Es: Mario Rossi">
              </div>
              <label>Recapito Telefonico</label>
              <div class="input_text">
                <input class="testo_input" type="text" id="telefono" value="Es: 081-1234567" title="Es: 081-1234567">
              </div>
               <label>Indirizzo</label>
              <div class="input_text">
                <input class="testo_input" type="text" id="indirizzo" value="Es: Via/Piazza Cristoforo Colombo, 12" title="Es: Via/Piazza Cristoforo Colombo, 12">
              </div>
              <label>Citt&agrave;</label>
              <div class="input_text">
                <input class="testo_input" type="text" id="citta" value="Es: Nocera Inferiore" title="Es: Nocera Inferiore">
              </div>
              <label>Provincia</label>
              <div class="input_text">
                <input class="testo_input" type="text" id="provincia" value="Es: Salerno" title="Es: Salerno">
              </div>
              <label>Email</label>
              <div class="input_text">
                <input class="testo_input" type="text" id="email" value="Es: miaemail@sito.it" title="Es: miaemail@sito.it">
              </div>
              <label>Messaggio</label>
              <div class="input_text" style="height:105px">
                <textarea class="testo_messaggio" id="messaggio" title="Scrivere qui il proprio messaggio...">Scrivere qui il proprio messaggio...</textarea>
              </div>
              <div>
                <input id="consenso" type="checkbox" style="margin:0px;">
                Autorizzo il trattamento dei dati personali secondo il <a href="privacy.php">D.Lgs 196/2003</a>
              </div>
              <input type="submit" value="Invia"/>
              <input type="reset" value="Cancella"/>
            </form>
        </div>
        <div id="sc_image"></div>
    </div>
    <script type="text/javascript" charset="utf-8">
      function switchText()
      {
        if ($(this).val() == $(this).attr('title'))
        {
          $(this).val('').addClass('testo_input');
          $(this).css({background:'#FFFFCC'});
          $(this).parent().css({background:'#FFFFCC'});
          $(this).css({color:'#000000'});
        }
        else if ($.trim($(this).val()) == '')
        {
          $(this).addClass('testo_input').val($(this).attr('title'));
          $(this).css({background:'#FFFFFF'});
          $(this).parent().css({background:'#FFFFFF'});
          $(this).css({color:'#999999'});
        }          
      }
      function switchTextArea()
      {
        if ($(this).val() == $(this).attr('title'))
        {
          $(this).val('').addClass('testo_messaggio');
          $(this).css({background:'#FFFFCC'});
          $(this).parent().css({background:'#FFFFCC'});
          $(this).css({color:'#000000'});
        }
        else if ($.trim($(this).val()) == '')
        {
          $(this).addClass('testo_messaggio').val($(this).attr('title'));
          $(this).css({background:'#FFFFFF'});
          $(this).parent().css({background:'#FFFFFF'});
          $(this).css({color:'#999999'});
        }

      }
      $('input[type=text][title!=""]').each(function() {
        if ($.trim($(this).val()) == '') $(this).val($(this).attr('title'));
        if ($(this).val() == $(this).attr('title')) $(this).addClass('testo_input');
      }).focus(switchText).blur(switchText);
      $('textarea[title!=""]').each(function() {
        if ($.trim($(this).val()) == '') $(this).val($(this).attr('title'));
        if ($(this).val() == $(this).attr('title')) $(this).addClass('testo_messaggio');
      }).focus(switchTextArea).blur(switchTextArea);
    </script>
<?php  require_once 'finish.php'?>