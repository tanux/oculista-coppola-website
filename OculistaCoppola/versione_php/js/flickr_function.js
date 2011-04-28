function get_flickr_images( id, number ) {
    api_key='767ae19556d2c879b81318eff5aa2467';
    photoset_id=id;
    $_url= 'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key='+api_key+'&photoset_id='+photoset_id+'&format=json&jsoncallback=?';
    //$_url = id ? "http://api.flickr.com/services/feeds/photos_public.gne?id="+id+"&format=json&jsoncallback=?" : "http://api.flickr.com/services/feeds/photos_public.gne?format=json&jsoncallback=?";
    $_number = number ? number-1 : 9;
    $.getJSON($_url, function(data) {
        $.each(data.photoset.photo, function(i,item){
            var photoUrl = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg'
            $("<img/>").attr("src", photoUrl).appendTo('#galleria');
            if ( i == $_number ) {
                // Load the classic theme
                Galleria.loadTheme('js/galleria.classic.min.js');
                // Initialize Galleria
                $('#galleria').galleria({
                    width:500,
                    height:500,
                    extend: function(options) {
                        var gallery = this; // "this" is the gallery instance
                        $('#play').click(function() {
                            //gallery.play(); // call the play method
                        });
                    },
                    lightbox: true
                });
            }
        });
    });
}