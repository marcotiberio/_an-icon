// On reload always scroll top

$(document).ready(function(){
	$(this).scrollTop(0);
});


// Tab Test

$(document).ready(function () {
	$(".seminar-title").on("click",function(){
		$(this).next(".seminar-content").toggle();
	});
});




$(document).ready(function () {
	$("#colophon").hover(function () {
		$("#footer").show();
	});
});


// Mobile Menu Toggle

$(document).ready(function () {
	$("#menuToggle").click(function () {
		$(".menu-mobile-menu-container").toggle();
	});
});

$("#menuToggle").on("click", function() {
	var el = $(this);
	if (el.text() == el.data("text-swap")) {
	  el.text(el.data("text-original"));
	} else {
	  el.data("text-original", el.text());
	  el.text(el.data("text-swap"));
	}
});

// Menu Plus Animation

// $(document).ready(function() {
//     $("#menuToggle").click(function() {         
//       $("#mobileMenuPlus").toggleClass("spinEffect");
//     });
// });

// Accordion Text Swap

// $("#accordionMonographs").on("click", function() {
// 	var el = $(this);
// 	if (el.text() == el.data("text-swap")) {
// 	  el.text(el.data("text-original"));
// 	} else {
// 	  el.data("text-original", el.text());
// 	  el.text(el.data("text-swap"));
// 	}
// });

// $("#accordionJournalarticles").on("click", function() {
// 	var el = $(this);
// 	if (el.text() == el.data("text-swap")) {
// 	  el.text(el.data("text-original"));
// 	} else {
// 	  el.data("text-original", el.text());
// 	  el.text(el.data("text-swap"));
// 	}
// });

// $("#accordionExhibitionscatalogues").on("click", function() {
// 	var el = $(this);
// 	if (el.text() == el.data("text-swap")) {
// 	  el.text(el.data("text-original"));
// 	} else {
// 	  el.data("text-original", el.text());
// 	  el.text(el.data("text-swap"));
// 	}
// });

// $("#accordionOther").on("click", function() {
// 	var el = $(this);
// 	if (el.text() == el.data("text-swap")) {
// 	  el.text(el.data("text-original"));
// 	} else {
// 	  el.data("text-original", el.text());
// 	  el.text(el.data("text-swap"));
// 	}
// });

//

$('#accordionButtonMonographs').on('click', function(){
	$('#accordionButtonMonographs .circle-plus').toggleClass('opened');
})

$('#accordionButtonJournalarticles').on('click', function(){
	$('#accordionButtonJournalarticles .circle-plus').toggleClass('opened');
})

$('#accordionButtonExhibitionscatalogues').on('click', function(){
	$('#accordionButtonExhibitionscatalogues .circle-plus').toggleClass('opened');
})

$('#accordionButtonOther').on('click', function(){
	$('#accordionButtonOther .circle-plus').toggleClass('opened');
})

$('#accordionButtonPublications').on('click', function(){
	$('#accordionButtonPublications .circle-plus').toggleClass('opened');
})

$('#accordionButtonCallforpapers').on('click', function(){
	$('#accordionButtonCallforpapers .circle-plus').toggleClass('opened');
})

$('#accordionButtonExhibitions').on('click', function(){
	$('#accordionButtonExhibitions .circle-plus').toggleClass('opened');
})

$('#accordionButtonMeetings').on('click', function(){
	$('#accordionButtonMeetings .circle-plus').toggleClass('opened');
})

$('#accordionButtonScientificboard').on('click', function(){
	$('#accordionButtonScientificboard .circle-plus').toggleClass('opened');
})

$('#accordionButtonAssociated').on('click', function(){
	$('#accordionButtonAssociated .circle-plus').toggleClass('opened');
})

$('#accordionButtonAffiliated').on('click', function(){
	$('#accordionButtonAffiliated .circle-plus').toggleClass('opened');
})

$('#accordionButtonTeam').on('click', function(){
	$('#accordionButtonTeam .circle-plus').toggleClass('opened');
})

// Seminars

