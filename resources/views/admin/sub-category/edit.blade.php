@extends('admin.master')

@section('title')
    Edit Sub Category Page
@endsection

@section('body')
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Edit Sub Category Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Category Name</label>
                            <select class="form-control" name="category_id">
                                <option value=""> -- Select Category -- </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$sub_category->category_id == $category->id ? 'selected' : ''}}> {{$category->name}}  </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="name" class="form-label">Sub Category name</label>
                            <textarea class="form-control" value="{{$sub_category->name}}"required name="name"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="description" class="form-label">Sub Category Description</label>
                            <textarea class="form-control" rows="4" required name="description">{{$sub_category->description}}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="file" class="form-label">Sub Category Image</label>
                            <input type="file" class="form-control" name="image"/>
                            <img src="{{asset($sub_category->image)}}" alt="" height="100" width="130"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Sub Category Info</button>
                </form>
            </div>
        </div>
    </div>
@endsection
