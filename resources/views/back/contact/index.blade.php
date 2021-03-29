@extends('back.app')
@section('title', 'Contacts | Admin - NCG')
@section('heading', 'Manage Contacts')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="">
                    <tr class="row" style="display:table-row;">
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">name</th>
                        <th class="col-md-2">email</th>
                        <th class="col-md-2">phone</th>
                        <th class="col-md-3">message</th>
                        <th class="col-md-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($contacts as $contact)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$contact->fname . ' ' . $contact->lname}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->message}}</td>
                        <td>
                            <a href="mailto:{{$contact->email}}" class="btn btn-outline-primary">Reply</a>
                           <a class="btn btn-outline-danger" href="{{route('admin.contact.destroy', $contact)}}">delete</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
