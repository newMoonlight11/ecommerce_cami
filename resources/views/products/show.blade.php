@extends('layout.app')
@section('title')
    Show
@endsection
@section('content')
    <h1>Detalle del producto</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ $product->url_image }}" alt="">
            </div>
            <div class="col-md-4">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <h3>${{ $product->price }}</h3>
                <button class="btn btn-primary">Agregar al carrito de compras</button>
                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </div>
    </div>
@endsection
