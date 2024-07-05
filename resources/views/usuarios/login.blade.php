@extends('templates/master')

@section('titulo')
    <title>Login</title>
@endsection

@section('contenido-principal')

<div class="d-flex justify-content-center">
    <div class="col-12 col-md-9 col-lg-6">
        <div class="container">
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
                <div>
                    <a href="/register">No tienes cuenta? registrate aqui</a>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection