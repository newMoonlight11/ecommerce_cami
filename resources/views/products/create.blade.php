@extends('layout.app')
@section('title')
    Create
@endsection
@section('content')
    <div class="container">
        <br>
        <h2>CREAR UN PRODUCTO</h2>
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="">Nombre: </label>
                <input type="text" name="nombre" class="form-control" required placeholder="Ingresa el nombre">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Descripción: </label>
                <input type="text" name="descripcion" class="form-control" required placeholder="Ingresa la descripción">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Precio: </label>
                <input type="number" name="precio" class="form-control" required placeholder="Digita sólo números">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Categoria: </label>
                <select name="categoria" class="form-select">
                    <option value="">--Seleccionar--</option>
                    @foreach ($categorias as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Guardar información"></input>
        </form>
    </div>
@endsection
