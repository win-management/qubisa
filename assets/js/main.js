$(document).ready(function() {
	$( "#autocomplete_search" ).autocomplete({
		source: function( request, response ) {
		// Fetch data
		$.ajax({
			url: g_DomainName+"/search/list",
			type: 'post',
			dataType: "json",
			data: {
			search: request.term
			},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function (event, ui) {
			// Set selection
			$('#autocomplete_search').val(ui.item.label); // display the selected text
			//$('#select_id').val(ui.item.value); // save selected id to input
			return false;
		}
	});

	$(".form-search").submit(function(e){
		e.preventDefault();
		if($("#autocomplete_search").val().length > 3){
			window.location.href = g_DomainCourse;
		}
	});
})
