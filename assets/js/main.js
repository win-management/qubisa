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
		appendTo: '#search-container'
	}).data("ui-autocomplete")._renderItem = function (ul, item) {
		//Add the .ui-state-disabled class and don't wrap in <a> if value is empty
		//console.log(item);
		if(item.value =='0'){
			return $('<li class="ui-state-disabled">'+item.label+'<a href="'+g_DomainCourse+'" class="btn btn-primary">View All Courses</div></li>').appendTo(ul);
		}else{
			return $('<li class="ui-menu-item">')
			.append('<a>' + item.label + '</a>')
			.appendTo(ul);
		}
	};

	$(".form-search").submit(function(e){
		e.preventDefault();
		if($("#autocomplete_search").val().length > 3){
			window.location.href = g_DomainCourseSubject;
		}
	});
})
