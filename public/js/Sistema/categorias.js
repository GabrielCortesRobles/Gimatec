$(document).ready(function()
{
    $("#alert-categoria").hide();
    $(".desactivar-categoria").click(function(e){
        e.preventDefault();
        var confirmacion = confirm('¿Está seguro de desactivar?');
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
        
            $("#alert-categorias").show();

            $.post(url, form.serialize(), function(result){
                //row.fadeOut();
                $('#cat-total').html(result.total);
                $('#alert-categorias').html(result.message);
            }).fail(function(){
                $('#alert-categorias').html('Algo salio mal');
            });
        }
    });

    $(".restaurar-categoria").click(function(e){
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
        
            $("#alert-categorias").show();

            $.post(url, form.serialize(), function(result1){
                row.fadeOut();
                $('#pro-total').html(result1.total);
                $('#alert-categorias').html(result1.message);
            }).fail(function(){
                $('#alert-categorias').html('Algo salio mal');
            });
        }
    });

    
    $(".eliminar-categoria").click(function(e){
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
        
            $("#alert-categorias").show();

            $.post(url, form.serialize(), function(result){
                row.fadeOut();
                $('#cat-total').html(result.total);
                $('#alert-categorias').html(result.message);
            }).fail(function(){
                $('#alert-categorias').html('Algo salio mal');
            });
        }
    });
});