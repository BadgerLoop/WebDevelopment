$(window).load(function() {
	//Preloader
	$('#status').delay(300).fadeOut();
	$('#preloader').delay(300).fadeOut('slow');
	$('body').delay(550).css({'overflow':'invisible'});
    $('#tips').hide();

    if (mobile) {
        $('#tips').show();
        $('#tips').delay(3000).fadeOut('slow');
    }
})
