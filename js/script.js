
jQuery(function(){
	//table sort
	jQuery(".tablesort table").tablesorter({ });
	//jQuery(".slides").slides();
});


jQuery(function(){
	// Initialize Slides
	jQuery('.slides').slides({
		container: 'slides_container',
		generatePagination: true,
		//generateNextPrev: true,
		effect: 'slide',
		fadeSpeed: 150,
		fadeEasing: 'easeOutQuad',
		crossfade: true,
		randomize: true,
		preload: true,
		play: 5000,
		//pause: 2500,
		hoverPause: true

	});
});


