<?php

/*
 * ********************************************************
 *
 * Libreria : PHP Youtube Data API
 * Autore: Antonio Coschignano
 * Sito web: http://www.simplesoft.it
 * 
 *
 */


class JsonEntity {
    
    protected $arrayJson;

    public function getArrayJson() {
        return $this->arrayJson;
    }

    public function setArrayJson($arrayJson) {
        $this->arrayJson = $arrayJson;
    }


}

class Comment extends JsonEntity {
    
    private $user;
    private $comment;
    private $titleComment;
   
    public function setComment($comment) { $this->comment = $comment; }
    public function setTitleComment($titleComment) { $this->titleComment = $titleComment; }
    public function setUser($user) { $this->user = $user; }
    public function getUser() { return $this->user; }
    public function getComment() { return $this->comment; }
    public function getTitleComment() { return $this->titleComment; }
   
}

class Video extends JsonEntity {

    private $title;
    private $author;
    private $description;
    private $urlComments;
    private $countComments;
    private $url;
    private $videoId;
    private $updated;
    private $published;
    private $thumbnails = array();
    private $category = array();

    public function setVideoId($videoId) { $this->videoId = $videoId; }
    public function setUrl($url) { $this->url = $url; }
    public function setCountComments($countComments) { $this->countComments = $countComments; }
    public function setUrlComments($comments) { $this->urlComments = $comments; }
    public function setDescription($description) { $this->description = $description;}
    public function setAuthor($author) { $this->author = $author; }
    public function setTitle($title) { $this->title = $title; }
    public function setPublished($published) { $this->published = $published; }
    public function setUpdated($updated) { $this->updated = $updated; }
    public function getParameter($key) { return $this->arrayJson[$key]; }
    public function getUpdated() { return $this->updated; }
    public function getPublished() { return $this->published; }
    public function getTitle() { return $this->title; }
    public function getAuthor() { return $this->author; }
    public function getDescription() { return $this->description; }
    public function getUrlComments() { return $this->urlComments;}
    public function getCountComments() {return $this->countComments; }
    public function getUrl() { return $this->url; }
    public function getVideoId() { return $this->videoId;}  
    public function getThumbnails() { return $this->thumbnails; }
    public function getCategory() { return $this->category; }
    public function addCategory($category) { array_push($this->category,$category); }
    public function addThumbnail($url, $width, $height) {
        array_push( $this->thumbnails,
            array(
            'url'    => $url,
            'width'  => $width,
            'height' => $height
            )
        );
    }
}


class Search {
    private $query = array();
    function   __construct() { $this->query['v'] = "2"; }
    public function setQuery($query) { $this->query['q'] = $query; }
    public function setMaxResults($max_results) { $this->query['max-results'] = $max_results; }
    public function setOrderBy($order) { $this->query['orderby'] = $order; }
    public function setStartIndex($start_index) { $this->query['start-index'] = $start_index; }
    public function setAuthor($author) { $this->query['author'] = $author; }
    public function setParameter($key, $value) { $this->query[$key] = $value; }
    public function generateQuery() { return http_build_query($this->query);}
}


class YoutubeDataApi {

    public static $_GDATA_YOUTUBE_BASE_URL = "http://gdata.youtube.com/feeds/api/videos";
    public static $_TYPE_FEED = "feed";
    public static $_TYPE_JSON = "json";
    
    private static function extractId($url) {
        $array = parse_url($url);
        parse_str($array['query'],$query);
        return $query['v'];
    }

    public static function httpRequestGet($url, $type='json') {
        $complete_url = strpos($url, "?") === false ? $url."?"."alt=".$type : $url."&alt=".$type;
        $response = stripslashes(file_get_contents($complete_url));
        return $response;
    }


    public static function getComments($id) {
        echo parse_url($id, PHP_URL_SCHEME);
        if(!!parse_url($id,PHP_URL_SCHEME))
            $id = YoutubeDataApi::extractId($id);
        $complete_url = YoutubeDataApi::$_GDATA_YOUTUBE_BASE_URL."/".$id."/comments";
        $jsonArray = json_decode(YoutubeDataApi::httpRequestGet($complete_url),true);
        $comments = array();
        foreach($jsonArray['feed']['entry'] as $item) {
            $comment = new Comment();
            $comment->setUser(YoutubeDataApi::my_htmlentities($item['author'][0]['name']['$t']));
            $comment->setTitleComment(YoutubeDataApi::my_htmlentities($item['title']['$t']));
            $comment->setComment(YoutubeDataApi::my_htmlentities($item['content']['$t']));
            $comment->setArrayJson($item);
            array_push($comments, $comment);
        }
        return $comments;
    }

    public static function getVideoResponse($id) {
         if(!!parse_url($id))
            $id = YoutubeDataApi::extractId($id);
        $arrayJson = json_decode(YoutubeDataApi::httpRequestGet(YoutubeDataApi::$_GDATA_YOUTUBE_BASE_URL."/".$id),true);
        $video = YoutubeDataApi::getVideoObject($arrayJson['entry']);
        $video->setVideoid($id);
        return $video;
    }


    protected static function getVideoObject($arrayJson) {
        $video = new Video();
        $video->setPublished($arrayJson['published']['$t']);
        $video->setUpdated($arrayJson['updated']['$t']);
        $video->setUrl($arrayJson['link'][0]['href']);
        foreach ($arrayJson['category'] as $item)
            $video->addCategory($item['term']);
        foreach ($arrayJson['media$group']['media$thumbnail'] as $item)
            $video->addThumbnail($item['url'],$item['width'],$item['height']);
        $video->setTitle(YoutubeDataApi::my_htmlentities($arrayJson['media$group']['media$title']['$t']));
        $video->setDescription(YoutubeDataApi::my_htmlentities($arrayJson['media$group']['media$description']['$t']));
        $video->setAuthor($arrayJson['author'][0]['name']['$t']);
        if(isset($arrayJson['gd$comments']['gd$feedLink'])) $video->setUrlComments($arrayJson['gd$comments']['gd$feedLink']['href']);
        if(isset($arrayJson['gd$comments']['gd$feedLink']['countHint'])) $video->setCountComments($arrayJson['gd$comments']['gd$feedLink']['countHint']);
        $video->setArrayJson($arrayJson);
        return $video;
    }

    public static function search($search) {
        if($search instanceof Search) {
            $query = $search->generateQuery();        
        } else if(is_array($search)) {
            $query = http_build_query($search);
        }
        $result = json_decode(YoutubeDataApi::httpRequestGet(YoutubeDataApi::$_GDATA_YOUTUBE_BASE_URL."/?".$query),true);
        $videos = array();
        if(!isset ($result['feed']['entry'])) return array();
        foreach($result['feed']['entry'] as $item)
            array_push($videos, YoutubeDataApi::getVideoObject($item));
        return $videos;
    }
    private static function my_htmlentities($var, $qs = ENT_COMPAT, $charset = 'ISO-8859-1') {
        $search = array('ì', 'è', 'é', 'ò', 'à', 'ù');
        $replace = array('&igrave;', '&egrave;', '&eacute;', '&ograve;', '&agrave;', '&ugrave;');
        $var = str_replace($search, $replace, $var);
        $var = htmlentities($var, $qs, $charset, false);    
        return $var;
    }


}






?>
