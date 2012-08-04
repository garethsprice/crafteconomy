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

	$('.btn_more_info').click(function() {
		var more_info = $(this).parents('.caption').children('.more-info').toggle();
		if ($(this).html() === "More info") {
			$(this).html('Less info');
			$(this).removeClass('btn-primary');
		} else {
			$(this).html('More info');
			$(this).addClass('btn-primary');
		}
	});

	$('.btn_buy').click(function() {
		window.location = 'account/orders.html';
	});
});
