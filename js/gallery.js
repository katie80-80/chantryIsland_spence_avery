
$(document).foundation();
// JavaScript Document

(function() {
	"use strict";
	console.log(" SEAF fired");
	var imageThunbs = document.querySelectorAll(".thumbButton"),
	fullImg = document.querySelector(".fullImg"),
	imgDesc = document.querySelector(".imgDesc"),
	arrowLeft = document.querySelector('.arrowLeft'),
	arrowRight = document.querySelector('.arrowRight'),
	targetImg = 1,
	overlay = document.querySelector(".lbOverlay"),
	lightBoxClose = document.querySelector(".lbClose"),
	httpRequest;



	function getImgPlz(){
		//console.log("getImgPlz fired");
		httpRequest = new XMLHttpRequest();

		targetImg=this.id;

		if (!httpRequest) {
			console.log("no dice");
		}

		imgChange();
	}

	function showImgPlz() {
		console.log("showImgPlz fired");

		if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
			var galData = JSON.parse(httpRequest.responseText);

			[].forEach.call(document.querySelectorAll('.arrow'), function(item){
				item.classList.remove('hide');
			});
			
			overlay.classList.remove('hide');
			lightBoxClose.classList.remove("hide");

			[].forEach.call(document.querySelectorAll('.fullGal'), function(item){
				item.classList.remove('hide');
			});
			

			fullImg.src = 'img/' + galData.photo_img;
			// imgDesc.innerHTML = galData.photo_decs;
		}

	}
	
	
	function imgChange(){
		httpRequest.onreadystatechange = showImgPlz;
		httpRequest.open('GET', 'includes/ajaxQuery.php' + '?photo=' + targetImg);
		httpRequest.send();
	}
	
	function nextPic(){

		targetImg++;

		if(){
			
		}
		imgChange();
	}
	function lastPic(){

		targetImg--;
		imgChange();

	}

	function closeLightBox(){
		[].forEach.call(document.querySelectorAll('.arrow'), function(item){
				item.classList.add('hide');
			});
			
			overlay.classList.add('hide');
			lightBoxClose.classList.add("hide");

			[].forEach.call(document.querySelectorAll('.fullGal'), function(item){
				item.classList.add('hide');
			});

	}



	[].forEach.call(imageThunbs, function(el){
	el.addEventListener('click', getImgPlz, false);
	});

	
	arrowRight.addEventListener("click", nextPic, false);
	arrowLeft.addEventListener("click", lastPic, false);
	lightBoxClose.addEventListener("click", closeLightBox, false);
	
	})();