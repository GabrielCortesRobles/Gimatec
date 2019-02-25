$(document).ready(function()
{
    $("#alert-servicios").hide();
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
        
            $("#alert-servicios").show();

            $.post(url, form.serialize(), function(result){
                //row.fadeOut();
                $('#ser-total-1').html(result.total);
                $('#alert-servicios').html(result.message);
            }).fail(function(){
                $('#alert-servicios').html('Algo salio mal');
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
        
            $("#alert-servicios").show();

            $.post(url, form.serialize(), function(result){
                alert(result.message)
                row.fadeOut();
                $('#alert-servicios').html(result.message);
            }).fail(function(){
                $('#alert-servicios').html('Algo salio mal');
            });
        }
    });

    $(".eliminar").click(function(e){
        e.preventDefault();
        var confirmacion = confirm('¿Está seguro de eliminar servicioo.?');
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
        
            $("#alert-servicios").show();

            $.post(url, form.serialize(), function(result2){
                row.hide();
                $('#ser-total-1').html(result2.total);
                $('#alert-servicios').html(result2.message);
            }).fail(function(){
                $('#alert-servicios').html('Algo salio mal');
            });
        }
    });
});