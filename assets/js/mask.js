$(document).ready(function(){
	$('#valor').mask('000.000.000.000.000,00', {reverse:true, placeholder:'0,00'});
	$('#telefone').focusout(function(){
	    var phone, element;
	    element = $(this);
	    element.unmask();
	    phone = element.val().replace(/\D/g, '');
	    if(phone.length > 10) {
	        element.mask("(99) 99999-9999");
	    } else {
	        element.mask("(99) 9999-99999");
	    }
	}).trigger('focusout');
});