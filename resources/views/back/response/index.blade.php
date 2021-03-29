@extends('back.app')
@section('title', 'Covid 19 Response | NCG')
@section('heading', 'Covid 19 Response')
@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{route('admin.option.create')}}"
            class="btn btn-outline-success waves-effect float-right width-md waves-light">+ Add Option</a>
        <h4 class="m-t-0 header-title">Manage Covid 19 Response</h4>
    </div>
</div>
<div class="row pt-2">
    @forelse($options as $item)
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">{{$item->option}}</h4>
                <br>
                <a href="{{route('admin.option.show', $item)}}" class="btn btn-outline-secondary">View</a>
                <a href="{{route('admin.option.edit', $item)}}" class="btn btn-outline-primary">Edit</a>
                <form style="display: inline" action="{{ route('admin.option.destroy', $item) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger"
                        onclick="return confirm('Are you sure you want to delete this Option?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <h5 class="ml-2">No Options added yet</h5>
    @endforelse
</div>
@endsection