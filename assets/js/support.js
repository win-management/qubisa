$(document).ready(function() {
	$('#accordionTabSupport button[data-toggle="collapse"]').click(function(e){
		target = $(this).attr('data-target');
		if ($(target).hasClass('show')) {
			e.preventDefault();
			e.stopPropagation();
		}
	});
})
