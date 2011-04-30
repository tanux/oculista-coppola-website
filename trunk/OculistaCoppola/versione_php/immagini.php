<php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
        <title>Immagini | Dott.Salvatore Coppola - Oculista</title>
        <meta name="description" content="Immagini del Dott.Salvatore Coppola, oculista di avellino" />
<?php   require_once 'init.php'; ?>
    <div id="contenuto">
            <div id="titolo_pagina_corrente">
                <img src="img/immagini.png" />
            </div>
            <div id="testo_pagina_corrente">
                <table id="photosets">
                    <tr>
                        <td>
                            <div class="rullino"style="cursor:pointer; z-index:2; position:relative;">
                                <img src="img/rullino.png">
                            </div>
                            <div  class="logo_album" style="z-index:1; position:relative; top:-191px; height:150px; opacity:0.3; overflow:hidden; width:193px">
                                <img class="photoset" id="72157626574983676" src="http://farm6.static.flickr.com/5188/5654072650_ae30248eef_m.jpg" style=""/>
                            </div>
                            <div class="nome_album" style="cursor:pointer; position: relative; z-index: 2; top: -189px; left: 23px; width: 150px; text-align: center; -moz-transform: rotate(-5deg); font-family:'Swanky and Moo Moo', arial, serif; font-weight:bold; font-size:13pt">Nome Album 1</div>
                        </td>
                        <td>
                            <div class="rullino" style="z-index:2; position:relative;">
                                <img src="img/rullino.png">
                            </div>
                            <div style="z-index:1; position:relative; top:-191px; height:150px; opacity:0.3; overflow:hidden; width:193px">
                                <img class="photoset" id="72157626450336715" src="http://farm6.static.flickr.com/5184/5654071926_b491664a59_m.jpg" style=""/>
                            </div>
                            <div style="position: relative; z-index: 2; top: -189px; left: 23px; width: 150px; text-align: center; -moz-transform: rotate(-5deg); font-family:'Swanky and Moo Moo', arial, serif; font-weight:bold; font-size:13pt">Nome Album 2</div>
                        </td>
                        <td>
                            <div class="rullino" style="z-index:2; position:relative;">
                                <img src="img/rullino.png">
                            </div>
                            <div style="z-index:1; position:relative; top:-191px; height:150px; opacity:0.3; overflow:hidden; width:193px">
                                <img class="photoset" id="72157626589785936" src="http://farm6.static.flickr.com/5065/5660891356_46e2e3248c_m.jpg" style=""/>
                            </div>
                            <div style="position: relative; z-index: 2; top: -189px; left: 23px; width: 150px; text-align: center; -moz-transform: rotate(-5deg); font-family:'Swanky and Moo Moo', arial, serif; font-weight:bold; font-size:13pt">Nome Album 3</div>
                        </td>
                    </tr>
                </table>
                <div id="content_galleria" style="width:500px; margin:0 auto;padding:5px; background-color:#f5f5f5;display:none; box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);">
                    <div id="close" style="z-index: 1; position: absolute; top: 82px; left: 701px;display:none; width:20px; height:20px; background-image:url('img/close.gif'); background-repeat:no-repeat; cursor:pointer" title="chiudi"></div>
                    <div id="galleria"></div>
                </div>
            </div>
            <div id="sc_image"></div>
        </div>
    <!-- carico le immagini da flickr e le passo a Galleria-->
    <script src="js/galleria-1.2.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function get_flickr_images( id, number ) {
            api_key='767ae19556d2c879b81318eff5aa2467';
            photoset_id=id;
            $_url= 'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key='+api_key+'&photoset_id='+photoset_id+'&format=json&jsoncallback=?';
            $_number = number ? number-1 : 9;
            $.getJSON($_url, function(data) {
                $.each(data.photoset.photo, function(i,item){
                    var photoUrl = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg'
                    $("<img/>").attr("src", photoUrl).appendTo('#galleria');
                    if ( i == $_number ) {
                        Galleria.loadTheme('js/galleria.classic.min.js');
                        $('#galleria').galleria({
                            width:500,
                            height:500,
                            /*
                            extend: function(options) {
                                var gallery = this; // "this" is the gallery instance
                                $('#play').click(function() {
                                    //gallery.play(); // call the play method
                                });
                            },
                            */
                            lightbox: true
                        });
                    }
                });
            });
        }

        $(document).ready(function(){
            $('#close').hide();
            $('.rullino').mouseover(function(){
                $('.logo_album').css({opacity:1});
            }).mouseleave(function(){
                $('.logo_album').css({opacity:0.3});
            });
            $('.nome_album').mouseover(function(){
                $('.logo_album').css({opacity:1});
            }).mouseleave(function(){
                $('.logo_album').css({opacity:0.3});
            });
            $('.photoset').click(function(){
                $('#content_galleria').show();
                id = $(this).attr('id');
                get_flickr_images(id, 2);
                $('#close').delay(1000).fadeIn();
                $('#photosets').fadeOut();
            });
            $('#close').click(function(){
                window.location.href = "immagini.php";
            });
        });
    </script>
<?php  require_once 'finish.php'?>

 
