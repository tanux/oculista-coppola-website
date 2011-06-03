<?php
?>
            <div id="bottom">
                <div id="bottom_menubar">
                    <a href="index.php">Home</a> |
                    <a href="biografia.php">Biografia</a> |
                    <a href="immagini.php">Immagini</a> |
                    <a href="video.php">Video</a> |
                    <a href="contatti.php">Contatti</a> |
                    <a href="dove_sono.php">Dove Sono</a> |
                    <a href="privacy.php">Privacy</a> |
                    <a href="sitemap.php">Mappa Sito</a>
                    <span style="float:right;">
                      Design & Developer:
                      <a target="_blank" href="http://www.linkedin.com/pub/mario-speranza/25/a10/253"> Mario Speranza</a> -
                      <a target="_blank" href="http://www.linkedin.com/pub/gaetano-esposito/24/8b/636">Esposito Gaetano</a>
                    </span>
                      <br /> <br />
                  <div style="text-align:center">
                    <span>Dott.Coppola Salvatore - Oculista - C/Da Sant'Eustacchio,1 - Avellino 83100 - P.IVA:01836590644</span> <br />
                    <span>&copy; 2011 Tutti i diritti sono riservati</span>
                  </div>
                </div>
            </div>
        </div> <!-- chiude content_all-->
        <script type="text/javascript">
            nome_pagina=location.href;
            nome_pagina=nome_pagina.substr(nome_pagina.lastIndexOf("/")+1).split(/[?#]/)[0];
            $('li[id="'+nome_pagina+'"]').attr("class","current");
        </script>
    </body>
</html>
 
