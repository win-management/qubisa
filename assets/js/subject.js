$(document).ready(function() {
	$( "#autocomplete_search_bottom" ).autocomplete({
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
		open: function() {
			$("ul.ui-menu").width($(this).outerWidth());
		},
		select: function (event, ui) {
			// Set selection
			//$('#autocomplete_search').val(ui.item.label); // display the selected text
			//$('#select_id').val(ui.item.value); // save selected id to input
			window.location.href = g_DomainCourseSubject;
			return false;
		}, 
		classes: {
			"ui-autocomplete": "main-search",
		},
		appendTo: '#search-bottom-container'
	}).data("ui-autocomplete")._renderItem = function (ul, item) {
		return $('<li class="ui-menu-item">')
			.append('<a><i class="ti-file"></i>' + item.label + '</a>')
			.appendTo(ul);
	};
})
