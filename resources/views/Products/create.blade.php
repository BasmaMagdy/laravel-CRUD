@extends('Products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>

        <div class="pull-right" style="float:right;">
                <a class="btn btn-primary" href=""{{ route('product.index') }} > Back </a>
        </div>
    
    </div>
</div>

@if ($errors -> any())
    <div class="alert alert-danger">
        <strong style="color:red;">Whooooops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ( $errors->all() as $error)
                <li> {{ $error }}</li>                
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm--12 col-md-12">
            <div class="form-group">
                <Strong style="color:blue;">Name:</Strong>
                <input type="text" name="name" class="form-control" placeholder="Name" style="width:100%; margin-bottom:10px;">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <Strong style="color:blue;">Detail:</Strong>
                <textarea class="form-control" style="width: 100%; height:150px;margin-top:10px;" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection