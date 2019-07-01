@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 3</h1>
    <hr>
    <h3>Vista Previa</h3>
    <form action="{{  route('crear_general') }}" method="post" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Nombre:</td>
                <td><strong>{{$product->nombre}}</strong></td>
            </tr>
            <tr>
                <td>Apellido paterno:</td>
                <td><strong>{{$product->ap}}</strong></td>
            </tr>
            <tr>
                <td>Apellido Materno:</td>
                <td><strong>{{$product->am}}</strong></td>
            </tr>

        </table>
        <a type="button" href="{{ route('step1.form') }}" class="btn btn-warning">Paso 1</a>
        <a type="button" href="{{ route('step2.form') }}" class="btn btn-warning">Paso 2</a>
        <a type="button" href="{{ route('step3.form') }}" class="btn btn-warning">Paso 3</a>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
@endsection
