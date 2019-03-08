@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>NUEVA MAQUINA</b></h4>
    <hr>
    <form class="needs-validation" action="{{route('actualizamaquina')}}" method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}
        <div class="form-row">

            <!-----------------------------------------------------El id del cliente--------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12" hidden>
                <label for="idm">ID:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="idm" id="idm" value="{{$maq->idm}}" placeholder="Nombre de la maquina" >
                </div>
                @if($errors->first('idm'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('idm')}}
                    </div>
                @endif
            </div>
            
            <!--------------------------------------------- Descripcion ------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="nombre_maq">Nombre:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nombre_maq" id="nombre_maq" value="{{$maq->nombre_maq}}" placeholder="Nombre de la maquina" >
                </div>
                @if($errors->first('nombre_maq'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('nombre_maq')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Descripcion ------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="descripcion_maq">Descripción:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-list"></i></span>
                    </div>
                    <input type="text" class="form-control"name="descripcion_maq" id="descripcion_maq" value="{{$maq->descripcion_maq}}" placeholder="Descripcion de la maquina" >
                </div>
                @if($errors->first('descripcion_maq'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('descripcion_maq')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Existencias ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="existencia">Existencias:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="existencia" id="existencia" value="{{$maq->existencia}}" placeholder="Existencias" >
                </div>
                @if($errors->first('existencia'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('existencia')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Precio ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="precio">Precio:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="">$</i></span>
                    </div>
                    <input type="text" class="form-control" name="precio" id="precio" value="{{$maq->precio}}" placeholder="Precio de la maquina" >
                </div>
                @if($errors->first('precio'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('precio')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Imagen ------------------------------------------->
            <div class="col-sm-8 col-md-8 col-lg-8">
                    <label for="archivo">Imagen:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-picture"></i></span>
                        </div>
                        <input type="file" class="form-control" name="archivo" id="archivo" >
                    </div>
                    <br>
                    <img class="card-img-top" src="{{asset('archivo/'.$maq->archivo)}}" style="width: 50px;">
                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        
                </div>
        </div>
        <button class="btn btn-primary submit-form" type="submit">Enviar <i class="icon-paper-plane"></i></button>
    </form>
</div>
@stop