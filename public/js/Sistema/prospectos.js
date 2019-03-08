$(document).ready(function()
{
    $("#alert-prospectos").hide();
    $(".desactivar-prospecto").click(function(e){
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
        
            $("#alert-prospectos").show();

            $.post(url, form.serialize(), function(result){
                //row.fadeOut();
                $('#pro-total').html(result.total);
                $('#alert-prospectos').html(result.message);
            }).fail(function(){
                $('#alert-prospectos').html('Algo salio mal');
            });
        }
    });

    $(".restaurar-prospecto").click(function(e){
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
        
            $("#alert-prospectos").show();

            $.post(url, form.serialize(), function(result1){
                row.fadeOut();
                $('#pro-total').html(result1.total);
                $('#alert-prospectos').html(result1.message);
            }).fail(function(){
                $('#alert-prospectos').html('Algo salio mal');
            });
        }
    });

    
    $(".eliminar-prospecto").click(function(e){
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
        
            $("#alert-prospectos").show();

            $.post(url, form.serialize(), function(result){
                row.fadeOut();
                $('#pro-total').html(result.total);
                $('#alert-prospectos').html(result.message);
            }).fail(function(){
                $('#alert-prospectos').html('Algo salio mal');
            });
        }
    });
});