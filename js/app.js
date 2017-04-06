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
	closeDonate = document.querySelector(".closeDonate");
	



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
	

	function expandDonate(){
		console.log("expandDonate fried");
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



	
	//listeners
	burgButton.addEventListener("click", toggleBurger,false);
	bookNowCon.addEventListener("click", expandBook, false);
	closeBook.addEventListener("click", retractBook, false);

	donateCon.addEventListener("click", expandDonate, false);
	closeDonate.addEventListener("click", retractDonate, false);

	})();