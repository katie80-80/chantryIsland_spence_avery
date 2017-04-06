$(document).foundation();
// JavaScript Document

(function() {
"use strict";
	console.log(" SEAF fired");
var deletePic = document.querySelectorAll(".deletePic");
console.log(deletePic);

function deleteImg(){
		console.log("deleteImg fired");
		//confirm("Are you sure you want to delete this?");
		var uSure = confirm("Do you want to delete this?");
               if( uSure == true ){
                  return true;
               }
               else{
                  die();
               }
	}

[].forEach.call(deletePic, function(el){
	el.addEventListener('click', deleteImg, false);
	});
})();