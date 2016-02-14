// Loading basemap and tiles
var map = L.map('map').setView([40.86,-95.86], 5);
map.scrollWheelZoom.disable();

var CartoDB_DarkMatter = L.tileLayer('http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
});

map.addLayer(CartoDB_DarkMatter);

// global variables for layer controls
var startupsUSGeoJSON;

function getColor(d) {
    return d > 70000000 ? '#034e7b' :
           d > 60000000  ? '#045a8d' :
           d > 50000000  ? '#2b8cbe' :
           d > 40000000  ? '#74a9cf' :
           d > 30000000  ? '#a6bddb' :
           d > 20000000   ? '#d0d1e6' :
                      '#f1eef6';
}

// JQuery to grab geoJson layers and plot them
$.getJSON("geojson/startupsus.geojson", function (data) {
	var startupPoints = data;

	var startupPointToLayer = function (feature, latlng){

		var startupMarker = L.circle(latlng, 30000, {
			stroke: false,
			fillColor: '#00ffff', 
			fillOpacity: 0.7
		});
		return startupMarker

	    }

	var startupClick = function (feature, layer) {
		layer.bindPopup("<strong>Name: </strong><br />" + feature.properties.name + "<br /><strong>Funding: </strong>" + "$" + feature.properties.funding_total_usd + " USD");
		layer.on('mouseover', function (e) {
		            this.openPopup();
		        });
        layer.on('mouseout', function (e) {
            this.closePopup();
        });
	}

	startupUSGeoJson = L.geoJson(startupPoints, {
		pointToLayer: startupPointToLayer, 
		onEachFeature: startupClick
	}).addTo(map);
});











