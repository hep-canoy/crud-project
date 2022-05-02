@extends('layouts.layout')


@section('content')
<div class="headerLabel d-flex align-items-center justify-content-between">
    <h1 class="d-inline p-2">Add New Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary back">Back</a>
</div>

@endsection
