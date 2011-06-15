<?php
require_once 'phpFlickr/phpFlickr.php';
$api_key = '767ae19556d2c879b81318eff5aa2467';
$secret = '84e7befb716ad97f';
$user_id = '61365587@N08';
$die_on_error = false;
$flickr = new phpFlickr($api_key,$secret,$die_on_error);
//$flickr->enableCache("db", "mysql://oculistacoppola:mino4ever@localhost/myoculistacoppola");
$photosets = $flickr->photosets_getList($user_id);

require_once('youtube.php');
$feedURL = "http://gdata.youtube.com/feeds/api/videos?q=DottCoppolaVideo&key=AI39si6UrXS3Cqff8ehVvFhiXmx48Dpny4iAlR2B_FYVl4GEHrvznUQEI_NIgjhiGg93sjCzTjmC0KywrSyMIefh5BBiGfB3zg";
$sxml = simplexml_load_file($feedURL);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style type="text/css">
          ul{
            list-style-image:url('img/bullet.gif');
          }
          li{
            line-height:30px;
          }
        </style>
        <title>Home Page | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Home page del sito del dottor salvatore coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
        <div id="contenuto">
            <div class="titolo_pagina_corrente" style="background-image:url('img/titoli_pagina.gif'); background-position:0px -289px;"></div>
            <div id="testo_pagina_corrente" style="width:560px;">
              <ul>
                <li><a href="index.php">Home Page</a></li>
                <li><a href="biografia.php">Biografia</a></li>
                <li><a href="immagini.php">Immagini</a></li>
                <li><a href="video.php">Video</a></li>
                <li><a href="contatti.php">Contatti</a></li>
                <li><a href="dove_sono.php">Dove Sono</a></li>
                <li><a href="note_legali.php">Note Legali</a></li>
              </ul>
            </div>
            <div id="sc_image"></div>
        </div>
<?php  require_once 'finish.php'?>
