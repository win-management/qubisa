function openVideo(id, title){
	if(id == 1){
		videojs('video-course').src(g_DomainFiles+"/files/courses/1/videos/1.mp4");
		$('#videoModalCenter h6').html('Modul 1 - Video 1 <br> '+title);
	}else if(id == 2){
		videojs('video-course').src(g_DomainFiles+"/files/courses/1/videos/2.mp4");
		$('#videoModalCenter h6').html('Modul 1 - Video 2 <br> '+title);
	}else if(id == 3){
		videojs('video-course').src(g_DomainFiles+"/files/courses/1/videos/3.mp4");
		$('#videoModalCenter h6').html('Modul 2 - Video 1 <br> '+title);
	}else if(id == 4){
		videojs('video-course').src(g_DomainFiles+"/files/courses/1/videos/4.mp4");
		$('#videoModalCenter h6').html('Modul 2 - Video 2 <br> '+title);
	}else if(id == 5){
		videojs('video-course').src(g_DomainFiles+"/files/courses/1/videos/5.mp4");
		$('#videoModalCenter h6').html('Modul 3 - Video 1 <br> '+title);
	}

	$('#videoModalCenter').modal('show'); 
}

$(document).ready(function() {
	 $('#videoModalCenter').on('hidden.bs.modal', function (e) {
		var player = videojs('video-course');        
		$(player.posterImage.contentEl()).show();
		$(player.bigPlayButton.contentEl()).show();
		player.bigPlayButton.show();
		player.posterImage.show();
		player.currentTime(0); 
		player.pause();
	  })

	  videojs('video-course').on('ended', function()
	  {
		  this.posterImage.show();
		  $(this.posterImage.contentEl()).show();
		  $(this.bigPlayButton.contentEl()).show();
		  this.currentTime(0);
		  this.bigPlayButton.show();
	  });

	  videojs('video-course').on('play', function()
	  {
			this.posterImage.hide();
			this.bigPlayButton.hide();
	  });
})
