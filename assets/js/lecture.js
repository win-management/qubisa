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
