@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 1</h1>
    <hr>
    <form action="/products/editar-step1" method="post">
        {{ csrf_field() }}
        <h1>Editar Producto</h1>
        <hr>
        <input type="hidden" value="{{ $products->id }}" >
        <div class="form-group">
            <label for="title">Product Name</label>
            <input type="text" value="{{ $products->name }}" class="form-control" id="taskTitle"  name="name">
        </div>
        <div class="form-group">
            <label for="description">Product Company</label>
            <select class="form-control" name="company">
                <option {{{ (isset($product->company) && $product->company == 'Apple') ? "selected=\"selected\"" : "" }}}>Apple</option>
                <option {{{ (isset($product->company) && $product->company == 'Google') ? "selected=\"selected\"" : "" }}}>Google</option>
                <option {{{ (isset($product->company) && $product->company == 'Mi') ? "selected=\"selected\"" : "" }}}>Mi</option>
                <option {{{ (isset($product->company) && $product->company == 'Samsung') ? "selected=\"selected\"" : "" }}}>Samsung</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Product Amount</label>
            <input type="text"  value="{{ $products->amount }}" class="form-control" id="productAmount" name="amount"/>
        </div>
        <div class="form-group">
            <label for="description">Product Available</label><br/>
            {{--  <label class="radio-inline"><input type="radio" name="available" value="1" {{{ (isset($product->available) && $product->available == '1') ? "checked" : "" }}}> Yes</label>
            <label class="radio-inline"><input type="radio" name="available" value="0" {{{ (isset($product->available) && $product->available == '0') ? "checked" : "" }}}> No</label>  --}}
            <label class="radio-inline"><input type="radio" name="available" value="1" {{{ (isset($product->available) && $product->available == '1') ? "checked" : "" }}}> Yes</label>
            <label class="radio-inline"><input type="radio" name="available" value="0" {{{ (isset($product->available) && $product->available == '0') ? "checked" : "" }}}> No</label>
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea type="text"  class="form-control" id="taskDescription" name="description">{{ $products->description }}</textarea>
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
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection
