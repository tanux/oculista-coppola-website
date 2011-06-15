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
        <title>Home Page | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Home page del sito del dottor salvatore coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
        <div id="contenuto">
            <div id="titolo_pagina_corrente">
                <img src="img/home_page.png" />
            </div>
            <div id="testo_pagina_corrente" style="width:560px;">
            </div>
            <div id="sc_image"></div>
        </div>
<?php  require_once 'finish.php'?>
