﻿function initialize() {
  var centerPos = new google.maps.LatLng(25.048219, 121.517026);
  var mapOptions = {
    zoom: 13,
    center: centerPos
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
  $.getJSON("positions.php", function( data ) {
    console.log(data);
    _.each(data.positions, function(pos) {
      var mapPos = new google.maps.LatLng(pos.latitude, pos.longitude);
          var pinColor = "FE7569";
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
    var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
      var marker = new google.maps.Marker({
        position: mapPos,
        map: map,
        title: pos.title,
		icon: pinImage,
		shadow: pinShadow
      });

      var infowindow = new google.maps.InfoWindow({
	      content: "<h4>" + pos.title + "</h4>" + "<p>目前車輛數: " + pos.sbi + "</p>" + "<p> 空位數量: " + pos.bemp + "</p>"
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    });
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
