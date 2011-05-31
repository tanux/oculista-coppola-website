<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="form_validator/css/validationEngine.jquery.css" type="text/css"/>
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
            <p>
              Per maggiori informazioni potete lasciarci un messaggio compilando i seguenti campi: <br />
              <span style="font-style:italic; font-size:11px">* Indica che il campo è obbligatorio</span>
            </p>
            <form id="formID" action="" method="post">
              <label class="label_contatti">Nome *</label>
              <div class="input_text">
                <input class="validate[required,custom[onlyLetterSp],funcCall[checkin]] testo_input" type="text" id="nome" name="nome" value="Es: Mario" title="Es: Mario" />
              </div>
              <label class="label_contatti">Cognome *</label>
              <div class="input_text">
                <input class="validate[required,custom[onlyLetterSp],funcCall[checkin]] testo_input" type="text" id="cognome" name="cognome" value="Es: Rossi" title="Es: Rossi" />
              </div>
              <label class="label_contatti">Recapito Telefonico (fisso) *</label>
              <div class="input_text">
                <input class="validate[required,custom[italian_phone],funcCall[checkin]] testo_input" type="text" id="telefono" value="Es: 0811234567" title="Es: 0811234567" />
              </div>
              <label class="label_contatti">Recapito Telefonico (cellulare)</label>
              <div class="input_text">
                <input class="validate[custom[italian_cellphone]] testo_input" type="text" id="cellulare" value="Es:33912345678" title="Es:33912345678" />
              </div>
              <label class="label_contatti">Email</label>
              <div class="input_text">
                <input class="validate[custom[email],funcCall[checkin]] testo_input" type="text" id="email" value="Es: miaemail@sito.it" title="Es: miaemail@sito.it" />
              </div>
              <label class="label_contatti">Messaggio *</label>
              <div class="input_text" style="height:105px">
                <textarea class="validate[required,funcCall[checkin]] testo_messaggio" id="messaggio" title="Scrivere qui il proprio messaggio...">Scrivere qui il proprio messaggio...</textarea>
              </div>
              <label>
                <input class="validate[required,funcCall[checked]]" type="checkbox" id="consenso" name="consenso" style="display:inline;" />
                <span>Autorizzo il trattamento dei dati personali secondo il <a href="privacy.php">D.Lgs 196/2003</a></span>
              </label>
              <br />
              <input class="submit" type="submit" value="Invia" />
              <input type="reset" value="Cancella"/>
            </form>
        </div>
        <div id="sc_image"></div>
    </div>
    <script src="form_validator/js/language/jquery.validationEngine-it.js" type="text/javascript" charset="utf-8"></script>
    <script src="form_validator/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      jQuery(document).ready(function(){
        jQuery("#formID").validationEngine();
      });
      function checkin(field, rules, i, options){
        if (field.val() == field.attr('title')) {
          return options.allrules.required.alertText;
        }
      }
      function checked(field, rules, i, options){
        if (!field.attr('checked')) {
          return options.allrules.required.alertText;
        }
      }
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