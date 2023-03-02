@extends('admin.master')

@section('title')
    Manage Category Page
@endsection

@section('body')
    <div class="card card-body">
    <h4>All Category Information</h4>
    <div class="row">
        <h4 class="text-center text-success">{{session('message')}}</h4>
        <table class="table table-bordered table-hover table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><img src="{{asset($category->image)}}" alt="" height="50" width="70"/></td>
                <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                <td>
                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure to delete this...?')">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
