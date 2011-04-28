<php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
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
                        <td class="content_phoset">
                            <img class="photoset" id="72157626574983676" src="http://farm6.static.flickr.com/5149/5653499917_0f883797f8_t.jpg"/>
                            <div>Nome Album 1</div>
                        </td>
                        <td class="content_phoset">
                            <img class="photoset" id="72157626450336715" src="http://farm6.static.flickr.com/5068/5654072318_2dc3cf4c35_t.jpg"/>
                            <div>Nome Album 2</div>
                        </td>
                        <td class="content_phoset">
                            <img class="photoset" id="72157626589785936" src="http://farm6.static.flickr.com/5070/5660891254_a5d3a2bf77_t.jpg"/>
                            <div>Nome Album 3</div>
                        </td>
                         <td class="content_phoset">
                            <img class="photoset" id="72157626589798252" src="http://farm6.static.flickr.com/5230/5660326177_ce5d07629c.jpg" />
                            <div>Nome Album 4</div>
                        </td>
                         <td class="content_phoset">
                            <img class="photoset" id="72157626465162949" src="http://farm6.static.flickr.com/5144/5660894676_e6d9ecf534.jpg" />
                            <div>Nome Album 5</div>
                        </td>
                        <td class="content_phoset">
                            <img class="photoset" id="72157626465164241" src="http://farm6.static.flickr.com/5109/5660894892_d8b381f1b2.jpg" />
                            <div>Nome Album 5</div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#close').hide();
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

 
