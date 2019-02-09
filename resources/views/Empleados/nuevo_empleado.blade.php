@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class="header-form"><b>NUEVO EMPLEADO</b></h4>
    {{csrf_field()}}
    <div class="row">
        <!-----------------------------------------Caja e texto para el nombre del empleado---------------------------------->
        <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="nombre_emple">Nombre del empleado:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nombre_emple" id="nombre_emple" placeholder="Nombre del empleado" required>
                </div>
        </div>
        
        <!-----------------------------------------Caja e texto para el apellido del empleado---------------------------------->
        <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="apat_emple">Apellido paterno del empleado:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="apat_emple" id="apat_emple" placeholder="Apellido paterno del empleado" required>
                </div>
        </div>
        <!-----------------------------------------Caja e texto para el apellido del empleado---------------------------------->
        <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="amat_emple">Apellido materno del empleado:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="amat_emple" id="amat_emple" placeholder="Apellido materno del empleado" required>
                </div>
        </div>

        <!-----------------------------------------Caja e texto para la curp del empleado---------------------------------->
        <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="curp">CURP del empleado:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="curp" id="curp" placeholder="CURP del empleado" required>
                </div>
        </div>
        
        <!--------------------------------------------- Fecha de nacimiento ------------------------------------------->
        <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="fecha_emple">Fecha de nacimiento:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control"  name="fecha_emple" id="fecha_emple" placeholder="" required>
                </div>
        </div>
        <!--------------------------------------------- Tipo ------------------------------------------->
        <div class="col-sm-4 col-md-4 col-lg-4">
            <label>Tipo :</label>
            <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-users"></i></span>
                    </div>
                        <select class="custom-select" name='tipo' required>
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
                    <input type="text" class="form-control" name="calle_emple" id="calle_emple" placeholder="Calle del empleado" required>
                </div>
        </div>
        <!----------------------------------------Numero interior y exterior---------------------------------------------->
            <div class="col-sm-3 col-md-3 col-lg-3">
                    <label for="num_int_emple">No. interior:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pointer"></i></span>
                        </div>
                        <input type="text" class="form-control" name="num_int_emple" id="num_int_emple" placeholder="No. int." required>
                    </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                    <label for="num_ext_emple">No. exterior:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pointer"></i></span>
                        </div>
                        <input type="text" class="form-control" name="num_ext_emple" id="num_ext_emple" placeholder="No. ext." required>
                    </div>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">
                <label for="localidad_emple">Localidad:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-home"></i></span>
                    </div>
                    <input type="text" class="form-control" name="localidad_emple" id="localidad_emple" placeholder="Localidad del empleado" required>
                </div>
            </div>
            <!---------------------------------------------------------Municipio----------------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label>Municipio :</label>
                <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-users"></i></span>
                        </div>
                            <select class="custom-select" name='tipo' required>
                            <option>Administrador</option>
                            <option >Usuario</option>
                            </select>
                </div>
            </div>
            <!--------------------------------------------------------Código postal--------------------------------------------------->
            <div class="col-sm-3 col-md-3 col-lg-3">
                <label for="nombre_emple">Código Postal:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nombre_emple" id="nombre_emple" placeholder="C.P." required>
                </div>
        </div>



<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    </div>

</div>     
@stop