@extends('layouts.layout')


@section('content')

<form action="">
   
    <div class="headerLabel d-flex align-items-center justify-content-between">
        <h1 class="d-inline p-2">Add New Product</h1>
        <button type="button" class="btn btn-primary back">Back</button>
    </div>
        
    <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
        <input class="form-control" type="text" placeholder="Default input">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg m-5">Submit</button>
    </div>
    
</form>

@endsection