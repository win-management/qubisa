$(document).ready(function() {
	var owl_mainslide = $('.owl-main-slide');
	owl_mainslide.owlCarousel({
		margin: 0,
		loop: true,
		items: 1,
		nav: true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
  		navText: ["<img src='assets/img/arrow-l.png'>","<img src='assets/img/arrow-r.png'>"]
	});

	var owl_course = $('.owl-viewed-course');
	owl_course.owlCarousel({
		margin: 15,
		loop: false,
		dots: false,
		autoplay:false,
		navText: ["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"],
		nav:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});

	var owl_participant_course = $('.owl-participant-course');
	owl_participant_course.owlCarousel({
		margin: 15,
		loop: false,
		dots: false,
		autoplay:false,
		navText: ["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"],
		nav:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});
})
