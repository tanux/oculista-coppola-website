<?php
require_once 'phpFlickr/phpFlickr.php';
$api_key = '767ae19556d2c879b81318eff5aa2467';
$secret = '84e7befb716ad97f';
$user_id = '61365587@N08';
$die_on_error = false;
$flickr = new phpFlickr($api_key,$secret,$die_on_error);
//$flickr->enableCache("db", "mysql://root:20tanux20@127.0.0.1/flickr");
$photosets = $flickr->photosets_getList($user_id);
print_r($photosets);
exit;


foreach ($photosets['photoset'] as $photoset)
{
  $nome_photoset = $photoset['title'];
  $num_photos = $photoset['photos'];
  $farm = $photoset['farm'];
  $server = $photoset['server'];
  $id = $photoset['primary'];
  $secret = $photoset['secret'];
  $url_photo = 'http://farm'.$farm.'.static.flickr.com/'.$server.'/'.$id.'_'.$secret.'_m.jpg';
  echo "Ecco l'url creato: ".$url_photo;
}
?>

