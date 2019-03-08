$(document).ready(function()
{
    $("#alert-maquinas").hide();
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
        
            $("#alert-maquinas").show();

            $.post(url, form.serialize(), function(result){
                //row.fadeOut();
                $('#maq-total').html(result.total);
                $('#alert-maquinas').html(result.message);
            }).fail(function(){
                $('#alert-maquinas').html('Algo salio mal');
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
        
            $("#alert-maquinas").show();

            $.post(url, form.serialize(), function(result){
                alert(result.message)
                row.fadeOut();
                $('#alert-maquinas').html(result.message);
            }).fail(function(){
                $('#alert-maquinas').html('Algo salio mal');
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
        
            $("#alert-maquinas").show();

            $.post(url, form.serialize(), function(result2){
                row.hide();
                $('#maq-total').html(result2.total);
                $('#alert-maquinas').html(result2.message);
            }).fail(function(){
                $('#alert-maquinas').html('Algo salio mal');
            });
        }
    });
});