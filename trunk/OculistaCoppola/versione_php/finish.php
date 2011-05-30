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
                    <a href="sitemap.php">Mappa Sito</a> |
                    <a href="crediti.php">Crediti</a>
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
 
