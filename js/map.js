(function() {
	"use strict";
	console.log(" SEAF fired");
	var directionsService = new google.maps.DirectionsService(),
	map = new google.maps.Map(document.querySelector('.mapCon')), 
	preloader = document.querySelector('.preloadCon'),
	geocoder = new google.maps.Geocoder(),
	directionsBut = document.querySelector('.directionsBut'),
	directionsDisplay,
	marker,
	locations = [];

	function initMap(position){
		locations[0]= {lat: 44.499975, lng: -81.373118};
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);

		map.setCenter({lat: 44.499975, lng: -81.373118});

		map.setZoom(14);

		marker = new google.maps.Marker({
			position : {lat: 44.499975, lng: -81.373118},
			map: map,
			title: 'hello World!'
		});
		preloader.classList.add('hide');
	}

	function getAddress(){
		console.log("getAddress fired")
		var address = document.querySelector('.address').value;
		geocoder.geocode({'address': address}, function(results, status){
			if (status === google.maps.GeocoderStatus.OK){
				location[1] = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng() };
				map.setCenter(results[0].geometry.location);
				if (marker){
					marker.setMap(null);
					marker = new google.maps.Marker({
						map:map,
						position: results[0].geometry.location
					});

				}

				calcRoute(results[0].geometry.location);

			} else{
				console.log('no dice', status);
			}
		});
	}

	function calcRoute(codeLoc){
		var request = {
			origin: locations[0],
			destination: location[1],
			travelMode: 'DRIVING'
		};

		directionsService.route(request, function(response, status){
			if(status === 'OK'){
				directionsDisplay.setDirections(response);
			}
		});
	}

	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log("no geolocation for you!");		
	}

	function handleError(e){
		console.log(e);
	}


	directionsBut. addEventListener('click', getAddress, false);

	

})();