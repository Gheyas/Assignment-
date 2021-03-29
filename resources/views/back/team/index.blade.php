@extends('back.app')
@section('title', 'Team Members | Admin - NCG')
@section('heading', 'Team Members')
@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{route('admin.team.create')}}"
            class="btn btn-outline-success waves-effect float-right width-md waves-light mr-3">+ Add new</a>
        <h4 class="m-t-0 header-title">Manage Team Members</h4>
    </div>
</div>
<div class="row pt-2">
    @forelse($members as $item)
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{asset('storage/back/' . $item->image)}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$item->title}}</h4>
                <a href="{{route('admin.team.edit', $item)}}" class="btn btn-outline-primary">Edit</a>
                <form style="display: inline" action="{{ route('admin.team.destroy', $item) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger"
                        onclick="return confirm('Are you sure you want to delete this team member?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <h5 class="ml-2">No members added yet</h5>
    @endforelse
</div>
@endsection
