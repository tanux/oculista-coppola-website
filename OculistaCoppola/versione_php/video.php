<?php
require_once('youtube.php');
$feedURL = "http://gdata.youtube.com/feeds/api/videos?q=DottCoppolaVideo";
$sxml = simplexml_load_file($feedURL);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <style type="text/css">
          a.play_link:link {
            color:white;
            text-decoration:none;
            font-weight:bold;
          }
          a.play_link:visited {
            color:#f5f5f5;
          }
          a.play_link:hover {
            color:yellow;
          }
        </style>
        <title>Video | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Video del Dott.Salvatore Coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
    <div id="contenuto">
      <div id="titolo_pagina_corrente">
        <img src="img/video.png" />
      </div>
      <div id="testo_pagina_corrente">
        <div class="cleared">
          <?php            
            foreach ($sxml->entry as $entry)
            {
              // get video player URL
              $media = $entry->children('http://search.yahoo.com/mrss/');
              $attrs = $media->group->player->attributes();
              $url = $attrs['url'];
              $video = YoutubeDataApi::getVideoResponse($url);
              $titolo = $video->getTitle();
              $thumbnails = $video->getThumbnails();
              $thumbnail = $thumbnails[0]['url'];
              $descrizione = $video->getDescription();

              ?>
              <div class="set_video" style="padding-right:85px; font-size:12pt;">
                <div class="bg_set_video"></div>
                <div class="thumbnail_content" style="left:48px">
                  <img class="thumbnail" src="<?php echo $thumbnail?>" style="width:176px" />
                </div>
                <div class="gallery clearfix" style="color:black; position:relative; z-index:2; -moz-transform:rotate(-17deg); -webkit-transform:rotate(-17deg); -o-transform:rotate(-17deg); -ms-transform:rotate(-17deg); top:-260px; left:39px; font-family:'Reenie Beanie',arial,serif; font-size:17pt">
                  <a class="play_link" rel="prettyPhoto" href="<?php echo $url ?>">
                    PLAY
                  </a>
                </div>
                <div class="info_album" style="font-family:Verdana; font-size:10px; width:180px; position:relative; top:-388px; left:240px">
                  <div class="nome" style="font-weight:bold; font-size:12px">
                   <a href="#<?php echo $url?>"> <?php echo $titolo?> </a>
                  </div>
                  <hr />
                  <div class="descrizione"><?php echo $descrizione?></div>
                </div>
              </div>
          <?php
            }
          ?>
        </div>
      </div> <!-- Chiude id="testo_pagina_corrente" -->
      <div id="sc_image"></div>
    </div> <!-- Chiude id="contenuto" -->
    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
				api_gallery=['img/prettyPhoto/fullscreen/1.JPG','img/prettyPhoto/fullscreen/2.jpg','img/prettyPhoto/fullscreen/3.JPG'];
				api_titles=['API Call Image 1','API Call Image 2','API Call Image 3'];
				api_descriptions=['Description 1','Description 2','Description 3'];
			</script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
          animationSpeed: 'normal',
          padding: 40,
          opacity: 0.35,
          showTitle: true,
          allowresize: true,
          counter_separator_label: ' di ',
          theme: 'facebook',
          callback: function(){}
        });
      });
    </script>
<?php  require_once 'finish.php'?>