<?php
require_once 'phpFlickr/phpFlickr.php';
$api_key = '767ae19556d2c879b81318eff5aa2467';
$secret = '84e7befb716ad97f';
$user_id = '61365587@N08';
$die_on_error = false;

$flickr = new phpFlickr($api_key,$secret,$die_on_error);
$photosets = $flickr->photosets_getList($user_id);
print_r($photosets);
exit;
//print_r($photosets);
$id_photoset = $photosets['photoset']['1']['id'];
$photos_info = $flickr->photosets_getPhotos($id_photoset);
print_r($photos_info);
echo sizeof($photos_info);
exit;

foreach ($photosets['photoset'] as $photoset)
{
  $nome_photoset = $photoset['title'];
  $num_photo = $photoset['photos'];
  $id_photoset = $photoset['id'];
  $photos = $flickr->photosets_getPhotos($id_photoset);
?>
  <p>Foto dell'album <?php echo $nome_photoset?></p>
<?php
  foreach( $photos['photoset']['photo'] as $photo )
  {
    $farm = $photo['farm'];
    $server = $photo['server'];
    $id = $photo['id'];
    $secret = $photo['secret'];
    $url_photo = 'http://farm'.$farm.'.static.flickr.com/'.$server.'/'.$id.'_'.$secret.'_m.jpg';
?>
    <img src="<?php echo $url_photo?>" />
<?php
  }
}




