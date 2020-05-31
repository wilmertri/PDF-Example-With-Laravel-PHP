@extends('pdf.pdf_layout')

@section('content')
    <h3 class="text-primary">Productos Registrados</h3>
    <hr>
    <table class="table table-bordered table-sm">
        <thead class="thead-light">
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
@endsection