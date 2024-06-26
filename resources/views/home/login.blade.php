@extends('templates/master')

@section('titulo')
    <title>Login</title>
@endsection

@section('contenido-principal')

<div class="d-flex justify-content-center">
    <div class="col-6">
        <div class="container" data-bs-theme="dark">
            <form action="">
                <div class="mb-3 text-center">
                    <h3>Login</h3>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ingrese su correo</label>
                    <input type="email" name="" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ingrese su contraseña</label>
                    <input type="password" name="" id="" class="form-control">
                </div>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</div>

@endsection