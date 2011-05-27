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
        <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
        <title>Immagini | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Immagini del Dott.Salvatore Coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
    <div id="contenuto">
      <div id="titolo_pagina_corrente">
        <img src="img/immagini.png" />
      </div>
      <div id="testo_pagina_corrente">
        <div class="cleared">
          <?php
            foreach ($photosets['photoset'] as $photoset)
            {
              $id_photoset = $photoset['id'];
              $nome_photoset = $photoset['title'];
              $num_photos = $photoset['photos'];
              $farm = $photoset['farm'];
              $server = $photoset['server'];
              $id_primary = $photoset['primary'];
              $secret = $photoset['secret'];
              $url_photo = 'http://farm'.$farm.'.static.flickr.com/'.$server.'/'.$id_primary.'_'.$secret.'_m.jpg';
          ?>
              <div class="set" id="<?php echo $id_photoset?>">
                <div class="bg_set" id="<?php echo $id_photoset?>" title="<?php echo $num_photos?>"></div>
                <div class="thumbnail_content">
                  <img class="thumbnail" id="<?php echo $id_photoset?>" src="<?php echo $url_photo?>" style="opacity:0.3"/>
                </div>
                <div class="nome_album" id="<?php echo $id_photoset?>" >
                  <?php echo $nome_photoset?>
                </div>
              </div>
          <?php
            }
          ?>
        </div>
        <div id="content_galleria">
          <div id="close_album" title="chiudi"></div>
          <div id="galleria"></div>
        </div>
      </div> <!-- Chiude id="testo_pagina_corrente" -->
      <div id="sc_image"></div>
    </div> <!-- Chiude id="contenuto" -->
    <!-- carico le immagini da flickr e le passo a Galleria-->
    <script src="js/galleria-1.2.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      function get_flickr_images( id ) {
        api_key='767ae19556d2c879b81318eff5aa2467';
        photoset_id=id;
        $_url= 'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key='+api_key+'&photoset_id='+photoset_id+'&format=json&jsoncallback=?';
        $.getJSON($_url, function(data) {
          $.each(data.photoset.photo, function(i,item){
            var photoUrl = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg'
            $("<img />").attr("src" , photoUrl).appendTo('#galleria');
          });
          Galleria.loadTheme('js/galleria.classic.min.js');
          $('#galleria').galleria({
            width:500,
            height:500,
            lightbox: true
          });
        });
      }
      $(document).ready(function(){
        var num_photos = 0;
        $('#close_album').hide();
        $('.bg_set').mouseover(function(){
          photoset_id = $(this).attr("id");
          $('#'+photoset_id+' img.thumbnail').css({opacity:1});
        }).mouseleave(function(){
          $('#'+photoset_id+' img.thumbnail').css({opacity:0.3});
        });
        $('.nome_album').mouseover(function(){
          photoset_id = $(this).attr("id");
          $('#'+photoset_id+' img.thumbnail').css({opacity:1});
        }).mouseleave(function(){
          $('#'+photoset_id+' img.thumbnail').css({opacity:0.3});
        });
        $('.bg_set').click(function(){
          $('#content_galleria').show();
          id = $(this).attr('id');
          num_photos = $(this).attr('title');
          get_flickr_images(id);
          $('#close_album').delay(1000).fadeIn();
          $('.cleared').fadeOut();
        });
        $('#close_album').click(function(){
          window.location.href = "immagini.php";
        });
      });
    </script>
<?php  require_once 'finish.php'?>

 
