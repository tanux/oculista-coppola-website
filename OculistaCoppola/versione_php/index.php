<?php
require_once 'phpFlickr/phpFlickr.php';
$api_key = '767ae19556d2c879b81318eff5aa2467';
$secret = '84e7befb716ad97f';
$user_id = '61365587@N08';
$die_on_error = false;
$flickr = new phpFlickr($api_key,$secret,$die_on_error);
//$flickr->enableCache("db", "mysql://oculistacoppola:mino4ever@localhost/myoculistacoppola");
$photosets = $flickr->photosets_getList($user_id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Home Page | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Home page del sito del dottor salvatore coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
        <div id="contenuto">
            <div id="titolo_pagina_corrente">
                <img src="img/home_page.png" />
            </div>
            <div id="testo_pagina_corrente" style="width:560px;">
                L'oculistica (o oftalmologia, oftalmoiatria) &egrave; la branca della medicina che si occupa di prevenzione, diagnosi e terapia delle malattie dell'occhio, della misurazione della vista e della correzione dei vizi refrattivi. Si tratta di una delle discipline mediche pi&ugrave; antiche. Già nel Codice di Hammurabi più di 3600 anni fa furono promulgate regolamentazioni per operazioni agli occhi - il medico doveva ottenere una retribuzione di 10 scicli per un'operazione ad esito positivo, mentre in caso di esito negativo gli sarebbero state tagliate le mani. All'epoca ellenistica risalgono sia i primi studi accurati dell'anatomia dell'occhio (in particolare ad opera di Erofilo da Calcedonia, secondo quanto raccontato da Aezio di Amida)[senza fonte] che le prime operazioni di rimozioni della cataratta. Nel Medioevo il compito dell'oculista venne assunto dal cosiddetto "incisore della cataratta". Grazie ad un coltello speciale il cristallino opaco ("cataratta") veniva premuto dentro all'occhio. Johann Sebastian Bach morì in seguito ad un'operazione alla cataratta. Georg Friedrich Händel sopravvisse alla sua prima operazione, ma rimase cieco per tutta la sua vita.
                L'oculistica apparteneva inizialmente alla chirurgia e si è sviluppata solo nel corso del XVIII secolo, in particolare tuttavia nel XIX secolo come materia autonoma. Fino al XVIII secolo l'anatomia e la modalità di funzione dell'occhio era poco chiara. Solo a partire dal XIX secolo si scoprirono particolari grazie al frequente utilizzo del microscopio e sistematicamente utilizzabili per la terapia. nel 1800 Carl Gustav Himly coniò il termine oftalmologia, nello stesso anno Thomas Young descrisse l'astigmatismo.
                Le prime cliniche furono aperte all'inizio del XIX secolo a Erfurt e Budapest. La prima cattedra di oftalmologia fu occupata da Georg Joseph Beer (1763-1821) che nel 1818 era diventato ordinario di oculistica a Vienna. Precedentemente vi aveva aperto nel 1813 la prima clinica universitaria per malati agli occhi.
            </div>
            <div id="sc_image"></div>
        </div>
        <div id="content_box_news">
            <div id="box_news_immagini" class="box_news">
                <div class="titolo_box_news">Nuove Immagini</div>
                <div class="news"style="position: relative; margin-left: 10px; width: 248px; margin-top: 45px; height: 120px;">
                  <ul style="padding-left:20px; line-height:30px">
                    <?php
                      for($i=0; $i<4; $i++){
                        $id = $photosets['photoset'][$i]['id'];
                        $nome_album = $photosets['photoset'][$i]['title'];
                    ?>
                        <li type="circle" style="font-family:verdana; font-size:12px">Nuovo album:<strong><a href="immagini.php#<?php echo $id?>"><?php echo $nome_album?></a></strong>
                    <?php
                      }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="box_news_video" class="box_news">
                <div class="titolo_box_news">Nuovi Video</div>
                <div class="news"style="position: relative; border: 1px solid; margin-left: 10px; width: 248px; margin-top: 45px; height: 120px;">Notizia 1</div>
            </div>
        </div>
<?php  require_once 'finish.php'?>