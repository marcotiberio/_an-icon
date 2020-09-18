// $(function() {
//     var rotation = 0, 
//         scrollLoc = $(document).scrollTop();
//     $(window).scroll(function() {
//         var newLoc = $(document).scrollTop();
//         var diff = scrollLoc - newLoc;
//         rotation += diff, scrollLoc = newLoc;
//         var rotationStr = "rotate(" + rotation + "deg)";
//         $("#logo").css({
//             "-webkit-transform": rotationStr,
//             "-moz-transform": rotationStr,
//             "transform": rotationStr
//         });
//     });
// })

$('document').ready(function() {
	
	var lastScrollLeft = 0;

	$(window).scroll(function trucenscroll(event) {

	   var sl = $(this).scrollTop();
	   var st = $(this).scrollLeft();

	   if (sl > lastScrollLeft) {
	       

	    	var srotatey = "rotateY(" + sl/3 + "deg)";
	    	// var srotatex = "rotateX(" + sl/2 + "deg)";
	    	var size = 100 + sl + "vw";

			$("#logo").css({"-moz-transform" : srotatey , "-webkit-transform" : srotatey});



	   }
	   else if(sl == lastScrollLeft) {
	     //do nothing 
	     //In IE this is an important condition because there seems to be some instances where the last scrollTop is equal to the new one
	   }
	   else {

	   		
	    	var srotatey = "rotateY(" + sl/3 + "deg)";
	    	// var srotatex = "rotateX(" + sl/2 + "deg)";
	    	var size = 100 + sl + "vw";
			$("#logo").css({"-moz-transform" : srotatey, "-webkit-transform" : srotatey});



	   }
	   lastScrollLeft = sl;
	});

});



// Go Back One Page
function goBack() {
    window.history.back();
}


$(document).ready(function () {
    $("#buttonMenu").click(function () {
        $("#primary-menu").slideToggle("fast");
    });
});