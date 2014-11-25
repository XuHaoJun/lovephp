function initialize() {
  var centerPos = new google.maps.LatLng(25.048219, 121.517026);
  var mapOptions = {
    zoom: 5,
    center: centerPos
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
  $.getJSON("positions.php", function( data ) {
    console.log(data);
    _.each(data.positions, function(pos) {
      var mapPos = new google.maps.LatLng(pos.latitude, pos.longitude);
      var marker = new google.maps.Marker({
        position: mapPos,
        map: map,
        title: pos.title
      });
      var infowindow = new google.maps.InfoWindow({
        content: "<h1>" + pos.title + "</h1>" + pos.descriptionTW
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    });
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
