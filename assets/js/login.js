var autentica = {
	init : function() {
		$('#entrar').on('click', autentica.login);
		$('#login').on('keyup', autentica.enter);
		$('#senha').on('keyup', autentica.enter);
	},
	enter : function(e) {
		if (e.which == 13) {
			if ($('#login').val() == '') {
				$('#login').focus();
				$('#msg').html('Informe o Usuário!');
				$('#mLogin').modal('show');
				setTimeout(function(){
					$('#mLogin').modal('hide');
					window.location.reload();
				},2000);
				return;
			}
			if ($('#senha').val() == '') {
				$('#senha').focus();
				$('#msg').html('Informe a Senha!');
				$('#mLogin').modal('show');
				setTimeout(function(){
					$('#mLogin').modal('hide');
					window.location.reload();
				},2000);
				return;
			}
			autentica.login();
		}
	},
	login : function() {
		if ($('#login').val() == '') {
			$('#login').focus();
			$('#msg').html('Informe o Usuário!');
			$('#mLogin').modal('show');
			setTimeout(function(){
				$('#mLogin').modal('hide');
				window.location.reload();
			},2000);
			return;
		}
		if ($('#senha').val() == '') {
			$('#senha').focus();
			$('#msg').html('Informe a Senha!');
			$('#mLogin').modal('show');
			setTimeout(function(){
				$('#mLogin').modal('hide');
				window.location.reload();
			},2000);
			return;
		}
		$.ajax({
			type:'POST',
			url:'login/valida_login',
			data:{login:$('#login').val(),senha:$('#senha').val()},
			success:function(result){
				if (result == 'ok') {
					window.location = URL;
				} else {
					$('#msg').html('Usuário ou Senha incorretos.');
					$('#mLogin').modal('show');
					setTimeout(function(){
						$('#mLogin').modal('hide');
						window.location.reload();
					},2000);
					return;
				}
			}
		});
	}
}
$(document).ready(function() {
	autentica.init();
});