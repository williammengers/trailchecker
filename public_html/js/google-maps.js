function initialize() {
        var mapOptions = {
          center: { lat: 39.263314, lng: -76.785537},
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

  // Define the LatLng coordinates for the polygon's paths
  var hocoCoords = [
    new google.maps.LatLng(39.263650, -76.791609),
    new google.maps.LatLng(39.211797, -76.754358),
    new google.maps.LatLng(39.213659, -76.738222),
    new google.maps.LatLng(39.226160, -76.724146),
    new google.maps.LatLng(39.236532, -76.750410),
    new google.maps.LatLng(39.244908, -76.755560)
  ];

  var baltoCoords = [
    new google.maps.LatLng(39.262653, -76.779764),
    new google.maps.LatLng(39.226892, -76.719168),
    new google.maps.LatLng(39.245240, -76.720197),
    new google.maps.LatLng(39.260057, -76.758415)
  ];

  northPatapcoords = [
    new google.maps.LatLng(39.367488, -76.961112),
    new google.maps.LatLng(39.315446, -76.872535),
    new google.maps.LatLng(39.310266, -76.804557),
    new google.maps.LatLng(39.359923, -76.872535)
  ];

   middlePatapcoords = [
    new google.maps.LatLng(39.315114, -76.794429),
    new google.maps.LatLng(39.274994, -76.793742),
    new google.maps.LatLng(39.301300, -76.775375)
  ];

  // Construct the polygons
  hocoSide = new google.maps.Polygon({
    paths: hocoCoords,
    strokeColor: '#FC7F02',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FC7F02',
    fillOpacity: 0.35
  });

  baltoSide = new google.maps.Polygon({
    paths: baltoCoords,
    strokeColor: '#7FFC02',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#7FFC02',
    fillOpacity: 0.35
  });

  northPatap = new google.maps.Polygon({
    paths: northPatapcoords,
    strokeColor: '#027FFC',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#027FFC',
    fillOpacity: 0.35
  });


  middlePatap = new google.maps.Polygon({
    paths: middlePatapcoords,
    strokeColor: '#FC0202',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FC0202',
    fillOpacity: 0.35
  });




  //Map all regions
  middlePatap.setMap(map);
  northPatap.setMap(map);
  baltoSide.setMap(map);
  hocoSide.setMap(map);

  //add bikeLayer to map
  var bikeLayer = new google.maps.BicyclingLayer();
  bikeLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);