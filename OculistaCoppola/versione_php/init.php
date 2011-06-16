<?php
$filter = ".jpg";
$directory = "img/slider";
@$d = dir($directory);
if ($d) {
  while($entry=$d->read()) {
    $ps = strpos(strtolower($entry), $filter);
    if (!($ps === false)) {
      $items[] = $entry;
    }
  }
  $d->close();
  sort($items);
}
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" lang="it" content="oculista,specialista,avellino,salvatore,coppola,dottore,oculistica" />
    <meta name="author" content="Esposito Gaetano" />
    <link rel="shortcut icon" href="img/favicon.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="css/templeate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/barra_navigazione.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slideshow.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css' media="screen">
    <link href='http://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
    <script src="js/jquery.lavalamp.min.js" type="text/javascript" ></script>
    <script src="js/jquery.easing.min.js" type="text/javascript" ></script>
    <script src="js/slideshow_function.js" type="text/javascript" ></script>
    <script src="js/menubar_function.js" type="text/javascript" ></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#testo_header').click(function(){window.location.href = "index.php";});
      });
    </script>
</head>
<body>
<div id="content_all">
    <div id="sfondo_header"></div>
    <div id="testo_header">
        <div id="titolo">Dottor Salvatore Coppola</div>
        <div id="sottotitolo">Oculista - Avellino</div>
    </div>
    <ul class="lavaLampBottomStyle" id="tre">
        <li id="index.php"><a href="index.php">Home</a></li>
        <li id="biografia.php"><a href="biografia.php">Biografia</a></li>
        <li id="immagini.php"><a href="immagini.php">Immagini</a></li>
        <li id="video.php"><a href="video.php">Video</a></li>
        <li id="contatti.php"><a href="contatti.php">Contatti</a></li>
        <li id="dove_sono.php"><a href="dove_sono.php">Dove sono</a></li>
    </ul>
    <div id="slideshow">
        <img src="img/slider/image1.jpg" alt="Slideshow Image 1" class="active" />
        <?php
          for ($i=1; $i<sizeof($items); $i++){
        ?>
            <img src="img/slider/<?php echo $items[$i]?>"/>
        <?php
          }    
        ?>
    </div>



