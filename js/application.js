$(document).ready(function() {
	var hammertime = Hammer(document.getElementById("carousel-example-generic"));

	hammertime.on("swipeleft", function(ev) {
	    $(this).carousel('next');          
	});

	hammertime.on("swiperight", function(ev) {
	    $(this).carousel('prev');          
	});	
});
