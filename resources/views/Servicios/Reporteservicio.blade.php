@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>RESULTADO DE CONSULTA</b></h4>
    <p>
        <span id='maq-total'>{{$servicios->total()}}</span> Registros |
        Página {{$servicios->currentPage()}}
        de {{$servicios->lastPage()}}
    </p>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-success alert-dismissible" id='alert-servicios' role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong></strong>
        </div>
        <table class="table-sm">
            <thead>
                <tr>
                    <th scope="col" width='15px'>ID</th>
                    <th scope="col">SERVICIO</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            @foreach($servicios as $ser)
                <tr>
                    <td>{{$ser->ids}}</td>
                    <td>{{$ser->servicio}}</td>
                    <td>{{$ser->descripcion}}</td>
                    <td align='center'>
                        <div class='row justify-content-md-center'>
                        @if($ser->deleted_at=="")
                        <form class='opcion' action="{{route('desactivaservicio',$ser->ids)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='desactivar'><i class='icon-ban'></i></a>
                        </form> 
                        <form class='opcion' action="{{route('editaservicio',$ser->ids)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='editar'><i class='icon-pencil'></i></a>
                        </form>
                        @else
                        <form class='opcion' action="{{route('eliminaservicio',$ser->ids)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='eliminar'><i class='icon-close'></i></a>
                        </form>
                        <form class='opcion' action="{{route('restauraservicio',$ser->ids)}}" method='POST' enctype='multipart/form-data'>
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
            {!! $servicios->render() !!}
        </nav>
    </div>
</div>
@stop