(function ($) {

    "use strict";

    var $window = $(window);
		
	$(document).ready(function() {
		//sidebar
		$("#sidebar").mCustomScrollbar({
			theme: "minimal"
		});

		$('#dismiss, .main-overlay').on('click', function () {
			$('#sidebar').removeClass('active');
			$('.main-overlay').removeClass('active');
		});

		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').addClass('active');
			$('.main-overlay').addClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		});
		//end side bar 
		
		//animate
		$window.on('load', function () {
			AOS.refresh();
		});

		AOS.init({
			once: true,
			duration: 600
		});
		//end animate

		//autocomplete
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

		$( "#autocomplete_search_m" ).autocomplete({
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
			appendTo: '#search-container-m'
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
		//end autocomplete

		//nav
		$(".dropdown-menu-notif").on("show.bs.dropdown", function(event){
			$('.dropdown-menu-notif .dropdown-toggle').addClass('notif-hover2');
		});
		$(".dropdown-menu-notif").on("hide.bs.dropdown", function(event){
			$('.dropdown-menu-notif .dropdown-toggle').removeClass('notif-hover2');
		});

		$(".dropdown-menu-notif .dropdown-toggle").hover(function(){
			$('.dropdown-menu-notif .dropdown-toggle').addClass('notif-hover');
		}, function(){
			//if not hover
			$('.dropdown-menu-notif .dropdown-toggle').removeClass('notif-hover');
		});

		$(".dropdown-menu-notif").hover(function(){
			$('.dropdown-menu-notif .dropdown-toggle').addClass('notif-hover');
		}, function(){
			//if not hover
			$('.dropdown-menu-notif .dropdown-toggle').removeClass('notif-hover');
		});

		$(".dropdown-menu-notif ul").hover(function(){
			$('.dropdown-menu-notif .dropdown-toggle').addClass('notif-hover');
		}, function(){
			$('.dropdown-menu-notif .dropdown-toggle').removeClass('notif-hover');
		});

		$(".dropdown-menu-notif ul li").hover(function(){
			$('.dropdown-menu-notif .dropdown-toggle').addClass('notif-hover');
		}, function(){
			$('.dropdown-menu-notif .dropdown-toggle').removeClass('notif-hover');
		});
		//end nav
	})
}(jQuery));
