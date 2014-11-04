function taipeiStationMap() {
	var mapOptions = {
		zoom: 17,
		center: new google.maps.LatLng(25.048219, 121.517026),
		disableDefaultUI: true
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);
	var pos = new google.maps.LatLng(25.048219, 121.517026);
	var marker = new google.maps.Marker({
		position: pos,
	    map: map,
	    title: "Taipei Station"
	});
	var infoWindow = new google.maps.InfoWindow({
		content: "This is Taipei Station"
	});
	google.maps.event.addListener(marker, 'click', function() {
		infoWindow.open(map, marker);
	});
	return map;
}

function initialize() {
	taipeiStationMap();
}

google.maps.event.addDomListener(window, 'load', initialize);
