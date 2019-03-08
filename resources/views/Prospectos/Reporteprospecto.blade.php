@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>RESULTADO DE CONSULTA</b></h4>
    <p>
        <span id='pro-total'>{{$prospectos->total()}}</span> Registros |
        Página {{$prospectos->currentPage()}}
        de {{$prospectos->lastPage()}}
    </p>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-success alert-dismissible" id='alert-prospectos' role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong></strong>
        </div>
        <table class="table-sm">
            <thead>
                <tr>
                    <th scope="col" width='15px'>ID</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Status</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            @foreach($prospectos as $pro)
                <tr>
                    <td>{{$pro->idp}}</td>
                    <td>
                        <img src="{{asset('archivo/'.$pro->empresa)}}" heigth=50 width=50>
                    </td>
                    <td><b>{{$pro->nombre_pro}}. </b>
                    {{$pro->apat_pro}}{{$pro->amat_pro}}</td>
                    <td>{{$pro->idstatus}}</td>
                    
                    <td align='center'>
                        <div class='row justify-content-md-center'>
                        @if($pro->deleted_at=="")
                        <form class='opcion' action="{{route('desactivaprospecto',$pro->idp)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='desactivar-prospecto'><i class='icon-ban'></i></a>
                        </form> 
                        
                        
                        
                        {{csrf_field()}}
                        <a href="{{URL::action('Controller_prospectos@editaprospecto',['idp'=>$pro->idp])}}" class='editar'><i class='icon-pencil'></i></a>
                        @else


                        <form class='opcion' action="{{route('eliminaprospecto',$pro->idp)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='eliminar-prospecto'><i class='icon-close'></i></a>
                        </form>
                        <form class='opcion' action="{{route('restauraprospecto',$pro->idp)}}" method='POST' enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <a href="#" class='restaurar-prospecto'><i class='icon-check'></i></a>
                        </form>
                        @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <nav class="Page navigation">
            {!! $prospectos->render() !!}
        </nav>
    </div> 
</div>
@stop