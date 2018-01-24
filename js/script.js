$(document).ready(function() {

	// Initialize Masonry
	$('#content').masonry({
		columnWidth: .grid_box,
		itemSelector: '.item',
		isFitWidth: true,
		isAnimated: !Modernizr.csstransitions
	}).imagesLoaded(function() {
		$(this).masonry('reload');
	});

});