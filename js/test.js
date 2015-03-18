function initialize() {
    var map;
      map = new GMaps({
        el: '#map',
        lat: 55.76610708,
        lng: 37.53005391,
        zoom: 16,
        zoomControl : true,
        zoomControlOpt: {
            style : 'SMALL',
            position: 'TOP_RIGHT'
        },
        panControl : false,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false,
        scrollwheel: false,
      });
      map.addMarker({
          lat: 55.76610708,
          lng: 37.53225391,
          icon: "/img/map_ico.svg",
        });
};  
