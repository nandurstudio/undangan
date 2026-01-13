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
			var n = "contact-form.php";
			jQuery.ajax({
				url : n,
				type : "POST",
				data : t,
				success : function (e) {
					var t = jQuery.parseJSON(e);
					jQuery('#submit').html(tempValue);
					if (t.status = "Success") {
						jQuery("#form_result").html('<span class="form-success">' + t.msg + "</span>")
					} else {
						jQuery("#form_result").html('<span class="form-error">' + t.msg + "</span>")
					}
					jQuery("#form_result").show();
				}
			});
			return false
		}
	});
	
})
