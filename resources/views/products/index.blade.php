@extends('layouts.layout')


@section('content')

    <div class="headerLabel d-flex align-items-center justify-content-between">
        <h1 class="d-inline p-2">List of Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success btn-md">Add New Product</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Details</th>
                <th width="280px" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->details }}</td>
                <td>
                        <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="{{ route('products.destroy', $product->id) }}">Delete</a>
                        
                   
                   
                </td>
            </tr>
            @endforeach
            
        
        
        </tbody>
    </table>
{{ $products->links() }}

@endsection
