$(document).foundation();
// JavaScript Document

(function() {
"use strict";
	console.log(" SEAF fired");
var deletePic = document.querySelectorAll(".deletePic"),
$uSure;
console.log(deletePic);

function deleteImg(e){
		console.log("deleteImg fired");
		var img = e.currentTarget;
		//confirm("Are you sure you want to delete this?");
		var uSure = confirm("Do you want to delete this?");
               if( uSure == false ){
               	img.removeAttribute("href");
                return false;
				}
               else{
               	return true;
               }
	}

[].forEach.call(deletePic, function(el){
	el.addEventListener('click', deleteImg, false);
	});
})();