$(document).foundation();
// JavaScript Document

(function() {
	"use strict";
	console.log(" SEAF fired");
	
	//variables
	var burgButton = document.querySelector(".hamburger"),
	menu = document.querySelector("#menu"),
	bookNowCon = document.querySelector(".bookNowCon"),
	foldOut = document.querySelector('.foldOut'),
	closeBook = document.querySelector('.closeBook'),
	bookHeadSpace = (window.innerHeight/4)*3,
	scrollerText = document.querySelector(".scrollerText"),
	screenPOS = window.scrollY,
	donateCon = document.querySelector(".donateCon"),
	donateTab = document.querySelector(".donateTab"),
	flipOut = document.querySelector(".flipOut"),
	closeDonate = document.querySelector(".closeDonate"),


	directionsService = new google.maps.DirectionsService(),
	map = new google.maps.Map(document.querySelector('.mapCon')), 
	preloader = document.querySelector('.preloadCon'),
	geocoder = new google.maps.Geocoder(),
	directionsBut = document.querySelector('.directionsBut'),
	directionsDisplay,
	marker,
	locations = [];



	function toggleBurger(){
		console.log("toggleMenue fired");
		menu.classList.toggle("hide");
	}

	function expandBook(){
		//console.log("way to click fkr");
		TweenLite.to(scrollerText, 1, {rotation:0, ease: Power4.easeOut});
		TweenMax.to(bookNowCon, 1, {width:"500px", height:"50px", y:(-bookHeadSpace/4)*3, transformOrigin: "left top", ease: Power4.easeOut});
		TweenMax.to(foldOut, 1, {y:(-bookHeadSpace/4)*3, ease: Power4.easeOut});
		TweenMax.from(foldOut,1, {rotationX:'-90', transformOrigin:"center top", delay:.7, ease: Back.easeOut.config(3)});
		scrollerText.classList.toggle("hide");
		setTimeout (function showCalendar(){
			foldOut.classList.toggle("hide");
			}, 400);
	}
	function retractBook(){
		console.log("retractBook fired");
		TweenLite.to(scrollerText, 1, {rotation:-90, ease: Power4.easeOut});
		TweenMax.to(foldOut,1, {rotationX:'0', transformOrigin:"center top", ease: Power4.easeOut});
		scrollerText.classList.toggle("hide");
		setTimeout (function showCalendar(){
			foldOut.classList.toggle("hide");
		}, 100);
		TweenMax.to(bookNowCon, 1.5, {width:"50px", height:"90px", y:bookHeadSpace/128, transformOrigin: "left top", delay:.2, ease: Power4.easeOut});
	}
	function bookPosition(){
		var flipSpace = bookHeadSpace+16,
		donateSpace = bookHeadSpace-150;
    	bookNowCon.style.marginTop =  bookHeadSpace.toString() + "px";
    	donateCon.style.marginTop =  donateSpace.toString() + "px";
    	flipOut.style.marginTop =  donateSpace.toString() + "px";
    	foldOut.style.marginTop =  flipSpace.toString() + "px";

	}
	function scrollPosition(){
		var space = bookHeadSpace+window.scrollY,
		flipSpace = bookHeadSpace+window.scrollY+16,
		donateSpace = bookHeadSpace+window.scrollY-150;
		//console.log("the space after scrolling" + space);
		bookNowCon.style.marginTop =  space.toString() + "px";
		donateCon.style.marginTop = donateSpace.toString() + "px";
		flipOut.style.marginTop = donateSpace.toString() + "px";
		foldOut.style.marginTop =  flipSpace.toString() + "px";
	}

	function expandDonate(){
		//console.log("expandDonate fried");
		TweenLite.to(donateTab, 1, {rotation:0, ease: Power4.easeOut});
		TweenMax.to(donateCon, 1, {width:"500px", height:"50px", y:(-bookHeadSpace/4), transformOrigin: "left top", ease: Power4.easeOut});
		TweenMax.to(flipOut, 1, {y:(-bookHeadSpace/4), ease: Power4.easeOut});
		TweenMax.from(flipOut,1, {rotationX:'-90', transformOrigin:"center top", delay:.7, ease: Back.easeOut.config(3)});
		donateTab.classList.toggle("hide");
		setTimeout (function showDonate(){
			flipOut.classList.toggle("hide");
			}, 400);
	}

	function retractDonate(){
		console.log("retractDonate fired");
		TweenLite.to(donateTab, 1, {rotation:-90, ease: Power4.easeOut});
		TweenMax.to(flipOut,1, {rotationX:'0', transformOrigin:"center top", ease: Power4.easeOut});
		donateTab.classList.toggle("hide");
		setTimeout (function showDonate(){
			flipOut.classList.toggle("hide");
		}, 100);
		TweenMax.to(donateCon, 1.5, {width:"50px", height:"100px", y:bookHeadSpace/128, transformOrigin: "left top", delay:.2, ease: Power4.easeOut});
	}



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



	
	//listeners
	burgButton.addEventListener("click", toggleBurger,false);
	bookNowCon.addEventListener("click", expandBook, false);
	closeBook.addEventListener("click", retractBook, false);
	window.addEventListener("load", bookPosition, false);
	window.addEventListener("scroll", scrollPosition, false);

	donateCon.addEventListener("click", expandDonate, false);
	closeDonate.addEventListener("click", retractDonate, false);


	directionsBut. addEventListener('click', getAddress, false);
	
	})();