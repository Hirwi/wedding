$( document ).ready(function() {
	
	checkIfSavingAllowed();
	
	$('.form-control').on('input', function() {
		checkIfSavingAllowed();
	});
	
	
	function checkIfSavingAllowed(){
		var error = 0;
		
		if($('#form_isattending').val() == ''){
			error++;
		}
		
		if($('#form_name').val() == ''){
			error++;
		}
		
		if($('#form_password').val() == ''){
			error++;
		}
		
		if(error === 0 && $('#form_password').val() === 'arisatu2017'){
			$('#submitregistration').attr('disabled', false);
		}else{
			$('#submitregistration').attr('disabled', true);
		}

	}
		
	
	
	
});