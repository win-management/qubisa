function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			$('#div-profile-pic img').attr('src', e.target.result);
			$('#div-profile-pic img').addClass('selected');
			$('#div-profile-pic p').hide();
		}
		reader.readAsDataURL(input.files[0]);
	}
}

$(document).ready(function() {
	$("#div-profile-pic").click(function(){
		$("#profile-pic").trigger('click');
	});

	$("#profile-pic").change(function(){
        readURL(this);
    });
})
