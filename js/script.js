var logo = document.getElementByClassName("custom-logo-link"),
		
window.addEventListener("scroll", function() {
	logo.style.transform = "rotate("+window.pageYOffset+"deg)";
});