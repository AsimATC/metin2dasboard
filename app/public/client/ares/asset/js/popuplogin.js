$(document).ready(function () {
	$('a[rel=popup]').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('#popup').fadeIn(200);
	});

	$("#login").click(function(e){
	    e.stopPropagation();
	});

	$(document).click(function(e) {
	     if (!(e.target.id === 'login')) {
	         $("#popup").fadeOut("slow");                        
	     }
	});
});