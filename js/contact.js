	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-form').submit(function() {
			$('form#contact-form .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-form').slideUp("fast", function() {				   
						$(this).before("<p class="tick"><strong>Thanks!</strong>Thanks for the message! I'll get back to you as soon as possible.</p>");
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>