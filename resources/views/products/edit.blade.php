@extends('layouts.layout')


@section('content')
<div class="headerLabel d-flex align-items-center justify-content-between">
    <h1 class="d-inline p-2">Edit Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary back">Back</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Warning! There are problems with your inputs.</h4>
            @foreach ($errors->all() as $error)
            <p class="mb-0">>{{ $error }}</p>
            @endforeach
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
        <input class="form-control" type="text" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Details:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="details">{{ $product->details }}</textarea>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg m-5">Submit</button>
    </div>
</form>
@endsection
