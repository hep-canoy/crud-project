@extends('layouts.layout')


@section('content')


    <div class="headerLabel d-flex align-items-center justify-content-between">
        <h1 class="d-inline p-2">Add New Product</h1>
        <a href="{{ route('products.index') }}" class="btn btn-primary back">Back</a>
    </div>


    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name:</label>
            <input class="form-control" type="text" name="productName">
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlTextarea1">Description:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="productDesc"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg m-5">Submit</button>
        </div>
    </form>

@endsection