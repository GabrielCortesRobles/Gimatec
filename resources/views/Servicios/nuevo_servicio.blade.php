@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>NUEVO SERVICIO</b></h4>
    <hr>
    <form class="needs-validation" action="{{route('guardaservicio')}}" method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}
    <div class="form-row">
            <!--------------------------------------------- Descripcion ------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="servicio">Nombre del servico:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-wrench"></i></span>
                    </div>
                    <input type="text" class="form-control" name="servicio" id="servicio" value="{{old('servicio')}}" placeholder="Nombre del servicio" >
                </div>
                @if($errors->first('servicio'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('servicio')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Descripcion ------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="descripcion">Descripción:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-list"></i></span>
                    </div>
                    <input type="text" class="form-control"name="descripcion" id="descripcion" value="{{old('descripcion')}}" placeholder="Descripcion de la maquina" >
                </div>
                @if($errors->first('descripcion'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('descripcion')}}
                    </div>
                @endif
            </div>
        </div>
        <button class="btn btn-primary submit-form" type="submit">Enviar <i class="icon-paper-plane"></i></button>
    </form>
    </div>
</div>
@stop