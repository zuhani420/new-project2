@extends('admin.master')

@section('title')
    Manage Sub Category Page
@endsection

@section('body')
    <div class="card card-body">
    <h4>All Sub Category Information</h4>
    <div class="row">
        <h4 class="text-center text-success">{{session('message')}}</h4>
        <table class="table table-bordered table-hover table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Sl No</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sub_categories as $sub_category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sub_category->category->name}}</td>
                    <td>{{$sub_category->name}}</td>
                    <td>{{$sub_category->description}}</td>
                    <td><img src="{{asset($sub_category->image)}}" alt="" height="50" width="70"/></td>
                    <td>{{$sub_category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    <td>
                        <a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-outline-success">Edit</a>
                        <a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are You Sure to delete this...?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