function openSeminar(smnr, seminarName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(seminarName).style.display = "grid";
	smnr.currentTarget.className += " active";
}

// Hide logos-top in contact section

// $(document).ready(function() {
// 	$(window).scroll(function() {
// 		if ($(this).scrollTop() > 0) {
// 		$('.logos-top').fadeOut();
// 		} else {
// 		$('.logos-top').fadeIn();
// 		}
// 	});
// });


// Hide logo in contact section

$(document).ready(function() {
	if($(window).width() <= 1024) {
		$(window).scroll( function() {
			if( $(this).scrollTop() > $(document).height()*0.95 ) {
				$("#logotype").hide();
				$("#logo").hide();
				$("#logotypeContact").show();
			}
			else {
				$("#logotype").show();
				$("#logo").show();
				$("#logotypeContact").hide();
			}
		});
	}
});

$(document).ready(function() {
	if($(window).width() <= 1600) {
		$(window).scroll( function() {
			if( $(this).scrollTop() > $(document).height()*0.88 ) {
				$("#logotype").hide();
				$("#logo").hide();
				$("#logotypeContact").show();
			}
			else {
				$("#logotype").show();
				$("#logo").show();
				$("#logotypeContact").hide();
			}
		});
	}
});

$(document).ready(function() {
	if($(window).width() >= 1680) {
		$(window).scroll( function() {
			if( $(this).scrollTop() > $(document).height()*0.80 ) {
				$("#logotype").hide();
				$("#logo").hide();
				$("#logotypeContact").show();
			}
			else {
				$("#logotype").show();
				$("#logo").show();
				$("#logotypeContact").hide();
			}
		});
	}
});

$(document).ready(function() {
	if($(window).width() >= 1920) {
		$(window).scroll( function() {
			if( $(this).scrollTop() > $(document).height()*0.75 ) {
				$("#logotype").hide();
				$("#logo").hide();
				$("#logotypeContact").show();
			}
			else {
				$("#logotype").show();
				$("#logo").show();
				$("#logotypeContact").hide();
			}
		});
	}
});

$(document).ready(function() {
	if($(window).width() >= 2559) {
		$(window).scroll( function() {
			if( $(this).scrollTop() > $(document).height()*0.70 ) {
				$("#logotype").hide();
				$("#logo").hide();
				$("#logotypeContact").show();
			}
			else {
				$("#logotype").show();
				$("#logo").show();
				$("#logotypeContact").hide();
			}
		});
	}
});


// Go Back One Page
function goBack() {
    window.history.back();
}

// Smooth Scrolling

var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 50
});

// function scrollSeminars() {
// 	document.querySelector('#seminars').scrollIntoView({ behavior: 'smooth' });
// }
  
// function scrollEvents() {
// 	document.querySelector('#events').scrollIntoView({ behavior: 'smooth' });
// }
  
// function scrollPublications() {
// 	document.querySelector('#publications').scrollIntoView({ behavior: 'smooth' });
// }

// function scrollRecommended() {
// 	document.querySelector('#recommended').scrollIntoView({ behavior: 'smooth' });
// }

// function scrollMembers() {
// 	document.querySelector('#members').scrollIntoView({ behavior: 'smooth' });
// }

// function scrollContact() {
// 	document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' });
// }

// Logo Animation

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

// Accordion Members

// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//       panel.style.marginTop = "0";
//       panel.style.marginBottom = "0";
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//       panel.style.marginTop = "32px";
//       panel.style.marginBottom = "32px";
//     } 
//   });
// }

$(document).ready(function () {
	$(".accordion").on("click",function(){
		$(this).next().slideToggle('fast');
	});
});

// Accordion Recommended

// var acc = document.getElementsByClassName(".accordion-publications");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.maxHeight) {
// 		panel.style.maxHeight = null;
// 		panel.style.marginTop = "0";
// 		panel.style.marginBottom = "0";
// 	  } else {
// 		panel.style.maxHeight = panel.scrollHeight + "px";
// 		panel.style.marginTop = "32px";
// 		panel.style.marginBottom = "32px";
// 	  } 
//   });
// }

