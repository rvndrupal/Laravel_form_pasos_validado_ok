@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 1</h1>
    <hr>
    <form action="{{ route('crear.step1') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Nombre</label>
            <input type="text" value="{{ isset($product->nombre) ? $product->nombre: ''   }}" class="form-control" id="taskTitle"  name="nombre">
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Ir paso 2</button>
    </form>
@endsection
