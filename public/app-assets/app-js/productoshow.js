$("#guardaproducto").on('click', function(e){
	var nombre = $("#nombre").val();
	var marca = $("#marca").val();
	var preciounitario = $("#preciounitario").val();
	var preciocaja = $("#preciocaja").val();
	var ganancia = $("#ganancia").val();
	alert(nombre+"-"+marca+"-"+preciounitario+"-"+preciocaja+"-"+ganancia);
        $.ajax({
           type:'POST',
           url:"guardaproducto",
           dataType: "JSON",
           data: {'nombre':nombre,'marca':marca,'preciounitario':preciounitario,'preciocaja':preciocaja,'ganancia':ganancia},
            success: function(data){
            	var tr= '<tr id="tr-'+
            	             data.id+
            	             '" >'+
            	             '<td>'+
            	             '<i class="ft-edit" data-toggle="tooltip" data-placement="top" data-original-title="Editar"></i>'+
         	                 '<i class="ft-trash" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar"></i>'+
            	             '</td>'+
            	             '<td>'+
            	             data.nombre+
            	             '</td>'+
            	             '<td>'+
            	             data.marca+
            	             '</td>'+
            	             '<td>'+
            	             data.preciounitario+
            	             '</td>'+
            	             '<td>'+
            	             data.preciocaja+
            	             '</td>'+
            	             '<td>'+
            	             data.ganancia+
            	             '</td>'+
            	         '</tr>';  
            	         alert(tr);  

            	$('tbody').append(tr);
            	alertify.success('El producto se creo correctamente');
            },
            error: function(dataPrecios) {
              alert('error');
            }         
        });

	$("#createpro").modal('hide');
});




$("#guardanota").on('click', function(e){
    var titulo = $("#titulo").val();
    var descripcion = $("#descripcion").val();
    var fecha = $("#fecha").val();
    var id_cliente = $("#id_cliente").val();
    var correo = $("#correo").val();
        $.ajax({
           type:'POST',
           url:"guardanota",
           dataType: "JSON",
           data: {'titulo':titulo,'descripcion':descripcion,'fecha':fecha,'id_cliente':id_cliente,'correo':correo},
            success: function(data){
                var nota= '<div class="col-md-3 col-sm-12">'+
                             '<div class="card text-white bg-gradient-y-blue box-shadow-0">'+
                                '<div class="card-header">'+
                                   '<h4 class="card-title text-white">'+
                                      data.titulo+
                                   '</h4>'+
                                   '<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>'+
                                     '<div class="heading-elements">'+
                                        '<ul class="list-inline mb-0">'+
                                           '<li><a data-action="close"><i class="ft-x"></i></a></li>'+
                                        '</ul>'+
                                     '</div>'+
                                '</div>'+
                                '<div class="card-content collapse show">'+
                                  '<div class="card-body">'+ 
                                    '<p class="card-text">'+
                                       data.fecha+ 
                                    '</p>'+
                                    '<p class="card-text">'+
                                       data.descripcion+ 
                                    '</p>'+
                                   '</div>'+
                                '</div>'+
                             '</div>'+
                          '</div>';  

                $('#addnotas').append(nota);
                alertify.success('La nota se creo correctamente');
            },
            error: function(data) {
              alertify.error('Opps Ocurrio un Error');
            }         
        });

    $("#createnot").modal('hide');
});