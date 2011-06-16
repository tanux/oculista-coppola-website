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
            padding-left:20px;
            line-height:30px;
            list-style-image:url('img/bullet.gif');
          }
          li{
            font-family:verdana;
            font-size:12px;
          }
        </style>
        <title>Home Page | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Home page del sito del dottor salvatore coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
        <div id="contenuto">
            <div class="titolo_pagina_corrente" style="background-image:url('img/titoli_pagina.gif')"></div>
            <div id="testo_pagina_corrente" style="width:395px; float:left; font-size:15px; padding-bottom:0px">
              oculistacoppola.it nasce dall’idea del Dott.Coppola Salvatore  di condividere le sue
              esperienze e far conoscere il proprio lavoro su larga scala, attraverso l’utilizzo del web.
              <br /><br />
              Le sezioni immagini e video (in costante aggiornamento) mostrano i risultati maturati negli
              anni con l’accrescere dell’esperienza nel campo dell’oculistica.
              <br /><br />
              Attualmente esercita le proprie competenze presso l’A.S.L. di Avellino ed è coordinatore
              del servizio di chirurgia oculare presso la struttura ospedaliera di Sant’Angelo dei Lombardi.
            </div>
            <div id="thumb_coppola" style="width:474px; height:329px; margin-left:405px;background-image:url('img/thumb_home.png')"></div>
            <div id="content_box_news">
              <div id="box_news_immagini" class="box_news">
                  <div class="titolo_box_news">Nuove Immagini</div>
                  <div class="news"style="position: relative; margin-left: 10px; width: 248px; margin-top: 45px; height: 120px;">
                    <ul>
                      <?php
                        for($i=0; $i<4; $i++){
                          $id = $photosets['photoset'][$i]['id'];
                          $nome_album = $photosets['photoset'][$i]['title'];
                      ?>
                          <li><strong><a href="immagini.php#<?php echo $id?>"><?php echo $nome_album?></a></strong>
                      <?php
                        }
                      ?>
                    </ul>
                  </div>
              </div>
              <div id="box_news_video" class="box_news">
                  <div class="titolo_box_news">Nuovi Video</div>
                  <div class="news" style="position: relative; margin-left: 10px; width: 248px; margin-top: 45px; height: 120px;">
                    <ul>
                      <?php
                        $i=0;
                        foreach ($sxml->entry as $entry){
                          $media = $entry->children('http://search.yahoo.com/mrss/');
                          $attrs = $media->group->player->attributes();
                          $url = $attrs['url'];
                          $video = YoutubeDataApi::getVideoResponse($url);
                          $titolo = $video->getTitle();
                          $thumbnails = $video->getThumbnails();
                          $thumbnail = $thumbnails[0]['url'];
                          $i++;
                          if ($i>4)
                            continue;
                      ?>
                          <li><strong><a href="video.php#<?php echo $url?>"><?php echo $titolo?></a></strong>
                      <?php
                        }
                      ?>
                    </ul>
                  </div>
              </div>
            </div>
            <div id="sc_image"></div>
        </div>
<?php  require_once 'finish.php'?>