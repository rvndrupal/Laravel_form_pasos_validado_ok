@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 2</h1>
    <hr>
    <form action="{{ route('crear.step2') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Sección Dos</h3><br/><br/>

        <div class="form-group">
            <label for="title">Apellido Paterno</label>
            <input type="text" value="{{ isset($product->ap) ? $product->ap: ''  }}" class="form-control" id="taskTitle"  name="ap">
        </div>
        <a type="button" href="{{ route('step1.form') }}" class="btn btn-warning">Paso 1</a>
        <button type="submit" class="btn btn-primary">Siguiente</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form><br/>


@endsection
