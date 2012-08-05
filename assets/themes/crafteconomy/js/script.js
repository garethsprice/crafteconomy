$(document).ready(function() {
	$('.carousel').carousel({
		interval: 5000
	});

	$('#showbio').click(function () {
   		if ($('#showbio').is(':checked')) {
    		$("#makers_bio").slideDown();
		} else {
    		$("#makers_bio").slideUp();
		} 
	});

	$('#confirm_listing_sms').click(function () {
   		if ($('#confirm_listing_sms').is(':checked')) {
    		$("#confirmphone").slideDown();
		} else {
    		$("#confirmphone").slideUp();
		} 
	});
});
