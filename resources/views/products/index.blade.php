@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido Materno</th>

            <th scope="col">Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td><a href="#">{{ $product->nombre }}</a></td>
                <td>{{$product->ap}}</td>
                <td>{{$product->am}}</td>
                <td width="10px">
                    <a href="{{ route('editar', $product->id) }}" class="btn btn-sm btn-success">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
