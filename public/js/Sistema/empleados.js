$(document).ready(function()
{
    $("#alert-empleados").hide();
    $(".desactivar").click(function(e){
        e.preventDefault();
        var confirmacion = confirm('¿Está seguro de eliminar?');
        if(confirmacion == false)
        {
            return false;
        }
        else
        {
            var row = $(this).parents('tr');
            var form = $(this).parents('form');
            var url = form.attr('action');
            /*alert(row);
            alert(form);
            alert(url);*/
        
            $("#alert-empleados").show();

            $.post(url, form.serialize(), function(result){
                //row.fadeOut();
                $('#emp-total-1').html(result.total);
                $('#alert-empleados').html(result.message);
            }).fail(function(){
                $('#alert-empleados').html('Algo salio mal');
            });
        }
    });

    $(".restaurar").click(function(e){
        e.preventDefault();
        var confirmacion = confirm('¿Está seguro de activar.?');
        if(confirmacion == false)
        {
            return false;
        }
        else
        {
            var row = $(this).parents('tr');
            var form = $(this).parents('form');
            var url = form.attr('action');
            /*alert(row);
            alert(form);
            alert(url);*/
        
            $("#alert-empleados").show();

            $.post(url, form.serialize(), function(result){
                alert(result.message)
                row.fadeOut();
                $('#alert-empleados').html(result.message);
            }).fail(function(){
                $('#alert-empleados').html('Algo salio mal');
            });
        }
    });

    $(".eliminar").click(function(e){
        e.preventDefault();
        var confirmacion = confirm('¿Está seguro de eliminar.?');
        if(confirmacion == false)
        {
            return false;
        }
        else
        {
            var row = $(this).parents('tr');
            var form = $(this).parents('form');
            var url = form.attr('action');
            /*alert(row);
            alert(form);
            alert(url);*/
        
            $("#alert-empleados").show();

            $.post(url, form.serialize(), function(result2){
                row.hide();
                $('#emp-total-1').html(result2.total);
                $('#alert-empleados').html(result2.message);
            }).fail(function(){
                $('#alert-empleados').html('Algo salio mal');
            });
        }
    });
});