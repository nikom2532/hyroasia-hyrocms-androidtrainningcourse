
jQuery(document).ready(function($){
	
	
/*
$(document).ready(function(){
*/
	/*
	$("#contact_form").submit(function(e){
	*/
	$("#content_form_submit").click(function(){
		var name = $("#contact_form #name").val();
		var email = $("#contact_form #email").val();
		var message = $("#contact_form #message").val();
		var dataString = 'name='+name+'&email='+email+'&message='+message;
		
		

		$.ajax({
			type: "POST",
			url: "./wp-includes/process/contact_form_proc.php",
			data: dataString,
			success: function(result_value) {
				if(result_value == "true"){
					
					$("#form_success").html("Send success");
					
				}
				else if(result_value == "false"){
					$("#form_success").html("Send not success");
				}
				// $("#form_success").html(result_value);
			}
		});
		return false;
	});
});
