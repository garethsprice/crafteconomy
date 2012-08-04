$(document).ready(function() {
	$('.carousel').carousel({
		interval: 5000
	});

	$('#showbio').click(function () {
   		if ($('#showbio').is(':checked')) {
    		$("#makers_bio").show();
		} else {
    		$("#makers_bio").hide();
		} 
	});

	$('#confirm_listing_sms').click(function () {
   		if ($('#confirm_listing_sms').is(':checked')) {
    		$("#confirmphone").show();
		} else {
    		$("#confirmphone").hide();
		} 
	});
});
