@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 2</h1>
    <hr>
    <form action="{{ route('crear.step3') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Sección Tres</h3><br/><br/>

        <div class="form-group">
            <label for="title">Apellido Materno</label>
            <input type="text" value="{{ isset($product->am) ? $product->am: ''  }}" class="form-control" id="taskTitle"  name="am">
        </div>
        <a type="button" href="{{ route('step1.form') }}" class="btn btn-warning">Paso 1</a>
        <a type="button" href="{{ route('step2.form') }}" class="btn btn-warning">Paso 2</a>
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
