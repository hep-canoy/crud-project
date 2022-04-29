@extends('layouts.layout')

@section('content')

<div class="headerLabel d-flex align-items-center justify-content-between">
    <h1 class="d-inline">Show Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-success btn-md">Back</a>
</div>
<hr>
    <div class="row">
        <div class="col-6">
            <div class="form-group mt-3">
                <h4>Product Name: {{ $product->name }}</h4>
                <h4>Product Details: {{ $product->details }}</h4>
            </div>
            
        </div>
        
    </div>
@endsection