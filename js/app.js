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
	imageThunbs = document.querySelectorAll(".thumbButton"),
	fullImg = document.querySelector(".fullImg"),
	imgDesc = document.querySelector(".imgDesc"),
	arrowLeft = document.querySelector('.arrowLeft'),
	arrowRight = document.querySelector('.arrowRight'),
	targetImg = 1,
	overlay = document.querySelector(".lbOverlay"),
	lightBoxClose = document.querySelector(".lbClose"),
	httpRequest;



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



	
	//listeners
	burgButton.addEventListener("click", toggleBurger,false);
	bookNowCon.addEventListener("click", expandBook, false);
	closeBook.addEventListener("click", retractBook, false);
	window.addEventListener("load", bookPosition, false);
	window.addEventListener("scroll", scrollPosition, false);

	donateCon.addEventListener("click", expandDonate, false);
	closeDonate.addEventListener("click", retractDonate, false);

	[].forEach.call(imageThunbs, function(el){
		el.addEventListener('click', getImgPlz, false);
	});

	
	arrowRight.addEventListener("click", nextPic, false);
	arrowLeft.addEventListener("click", lastPic, false);
	lightBoxClose.addEventListener("click", closeLightBox, false);
	
	})();