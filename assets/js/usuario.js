var usuario = {
	init : function(){
		usuario.listar();
	},
	listar : function(){
		$.ajax({
			type:'POST',
			url:'home/getUsuarios',
			data:{},
			success:function(json){
				$('#table').dataTable().fnClearTable();
				var rs = $.parseJSON(json);
				var len = rs.length;
				for (var i = 0; i < len; i++) {
					$('#table').DataTable().row.add([rs[i].nome, rs[i].login, rs[i].email, rs[i].perfil, '<a href="'+URL+"/usuarios/view/"+rs[i].id+'" class="btn btn-info view">'+
            		'<i  class="fa fa-eye"></i></a>&nbsp;&nbsp;<a href="'+URL+"/usuarios/edit/"+rs[i].id+'" class="btn btn-success edit">'+
            		'<i  class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="" id="'+rs[i].id+'" class="btn btn-danger del">'+
					'<i class="fa fa-trash-o"></i>'+'</a>']).draw();
				}

				$('#table').on('click', 'a.del', function(e) {
					e.preventDefault();
				    usuario.del($(this).attr('id'));
				});
				
			}
		});
	}
}
$(document).ready(function(){
	usuario.init();
});