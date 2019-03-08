@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'><b>MODIFICA EMPLEADO</b></h4>
    <hr>
    <form class="needs-validation" action="{{route('actualizaempleado')}}" method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}
        <div class="row">
<!-----------------------------------------------------El id del cliente--------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12" hidden>
                    <label for="nombre_emple">ID:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-layers"></i></span>
                        </div>
                        <input type="text" class="form-control" name="ide" id="ide" value="{{$mempleado->ide}}" placeholder="Id del empleado" >
                    </div>
                    @if($errors->first('ide'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('ide')}}
                        </div>
                    @endif
            </div>
<!-----------------------------------------Caja e texto para el nombre del empleado---------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <label for="nombre_emple">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-layers"></i></span>
                        </div>
                        <input type="text" class="form-control" name="nombre_emple" id="nombre_emple" value="{{$mempleado->nombre_emple}}" placeholder="Nombre del empleado" >
                    </div>
                    @if($errors->first('nombre_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('nombre_emple')}}
                        </div>
                    @endif
                </div>
                
                <!-----------------------------------------Caja e texto para el apellido del empleado---------------------------------->
                <div class="col-sm-6 col-md-6 col-lg-6">
                        <label for="apat_emple">Apellido paterno del empleado:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="apat_emple" id="apat_emple" value="{{$mempleado->apat_emple}}"  placeholder="Apellido paterno del empleado">
                        </div>
                        @if($errors->first('apat_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('apat_emple')}}
                        </div>
                        @endif
                </div>
                <!-----------------------------------------Caja e texto para el apellido del empleado---------------------------------->
                <div class="col-sm-6 col-md-6 col-lg-6">
                        <label for="amat_emple">Apellido materno del empleado:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="amat_emple" id="amat_emple" value="{{$mempleado->amat_emple}}" placeholder="Apellido materno del empleado">
                        </div>
                        @if($errors->first('amat_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('amat_emple')}}
                        </div>
                        @endif
                </div>

                <!-----------------------------------------Caja e texto para la curp del empleado---------------------------------->
                <div class="col-sm-4 col-md-4 col-lg-4">
                        <label for="curp">CURP del empleado:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="curp" id="curp" value="{{$mempleado->curp}}" placeholder="CURP del empleado">
                        </div>
                        @if($errors->first('curp'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('curp')}}
                        </div>
                         @endif
                </div>
                
                <!--------------------------------------------- Fecha de nacimiento ------------------------------------------->
                <div class="col-sm-4 col-md-4 col-lg-4">
                        <label for="fecha_emple">Fecha de nacimiento:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control"  name="fecha_emple" id="fecha_emple" value="{{$mempleado->fecha_emple}}" placeholder="">
                        </div>
                        @if($errors->first('fecha_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('fecha_emple')}}
                        </div>
                         @endif
                </div>
                <!--------------------------------------------- Tipo ------------------------------------------->
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Tipo :</label>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-users"></i></span>
                            </div>
                                <select class="custom-select" name='tipo'>
                                <option>Administrador</option>
                                <option >Usuario</option>
                                </select>
                    </div>
                </div>
                <!----------------------------------------Calle---------------------------------------------->
                <div class="col-sm-6 col-md-6 col-lg-6">
                        <label for="calle_emple">Calle:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-home"></i></span>
                            </div>
                            <input type="text" class="form-control" name="calle_emple" id="calle_emple" value="{{$mempleado->calle_emple}}" placeholder="Calle del empleado" >
                        </div>
                        @if($errors->first('calle_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('calle_emple')}}
                        </div>
                         @endif

                </div>
                <!----------------------------------------Numero interior y exterior---------------------------------------------->
                <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="num_int_emple">No. interior:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-pointer"></i></span>
                            </div>
                            <input type="text" class="form-control" name="num_int_emple" id="num_int_emple" value="{{$mempleado->num_int_emple}}" placeholder="No. int.">
                        </div>
                        @if($errors->first('num_int_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('num_int_emple')}}
                        </div>
                         @endif

                </div>
                <!--------------------------------------------------------- Numero exterior-------------------------------------------------------->
                <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="num_ext_emple">No. exterior:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-pointer"></i></span>
                            </div>
                            <input type="text" class="form-control" name="num_ext_emple" id="num_ext_emple" value="{{$mempleado->num_ext_emple}}"  placeholder="No. ext.">
                        </div>
                        @if($errors->first('num_ext_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('num_ext_emple')}}
                        </div>
                         @endif
                </div>
                <!--------------------------------------------------------- Lcalidad --------------------------------------------------------->
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <label for="localidad_emple">Localidad:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-home"></i></span>
                        </div>
                        <input type="text" class="form-control" name="localidad_emple" id="localidad_emple" value="{{$mempleado->localidad_emple}}" placeholder="Localidad del empleado">
                    </div>
                    @if($errors->first('localidad_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('localidad_emple')}}
                        </div>
                         @endif
                </div>
                <!---------------------------------------------------------Municipio----------------------------------------------------->
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Municipio :</label>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-globe-alt"></i></span>
                            </div>
                            <select class="custom-select" name='idmun'>
                            <option value='{{$idmunemp}}'>{{$munemp}}</option>
                            @foreach($demasmun as $mun)
                                <option value='{{$mun->idmun}}'>{{$mun->municipio}}</option>
		                    @endforeach
                            
                            </select>
                    </div>
                </div>
                <!--------------------------------------------------------Código postal--------------------------------------------------->
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <label for="cp">Código Postal:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pointer"></i></span>
                        </div>
                        <input type="text" class="form-control" name="cp" id="cp" value="{{$mempleado->cp}}" placeholder="C.P.">
                    </div>
                    @if($errors->first('cp'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('cp')}}
                        </div>
                    @endif
                </div>
                <!--------------------------------------------------------Correo--------------------------------------------------->
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <label for="correo_emple">Correo electrónico:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" name="correo_emple" id="correo_emple" value="{{$mempleado->correo_emple}}" placeholder="Correo electronico">
                    </div>
                    @if($errors->first('correo_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('correo_emple')}}
                        </div>
                    @endif
                </div>
                <!--------------------------------------------------------Telefono--------------------------------------------------->
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <label for="tele_emple">Télefono:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-call-end"></i></span>
                        </div>
                        <input type="text" class="form-control" name="tele_emple" id="tele_emple" value="{{$mempleado->tele_emple}}" placeholder="Telefono del empleado">
                    </div>
                    @if($errors->first('tele_emple'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>ohoh!</strong> {{$errors->first('tele_emple')}}
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
                    <img class="card-img-top" src="{{asset('archivo/'.$mempleado->archivo)}}" style="width: 50px;">
                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        
                </div>


                    <div class="col-sm-4 col-md-4 col-lg-4">
							Sexo :
							@if($sexo =='Hombre')
							<div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="sexo1" name="sexo_emple" value='Hombre' checked>
                                <label class="custom-control-label" for="sexo1">Hombre</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="sexo" name="sexo_emple" value='Mujer'>
                                <label class="custom-control-label" for="sexo">Mujer</label>
                                <div class="invalid-feedback">Seleccione su sexo, por favor</div>
                            </div>
							@else
							<div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="sexo1" name="sexo_emple" value='Hombre'>
                                <label class="custom-control-label" for="sexo1">Hombre</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="sexo" name="sexo_emple" value='Mujer' checked>
                                <label class="custom-control-label" for="sexo">Mujer</label>
                                <div class="invalid-feedback">Seleccione su sexo, por favor</div>
                            </div>
							@endif
						</div>

        </div> 
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <button class="btn btn-primary submit-form" type="submit">Enviar <i class="icon-paper-plane"></i></button>
    </form>
</div>     
@stop