var Main = {
	
	map : null,
	mapOptions : {},
	markers : [],
	
	loadMap : function(lat, lng) {
		zoom = 16;
		if (lat == undefined && lng == undefined)
		{
			// Lat long of downtown Chicago area
			lat = "41.878114";
			lng = "-87.629798";
			zoom = 13;
		}
		Main.mapOptions = {
		zoom: zoom,
		center: new google.maps.LatLng(lat, lng),
		};
		Main.map = new google.maps.Map(document.getElementById("map-canvas"),
		Main.mapOptions);
	},
	
	createLocation : function(lat,lng) {
	return new google.maps.LatLng(lat,lng);
	},

	addMarker : function(position, title, icon) {
		if (icon == true)
		{
			var pinColor = "2F76EE"; // a random blue color that i picked

			var icon = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,

			new google.maps.Size(21, 34),

			new google.maps.Point(0,0),

			new google.maps.Point(10, 34));

		}
		
		var marker = new google.maps.Marker({
			position: position,
			title: title,
			icon: icon
		});
		
		Main.markers.push(marker);
		marker.setMap(Main.map);

	},
	
	clearMarkers : function() {
		$(Main.markers).each(function() {
		this.setMap(null);
		});
		Main.markers = [];
	}
}
