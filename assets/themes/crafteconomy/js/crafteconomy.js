$(document).ready(function() {
	$('.carousel').carousel({
		interval: 5000
	});

	$('#showbio').click(function () {
   		if ($('#showbio').is(':checked')) {
    		$("#makers_bio").slideDown('fast');
		} else {
    		$("#makers_bio").slideUp('fast');
		} 
	});

	$('#confirm_listing_sms').click(function () {
   		if ($('#confirm_listing_sms').is(':checked')) {
    		$("#confirmphone").slideDown('fast');
		} else {
    		$("#confirmphone").slideUp('fast');
		} 
	});

	$('.btn_more_info').click(function() {
		var more_info = $(this).parents('.caption').children('.more-info').slideToggle('fast', function() {
			$('#products').isotope('reLayout');
		});
		if ($(this).html() === "More info") {
			$(this).html('Less info');
			$(this).removeClass('btn-primary');
		} else {
			$(this).html('More info');
			$(this).addClass('btn-primary');
		}
	});

});
