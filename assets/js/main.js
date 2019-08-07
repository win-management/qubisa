(function ($) {

    "use strict";

    var $window = $(window);
		
	$(document).ready(function() {
		$window.on('load', function () {
			AOS.refresh();
		});

		AOS.init({
			once: true,
			duration: 600
		});

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
			return $('<li class="ui-menu-item">')
				.append('<a><i class="ti-file"></i>' + item.label + '</a>')
				.appendTo(ul);
		};
	
		$(".form-search").submit(function(e){
			e.preventDefault();
			if($("#autocomplete_search").val().length > 3){
				window.location.href = g_DomainCourseSubject;
			}
		});

		$(".dropdown-menu-notif").on("show.bs.dropdown", function(event){
			$('#notifDropdown').addClass('notif-hover2');
		});
		$(".dropdown-menu-notif").on("hide.bs.dropdown", function(event){
			$('#notifDropdown').removeClass('notif-hover2');
		});

		$("#notifDropdown").hover(function(){
			$('#notifDropdown').addClass('notif-hover');
		}, function(){
			//if not hover
			$('#notifDropdown').removeClass('notif-hover');
		});

		$(".dropdown-menu-notif").hover(function(){
			$('#notifDropdown').addClass('notif-hover');
		}, function(){
			//if not hover
			$('#notifDropdown').removeClass('notif-hover');
		});

		$(".dropdown-menu-notif ul").hover(function(){
			$('#notifDropdown').addClass('notif-hover');
		}, function(){
			$('#notifDropdown').removeClass('notif-hover');
		});

		$(".dropdown-menu-notif ul li").hover(function(){
			$('#notifDropdown').addClass('notif-hover');
		}, function(){
			$('#notifDropdown').removeClass('notif-hover');
		});
	})
}(jQuery));
