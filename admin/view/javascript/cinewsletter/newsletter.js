$(document).ready(function() {
	$('.button-usereditmodal').click(function() {
		var newsletter_id = $(this).attr('data-id');
		var subscriber_email = $(this).attr('data-email');

		$.ajax({
			url: 'index.php?route=newsletter/subscriber/editOpenSubscriber&user_token='+ $('#token').attr('data-token'),
			type: 'post',
			data: 'subscriber_email='+ subscriber_email,
			dataType: 'json',
			beforeSend: function() {
				$('.button-usereditmodal-'+ newsletter_id).button('loading');
			},
			complete: function() {
				$('.button-usereditmodal-'+ newsletter_id).button('reset');
			},
			success: function(json) {
				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['html']) {
					$('body').prepend(json['html']);

					$('#usereditmodal').modal('show');
				}
			}
		});
	});

	$('.button-useremailmodal').click(function() {
		var name = $(this).attr('data-name');
		var email = $(this).attr('data-email');
		$('#useremailmodal .stringusername').text(name);
		$('#useremailmodal .stringuseremail').text(email);

		$('#send-useremailmodal').attr('data-name', name);
		$('#send-useremailmodal').attr('data-email', email);

		$('#useremailmodal').modal('show');
	});


	$('#button-filter').on('click', function() {
		url = 'index.php?route=newsletter/subscriber&user_token='+ $('#token').attr('data-token');

		var filter_name = $('input[name=\'filter_name\']').val();
		if (filter_name) {
			url += '&filter_name=' + encodeURIComponent(filter_name);
		}

		var filter_email = $('input[name=\'filter_email\']').val();
		if (filter_email) {
			url += '&filter_email=' + encodeURIComponent(filter_email);
		}

		var filter_status = $('select[name=\'filter_status\']').val();
		if (filter_status != '*') {
			url += '&filter_status=' + encodeURIComponent(filter_status);
		}

		var filter_account = $('select[name=\'filter_account\']').val();
		if (filter_account != '*') {
			url += '&filter_account=' + encodeURIComponent(filter_account);
		}

		var filter_ip = $('input[name=\'filter_ip\']').val();
		if (filter_ip) {
			url += '&filter_ip=' + encodeURIComponent(filter_ip);
		}

		var filter_date_added = $('input[name=\'filter_date_added\']').val();
		if (filter_date_added) {
			url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
		}

		var filter_store = $('select[name=\'filter_store\']').val();
		if (filter_store != '*') {
			url += '&filter_store=' + encodeURIComponent(filter_store);
		}

		location = url;
	});

	$('input[name=\'filter_name\']').autocomplete({
		'source': function(request, response) {
			$.ajax({
				url: 'index.php?route=newsletter/subscriber/autocomplete&user_token='+ $('#token').attr('data-token') + '&filter_name=' +  encodeURIComponent(request),
				dataType: 'json',			
				success: function(json) {
					response($.map(json, function(item) {
						return {
							label: item['name'],
							value: item['newsletter_id']
						}
					}));
				}
			});
		},
		'select': function(item) {
			$('input[name=\'filter_name\']').val(item['label']);
		}	
	});

	$('input[name=\'filter_email\']').autocomplete({
		'source': function(request, response) {
			$.ajax({
				url: 'index.php?route=newsletter/subscriber/autocomplete&user_token='+ $('#token').attr('data-token') + '&filter_email=' +  encodeURIComponent(request),
				dataType: 'json',			
				success: function(json) {
					response($.map(json, function(item) {
						return {
							label: item['email'],
							value: item['customer_id']
						}
					}));
				}
			});
		},
		'select': function(item) {
			$('input[name=\'filter_email\']').val(item['label']);
		}	
	});

	$('.date').datetimepicker({
		pickTime: false
	});
});

var SendEmail = {
	'sendManualSubscriber' : function(element) {
		var token = $('#token').attr('data-token');
		var name = $(element).attr('data-name');
		var email = $(element).attr('data-email');

		$.ajax({
			url: 'index.php?route=newsletter/subscriber/sendManualSubscriber&user_token='+ token,
			type: 'post',
			data: 'name=' + name + '&email=' + email + '&subject=' + $('#useremailmodal input[name="subject"]').val().trim() + '&message=' + $('#useremailmodal textarea[name="message"]').val().trim(),
			dataType: 'json',
			beforeSend: function() {
				$('#send-useremailmodal').button('loading');
			},
			complete: function() {
				$('#send-useremailmodal').button('reset');
			},
			success: function(json) {
				$('#useremailmodal .alert, #useremailmodal .text-danger').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['warning']) {
					$('.manual_row').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> '+ json['warning'] +' <button type="button" class="close" data-dismiss="alert">&times;</button>');
				}

				if (json['success']) {
					$('#useremailmodal input[name="subject"], #useremailmodal textarea[name="message"]').val('');
					$('#useremailmodal .note-editable').html('<p><br></p>');

					$('.manual_row').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

					setTimeout(function() {
						$('#useremailmodal').modal('hide');
					}, 5000);
				}
			}
		});
	},
	'SaveManualSubscriber' : function(element) {
		var token = $('#token').attr('data-token');
		var newsletter_id = $('#save-usereditmodal').attr('data-id');

		$.ajax({
			url: 'index.php?route=newsletter/subscriber/updateManualSubscriber&user_token='+ token +'&newsletter_id='+ newsletter_id,
			type: 'post',
			data: $('#usereditmodal select'),
			dataType: 'json',
			beforeSend: function() {
				$('#save-usereditmodal').button('loading');
			},
			complete: function() {
				$('#save-usereditmodal').button('reset');
			},
			success: function(json) {
				$('#usereditmodal .alert, #usereditmodal .text-danger').remove();

				if (json['warning']) {
					$('#usereditmodal .modal-body').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> '+ json['warning'] +' <button type="button" class="close" data-dismiss="alert">&times;</button>');
				}

				if (json['success']) {
					$('#usereditmodal .modal-body').prepend('<div class="alert alert-success"><i class="fa fa-check-circle"></i> '+ json['success'] +' <button type="button" class="close" data-dismiss="alert">&times;</button>');

					setTimeout(function() {
						location = json['success_redirect'];
					}, 5000);
				}
			}
		});
	}
}