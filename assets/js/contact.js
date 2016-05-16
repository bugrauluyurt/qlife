$(document).ready(function() {
    
    /* ======= jQuery form validator ======= */ 
    /* Ref: http://jqueryvalidation.org/documentation/ */   
    $("#contact-form").validate({
		messages: {
		
		    name: {
    			required: 'Lütfen isminizi yazınız' //You can customise this message
			},
			email: {
				required: 'Lütfen eposta adresinizi yazınız' //You can customise this message
			},			
			message: {
				required: 'Lütfen mesajınızı yazınız' //You can customise this message
			}
			
		}
		
	});
	
	
});



