@extends('Header.Head')
@section('contenido')
<div class="formulario">
    <h4 class='header-form'>Nueva maquina</h4>
    <hr>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <!--------------------------------------------- Descripcion ------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="nombre_maq">Nombre:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-settings"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nombre_maq" id="nombre_maq" placeholder="Nombre de la maquina" required>
                </div>
            </div>
            <!--------------------------------------------- Descripcion ------------------------------------------->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="descripcion_maq">Descripción:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-list"></i></span>
                    </div>
                    <input type="text" class="form-control"name="descripcion_maq" id="descripcion_maq" placeholder="Descripcion de la maquina" required>
                </div>
            </div>
            <!--------------------------------------------- Existencias ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="existencia">Existencias:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-social-dropbox"></i></span>
                    </div>
                    <input type="text" class="form-control"  name="existencia" id="existencia" placeholder="Existencias" required>
                </div>
            </div>
            <!--------------------------------------------- Precio ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="precio">Precio:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-basket-loaded"></i></span>
                    </div>
                    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio de la maquina" required>
                </div>
            </div>
            <!--------------------------------------------- Imagen ------------------------------------------->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="archivo">Imagen:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-picture"></i></span>
                    </div>
                    <input type="file" class="form-control" name="archivo" id="archivo" required>
                </div>
            </div>
        </div>
        <button class="btn btn-primary submit-form" type="submit">Enviar <i class="icon-paper-plane"></i></button>
    </form>
</div>
@stop