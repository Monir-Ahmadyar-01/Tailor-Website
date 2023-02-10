@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <h2>نمایش محصولات</h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('products.create') }}"> ایجاد محصول جدید</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>شماره</th>
            <th>نام</th>
            <th>قیمت</th>
            <th>رنگ</th>
            <th>اندازه</th>
            <th width="180px">عمل</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->color }}</td>
            <td>{{ $product->size }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">نمایش</a> --}}
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">اصلاح</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}


@endsection
