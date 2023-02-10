@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h2>افزودن محصول جدید</h2>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> صفحه قبلی</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        شما یکی یا هیچ یکی از موارد تان را درج نکردید !<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام : </strong>
                <input type="text" name="name" class="form-control"  placeholder="بنویسید">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>قیمت : </strong>
                <input type="text" name="price" class="form-control" placeholder="بنویسید">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>رنگ : </strong>
                <input type="text" name="color" class="form-control" placeholder="بنویسید">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>اندازه : </strong>
                <input type="text" name="size" class="form-control" placeholder="بنویسید">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </div>

</form>
@endsection
