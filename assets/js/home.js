$(document).ready(function() {
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		margin: 0,
		loop: true,
		items: 1,
		nav: true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
  		navText: ["<img src='assets/img/arrow-l.png'>","<img src='assets/img/arrow-r.png'>"]
	});

	$('#filter li.toggle .show-more').click(function(e) {
		e.preventDefault();
		$("#filter").find(".sub-filter").slideToggle();
		$('#filter li.toggle .show-more').addClass("d-none");
		$('#filter li.toggle .show-less').removeClass("d-none");
	});

	$('#filter li.toggle .show-less').click(function(e) {
		e.preventDefault();
		$("#filter").find(".sub-filter").slideToggle();
		$('#filter li.toggle .show-less').addClass("d-none");
		$('#filter li.toggle .show-more').removeClass("d-none");
	});
})
