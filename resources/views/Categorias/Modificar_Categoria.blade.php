@extends('Header.Head')
@section('contenido')
<div class="formulario">
     <h4 class='header-form'><b>NUEVA Categoria</b></h4>
     <hr>
     <form class="needs-validation" action="{{route('actualizacategoria')}}" method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        <div class="form-row">
                   Clave<input type = 'text' class='form-control' name = 'idc' value="{{$categoria->idc}}" hidden>
             <!--------------------------------------------- Descripcion ------------------------------------------->
             <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="categoria">Nombre de Nueva Categoria:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="categoria" id="categoria" value="{{$categoria->categoria}}" placeholder="Nueva Categoria" >
                </div>
                @if($errors->first('categoria'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('categoria')}}
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
                    <input type="text" class="form-control"name="descripcion" id="descripcion" value="{{$categoria->descripcion}}" placeholder="Descripcion de la nueva categoria" >
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
@stop