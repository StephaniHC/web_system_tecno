@extends('layouts.app')

@section('content')
    <div class="container justify-content-center py-4">
        <div class="row">
            <div class="col-xs|sm|md|lg|xl-1-12">
                <div class="card bg-light border border-2" style="padding: 30px;">
                    <div class="card-header">
                        <h4 class="fw-bold">Registrar Socio</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/socio') }}">
                            @csrf
                            <div class="row mb-2">
                                <label for="ci" class="col-md-2 col-form-label ">CI </label>
                                <div class="col-md-10">
                                    <input type="number" name="ci" placeholder="8479154" class="form-control" min="1"
                                        step="1" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="nombre" class="col-md-2 col-form-label ">Nombre </label>
                                <div class="col-md-10">
                                    <input type="text" name="nombre" id="nombre" placeholder="Pepito Perez"
                                        class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="telefono" class="col-md-2 col-form-label ">Telefono </label>
                                <div class="col-md-10">
                                    <input type="tel" pattern="[0-9]{8}" name="telefono" id="telefono"
                                        placeholder="74814715" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="email" class="col-md-2 col-form-label ">Email </label>
                                <div class="col-md-10">
                                    <input type="email" name="email" id="email" placeholder="Pepito@gmail.com"
                                        class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="contrasenia" class="col-md-2 col-form-label ">Contraseña </label>
                                <div class="col-md-10">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="direccion" class="col-md-2 col-form-label ">Direccion </label>
                                <div class="col-md-10">
                                    <input type="text" name="direccion" id="direccion"
                                        placeholder="Av. Alemana entre 3er y 4to anillo" class="form-control" required>
                                </div>
                            </div>

                            {{-- <input type="hidden" name="tipo_usuario" value="S" id="tipo_usuario" class = "form-control"> --}}

                            <div class="row mb-2">
                                <label for="fecha_afiliacion" class="col-md-2 col-form-label ">Fecha de Afiliacion </label>
                                <div class="col-md-4">
                                    <input type="date" name="fecha_afiliacion" id="fecha_afiliacion" class="form-control"
                                        required>
                                </div>
                                <label for="fecha_inicio" class="col-md-2 col-form-label ">Fecha de Inicio </label>
                                <div class="col-md-4">
                                    <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="nro_puesto" class="col-md-2 col-form-label ">N° Puesto </label>
                                <div class="col-md-4">
                                    <input type="number" name="nro_puesto" id="nro_puesto" placeholder="256"
                                        class="form-control" required>
                                </div>
                                <label for="tipo_socio" class="col-md-2 col-form-label ">Tipo de Socio </label>
                                <div class="col-md-4">
                                    <select class="form-control" id="tipo_socio" name="tipo_socio" required>
                                        <option value="1">Activo</option>
                                        <option value="2">Pasivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-10 offset-md-2">
                                    <input type="submit" value="Guardar Datos" class="btn btn-success" required>
                                    <a href="{{ url('/socio') }}" class="btn btn-primary">
                                        Cancelar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?php
        session_start();
        if (isset($_SESSION['socio_view_create'])) {
            $_SESSION['socio_view_create'] = $_SESSION['socio_view_create'] + 1;
        } else {
            $_SESSION['socio_view_create'] = 1;
        }
        $x = $_SESSION['socio_view_create'];
        ?>
    </div>
@endsection
