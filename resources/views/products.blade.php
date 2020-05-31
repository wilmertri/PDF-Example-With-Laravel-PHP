@extends('layout')

@section('content')
    <h1>Listado de productos</h1>
    <hr>
    <p>
        <a href="{{ route('pdf.products') }}" class="btn btn-sm btn-primary">
            Descargar productos en PDF
        </a>
    </p>
    <table class="table table-hover table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Usuario</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td class="text-right">{{ $product->price }}</td>
                <td>{{ $product->user->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        {{ $products->links() }}
    </p>
@endsection