//______________________________CALENDAR______CONTROL_______________________??

//these scripts assume a couple of things listed here
//--the date of each slide is in a data-variable called date-data in each slides parent div. format yyyy-mm-dd
//--the slides are loaded in chronological order


// Initialize Swiper
var swiper = new Swiper('.swiper-container', {
	effect: 'fade',
	grabCursor: false,
	sensitivity: 0,
	navigation: {
	nextEl: '.swiper-button-next',
	prevEl: '.swiper-button-prev',
	},
});

//mark eventdates on init + remove the original click events from clndr
$('document').ready(function() {
	$('#'+$('.clndr-holder').attr('id')).unbind('click');
	setClickableEvents();
});

//this function finds the closest eventdate and shows its slide on pageload
$('document').ready(function() {
	var dateList = $(".swiper-wrapper > article").map(function() {
		return [$.map($(this).data(), function(v) {
			return new Date(v).getTime();
		})];
	}).get();
	
	var todayDate = new Date().getTime();
	var r = 0;

	for(var i=0; i<dateList.length; i++){
		var date = dateList[i];
		if(date == todayDate){
			r = r + 1;
		} else {

		}
	}

	if(r == 0){
		dateList.push(todayDate);
		dateList = dateList.sort();
		slideIndex = dateList.indexOf(todayDate) ;
		swiper.slideTo(slideIndex, 0);
	} else if(r == 1) {
		slideIndex = dateList.indexOf(todayDate) ;
		swiper.slideTo(slideIndex, 0);	}
});


//set array of eventDates to be used later
var eventDates = $(".swiper-wrapper > article").map(function() {
	return [$.map($(this).data(), function(v) {
		return v;
	})];
}).get();


//Navigate calendar and set CLickable event dates
$(document).on('mousedown', ".clndr-next-button", function(){
	var clndrID = $('.clndr-holder').attr('id');
	var clndrCTRL = $('#'+clndrID).clndr();
	clndrCTRL.forward();
	setClickableEvents();
});

$(document).on('mousedown', ".clndr-previous-button", function(){
	var clndrID = $('.clndr-holder').attr('id');
	var clndrCTRL = $('#'+clndrID).clndr();
	clndrCTRL.back();
	setClickableEvents();
});


//Set calendarmonth to month of active event
$(document).on('click', [".swiper-button-next", ".swiper-button-previous"],  function(){
	setCalendarMonth();
	setClickableEvents();
});


//handles clicking of the dates, move to slide of clicked date
$(document).on('click', ".eventDay", function(){
	var dayDate = $.grep(this.className.split(" "), function(v, i){
		return v.indexOf('calendar-day-') === 0;
	}).join();

	var dayDate = dayDate.replace('calendar-day-','');

	for(var i=0; i<eventDates.length; i++){
		var date = eventDates[i];
		if(date.indexOf(dayDate) != -1){
			var indexPosition = i;
		} else {
		}
	}

	swiper.slideTo(indexPosition, 300);
});


//this function finds the dates in de data-variable of the swiper slide(data-date), changes the style of the date in the calendar
function setClickableEvents() {
	setTimeout(
		function()
		{			
			for (let i = 0; i < eventDates.length; ++i){
				$('.calendar-day-' + eventDates[i]).addClass('eventDay');
			}
		}, 0);
}

//this function finds the active events month and year
function setCalendarMonth() {
	var currentSlide = swiper.activeIndex;
	var rawDate = eventDates[currentSlide];
	var rawDate = rawDate.toString();
	var currentMonth = rawDate.substring(5, 7);
	var currentYear = rawDate.substring(0, 4);
	changeCalendar(currentMonth, currentYear);
}

//does what it says
function changeCalendar(currentMonth, currentYear) {
	var clndrID = $('.clndr-holder').attr('id');
	var clndrCTRL = $('#'+clndrID).clndr();
	clndrCTRL.setMonth(currentMonth-1).setYear(currentYear);
}