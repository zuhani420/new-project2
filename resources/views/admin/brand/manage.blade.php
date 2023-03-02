@extends('admin.master')

@section('title')
    Manage Brand Page
@endsection

@section('body')
    <div class="card card-body">
    <h4>All Brand Information</h4>
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
            @foreach($brands as $brand)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->description}}</td>
                    <td><img src="{{asset($brand->image)}}" alt="" height="50" width="70"/></td>
                    <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    <td>
                        <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-outline-success">Edit</a>
                        <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are You Sure to delete this...?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
