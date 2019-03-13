@extends('Header.Head')
@section('contenido')
<div class="formulario">
   <h4 class='header-form'><b>NUEVO  PROSPECTO</b></h4>
    <hr>
    <form class="needs-validation" action="{{route('guardarprospecto')}}" method='POST' enctype='multipart/form-data'>
     {{csrf_field()}}
       <div class="form-row">
           <!--------------------------------------------- Nombre Prospecto ------------------------------------------->
           <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="nombre_pro">Nombres:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nombre_pro" id="nombre_pro" value="{{old('nombre_pro')}}" placeholder="Nombres del Prospecto" >
                </div>
                @if($errors->first('nombre_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('nombre_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Apellido Paterno ------------------------------------------->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="apat_pro">Apellido Paterno:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="apat_pro" id="apat_pro" value="{{old('apat_pro')}}" placeholder="Primer Apellido" >
                </div>
                @if($errors->first('apat_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('apat_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Apellido Materno ------------------------------------------->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="amat_pro">Apellido Materno:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="amat_pro" id="amat_pro" value="{{old('amat_pro')}}" placeholder="Segundo Apellido" >
                </div>
                @if($errors->first('amat_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('amat_pro')}}
                    </div>
                @endif
            </div>
             <!--------------------------------------------- CURP ------------------------------------------->
             <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="curp_pro">Curp:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="curp_pro" id="curp_pro" value="{{old('curp_pro')}}" placeholder="Curp" >
                </div>
                @if($errors->first('curp_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('curp_pro')}}
                    </div>
                @endif
            </div>
             <!--------------------------------------------- Sexo ------------------------------------------->
             <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="sexo_pro">Sexo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="radio" class="form-control"  name="sexo_pro" id="sexo_pro" value="Hombre">Hombre
                    <input type="radio" class="form-control"  name="sexo_pro" id="sexo1_pro" value="Mujer">Mujer
                </div>
                @if($errors->first('sexo_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('sexo_pro')}}
                    </div>
                @endif
            </div>
             <!--------------------------------------------- Correo ------------------------------------------->
             <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="correo_pro">Correo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="correo_pro" id="correo_pro" value="{{old('correo_pro')}}" placeholder="Correo" >
                </div>
                @if($errors->first('correo_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('correo_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Empresa------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="empresa">Empresa:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input  class='form-control' type = 'file' name= 'empresa'>
                </div>
                @if($errors->first('empresa'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('empresa')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Localidad ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="localidad_pro">Localidad:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="localidad_pro" id="localidad_pro" value="{{old('lodalidad_pro')}}" placeholder="Localidad" >
                </div>
                @if($errors->first('localidad_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('localidad_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Codigo Postal ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="cp_pro">Codigo Postal:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="cp_pro" id="cp_pro" value="{{old('cp_pro')}}" placeholder="Codigo Postal" >
                </div>
                @if($errors->first('cp_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('cp_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Calle ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="calle_pro">Calle:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="calle_pro" id="calle_pro" value="{{old('calle_pro')}}" placeholder="Calle" >
                </div>
                @if($errors->first('calle_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('calle_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Numero interno ------------------------------------------->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="num_int_pro">Numero Interno:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="num_int_pro" id="num_int_pro" value="{{old('num_int_pro')}}" placeholder="Numero Interno" >
                </div>
                @if($errors->first('num_int_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('num_int_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Numero Externo ------------------------------------------->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="num_ext_pro">Numero Externo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="text" class="form-control" name="num_ext_pro" id="num_ext_pro" value="{{old('num_ext_pro')}}" placeholder="Numero Externo" >
                </div>
                @if($errors->first('num_ext_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('num_ext_pro')}}
                    </div>
                @endif
            </div>
             <!--------------------------------------------- municipio ------------------------------------------->
             <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="idmun">Municipio:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                      <select class='form-control' name = 'idmun'>
                          @foreach($municipios as $mun)
                          <option value = '{{$mun->idmun}}'>{{$mun->municipio}}</option>
                          @endforeach
                      </select>
                </div>
                @if($errors->first('idmun_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('idmun_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Telefono ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="tele_pro">Telefono:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="tele_pro" id="tele_pro" value="{{old('tele_pro')}}" placeholder="Telefono" >
                </div>
                @if($errors->first('tele_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('tele_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- id empleado ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="ide">Empleado:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <select class='form-control' name = 'ide'>
                          @foreach($empleados as $emple)
                          <option value = '{{$emple->ide}}'>{{$emple->nombre_emple}}</option>
                          @endforeach
                      </select>
                </div>
                @if($errors->first('ide_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('ide_pro')}}
                    </div>
                @endif
            </div>
            <!--------------------------------------------- Status ------------------------------------------->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="idstatus">Status:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <select class='form-control' name = 'idstatus'>
                          @foreach($tipoprospectos as $sta)
                          <option value = '{{$sta->idstatus}}'>{{$sta->statuss}}</option>
                          @endforeach
                      </select>
                </div>
                @if($errors->first('idstatus'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('idstatus')}}
                    </div>
                @endif
            </div>
            <!---------------------------------------------Fecha ------------------------------------------->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="fecha_pro">Fecha:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-layers"></i></span>
                    </div>
                    <input type="date" class="form-control" name="fecha_pro" id="fecha_pro" value="{{old('fecha_pro')}}" placeholder="Fecha" >
                </div>
                @if($errors->first('fecha_pro'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>ohoh!</strong> {{$errors->first('fecha_pro')}}
                    </div>
                @endif
            </div>
        </div>
       <button class="btn btn-primary submit-form" type="submit">Enviar <i class="icon-paper-plane"></i></button>
    </form>
</div>
@stop