//button collapse
$( document ).ready(function(){
	$(".button-collapse").sideNav();
});

//slider
$(document).ready(function(){
	$('.slider').slider({full_width: true});
});

//modal
$(document).ready(function(){
	$('.modal-trigger').leanModal();
});

//animated

$('#tituloDeslizable').addClass('animated lightSpeedIn');
$('#subtituloDeslizable').addClass('animated rollIn');