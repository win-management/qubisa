$(document).ready(function() {
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
