@extends('back.app')
@section('title', 'Products | NCG')
@section('heading', 'Products')
@section('content')
@php(session(['url' => url()->current()]))
<div class="row">
    <div class="col-md-12">
        <a href="{{route('admin.product.create')}}"
            class="btn btn-outline-success waves-effect float-right width-md waves-light">+ Add new</a>
        <h4 class="m-t-0 header-title">Manage Products</h4>
    </div>
</div>
<div class="row pt-2">
    @forelse($products as $item)
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{asset('storage/back/' . $item->image)}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title mb-0">{{$item->title}}</h4>
                <span class="mb-2 d-inline-block">price: {{$item->price}}</span>
                <br>
                <a href="{{route('admin.product.edit', $item)}}" class="btn btn-outline-primary">Edit</a>
                <form style="display: inline" action="{{ route('admin.product.destroy', $item) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger"
                        onclick="return confirm('Are you sure you want to delete this Product?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <h5 class="ml-2">No Products added yet</h5>
    @endforelse
</div>
@endsection