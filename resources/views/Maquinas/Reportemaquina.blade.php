@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>RESULTADO DE CONSULTA</b></h4>
    <p>
        <span id='maq-total'>{{$maquinas->total()}}</span> Registros |
        Página {{$maquinas->currentPage()}}
        de {{$maquinas->lastPage()}}
    </p>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-success alert-dismissible" id='alert-maquinas' role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong></strong>
        </div>
        <table class="table-sm">
            <thead>
                <tr>
                    <th scope="col" width='15px'>ID</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">MAQUINA</th>
                    <th scope="col">EXIST</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            @foreach($maquinas as $maq)
                <tr>
                    <td>{{$maq->idm}}</td>
                    <td>
                        <img src="{{asset('archivo/'.$maq->archivo)}}" heigth=50 width=50>
                    </td>
                    <td><b>{{$maq->nombre_maq}}. </b>
                    {{$maq->descripcion_maq}}</td>
                    <td>{{$maq->existencia}}</td>
                    <td>$ {{$maq->precio}}</td>
                    <td align='center'>
                        <div class='row justify-content-md-center'>
                        @if($maq->deleted_at=="")
                        <form class='opcion' action="{{route('desactivamaquina',$maq->idm)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='desactivar'><i class='icon-ban'></i></a>
                        </form> 
                        {{csrf_field()}}
                        <a href="{{URL::action('Controller_maquinas@editamaquina',['idm'=>$maq->idm])}}" class='editar'><i class='icon-pencil'></i></a>
                        
                        @else
                        <form class='opcion' action="{{route('eliminamaquina',$maq->idm)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='eliminar'><i class='icon-close'></i></a>
                        </form>
                        <form class='opcion' action="{{route('restauramaquina',$maq->idm)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='restaurar'><i class='icon-check'></i></a>
                        </form>
                        @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <nav class="Page navigation">
            {!! $maquinas->render() !!}
        </nav>
    </div>
</div>
@stop