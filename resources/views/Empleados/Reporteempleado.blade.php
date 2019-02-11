@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>RESULTADO DE CONSULTA</b></h4>
    <p>
        <span id='maq-total'>{{$empleados->total()}}</span> Registros |
        Página {{$empleados->currentPage()}}
        de {{$empleados->lastPage()}}
    </p>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-success alert-dismissible" id='alert-empleados' role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong></strong>
        </div>
        <table class="table-sm">
            <thead>
                <tr>
                    <th scope="col" width='15px'>ID</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">NOMBRE DEL EMPLEADO</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            @foreach($empleados as $emp)
                <tr>
                    <td>{{$emp->ide}}</td>
                    <td>
                        <img src="{{asset('archivo/'.$emp->archivo)}}" heigth=50 width=50>
                    </td>
                    <td>{{$emp->nombre_emple}}
                    {{$emp->apat_emple}} {{$emp->amat_emple}}</td>
                    <td>{{$emp->tipo}}</td>
                    <td> {{$emp->correo_emple}}</td>
                    <td align='center'>
                        <div class='row justify-content-md-center'>
                        @if($emp->deleted_at=="")
                        <form class='opcion' action="{{route('desactivaempleado',$emp->ide)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='desactivar'><i class='icon-ban'></i></a>
                        </form> 
                        <form class='opcion' action="{{route('editaempleado',$emp->ide)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='editar'><i class='icon-pencil'></i></a>
                        </form>
                        @else
                        <form class='opcion' action="{{route('eliminaempleado',$emp->ide)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='eliminar'><i class='icon-close'></i></a>
                        </form>
                        <form class='opcion' action="{{route('restauraempleado',$emp->ide)}}" method='POST' enctype='multipart/form-data'>
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
            {!! $empleados->render() !!}
        </nav>
    </div>
</div>
@stop