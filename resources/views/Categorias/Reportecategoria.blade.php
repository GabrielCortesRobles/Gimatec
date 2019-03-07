@extends('Header.Head')
@section('contenido')
<div class="formulario">
<h4 class='header-form'><b>RESULTADO DE CONSULTA</b></h4>
    <p>
    <span id='cat-total'>{{$categorias->total()}}</span> Registros |
        Página {{$categorias->currentPage()}}
        de {{$categorias->lastPage()}}
    </p>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-success alert-dismissible" id='alert-categorias' role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong></strong>
        </div>
        <table class="table-sm">
            <thead>
                <tr>
                    <th scope="col" width='15px'>ID</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">DESCRIPCION</th>
                </tr>
            </thead>
            @foreach($categorias as $cat)
                <tr>
                    <td>{{$cat->idc}}</td>
                    <td><b>{{$cat->categoria}}. </b>
                    {{$cat->descripcion}}</td>
                    <td align='center'>
                        <div class='row justify-content-md-center'>
                        @if($cat->deleted_at=="")
                        <form class='opcion' action="{{route('desactivacategoria',$cat->idc)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='desactivar-categoria'><i class='icon-ban'></i></a>
                        </form> 
                        
                        
                      
                        {{csrf_field()}}
                        <a href="{{URL::action('Controller_categorias@editacategoria',['idc'=>$cat->idc])}}" class='editar'><i class='icon-pencil'></i></a>
                        
                       
                     @else
                        <form class='opcion' action="{{route('eliminacategoria',$cat->idc)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='eliminar-categoria'><i class='icon-close'></i></a>
                        </form>
                        <form class='opcion' action="{{route('restauracategoria',$cat->idc)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='restaurar-categoria'><i class='icon-check'></i></a>
                        </form>
                        @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <nav class="Page navigation">
            {!! $categorias->render() !!}
        </nav>
    </div>    

    


</div>
@stop