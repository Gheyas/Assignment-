@extends('back.app')
@section('title', $option->option . ' | NCG')
@section('heading', $option->option)
@section('content')
<div class="row">
    <div class="col-md-12">
    <a href="{{route('admin.optionItem.create', $option)}}"
            class="btn btn-outline-success waves-effect float-right width-md waves-light ml-2">+ Add item</a>
        <a href="{{route('admin.response.index')}}"
            class="btn btn-outline-primary waves-effect float-right width-md waves-light">Back to Options</a>
        
        <h4 class="m-t-0 header-title">Manage Option Items</h4>
    </div>
</div>
<div class="row pt-2">
    @forelse($option->items as $item)
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">{{$item->item}}</h4>
                <br>
                <form style="display: inline" action="{{ route('admin.optionItem.destroy', $item) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger"
                        onclick="return confirm('Are you sure you want to delete this Item?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <h5 class="ml-2">No Items added yet</h5>
    @endforelse
</div>
@endsection