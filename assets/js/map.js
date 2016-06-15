var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 41.0427902,
        lng: 29.001844,
    });
    map.addMarker({
        lat: 41.0427902,
        lng: 29.001844,
        title: 'Address',      
        infoWindow: {
            content: '<h5 class="title">Qlife Genomics</h5><p><span class="region">BJK Plaza. A Blok <br /> Daire 67. Kat:6<br> Beşiktaş, İstanbul</span></p>'
        }
        
    });

});