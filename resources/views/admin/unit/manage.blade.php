@extends('admin.master')

@section('title')
    Manage Unit Page
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
                <th>Code</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($units as $unit)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$unit->name}}</td>
                    <td>{{$unit->code}}</td>
                    <td>{{$unit->description}}</td>
                    <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    <td>
                        <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-outline-success">Edit</a>
                        <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are You Sure to delete this...?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
