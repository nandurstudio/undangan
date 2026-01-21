jQuery(document).ready(function ($) {
	$('#submit').on('click',document,function(event){
	    
		var tempValue = jQuery(this).html();
		jQuery("form#contactpage").validate({
			submitHandler : function (e) {
				submitSignupFormNow(jQuery("form#contactpage"));
			console.log("validator working");
			},
			rules : {
				name : {
					required : true
				},
				phone : {
					required : true
				},
				emailHelp : {
					required : true,
					email : true
				},
			},
			errorElement : "span",
			errorPlacement : function (e, t) {
				e.appendTo(t.parent())
			}
		});
		submitSignupFormNow = function (e) {
			var t = e.serialize();
			var n = "/api/messages"; // Changed to API endpoint
			jQuery.ajax({
				url : n,
				type : "POST",
				data : t,
				dataType: 'json',
				headers: { 'Accept': 'application/json' },
				success : function (resp) {
					// resp is already a parsed JSON object
					jQuery('#submit').html(tempValue);
					if (resp && resp.status === "Success") {
						jQuery("#form_result").html('<span class="form-success">' + resp.msg + "</span>")
					} else {
						var msg = (resp && resp.msg) ? resp.msg : 'An error occurred. Please try again.';
						jQuery("#form_result").html('<span class="form-error">' + msg + "</span>")
					}
					jQuery("#form_result").show();
				},
				error : function (xhr) {
					var msg = 'An error occurred. Please try again.';
					try {
						var json = xhr.responseJSON || (xhr.responseText && JSON.parse(xhr.responseText));
						if (json && json.message) msg = json.message;
					} catch (e) {}
					jQuery("#form_result").html('<span class="form-error">' + msg + '</span>');
					jQuery("#form_result").show();
				}
			});
			return false
		}
	});
	
})
