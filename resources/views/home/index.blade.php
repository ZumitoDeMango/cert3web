@extends('templates/master')

@section('titulo')
    <title>Venta de vehiculos</title>
@endsection

@section('contenido-principal')
    <div class="container">
        <div class="text-center">
            <h1>Bienvenido a la venta de vehiculos</h1>
        </div>
        <table>
            <tr>
                <th>Encabezado 1</th>
                <th>Encabezado 2</th>
            </tr>
            <tr>
                <td>Dato 1</td>
                <td>Dato 2</td>
            </tr>
            <tr>
                <td>Dato 3</td>
                <td>Dato 4</td>
            </tr>
        </table>
        <a href="https://www.example.com">Enlace a otra página</a>
        <button>Botón de Ejemplo</button>
    </div>
@endsection