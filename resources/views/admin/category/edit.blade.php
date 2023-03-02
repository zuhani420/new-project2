@extends('admin.master')

@section('title')
    Edit Category Page
@endsection

@section('body')
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Edit Category Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Edit Category Name</label>
                            <input type="text" value="{{$category->name}}" class="form-control" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="form-label">Edit Category Description</label>
                            <textarea class="form-control" rows="4" required name="description">{{$category->description}}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="file" class="form-label">Edit Category Image</label>
                            <input type="file" class="form-control" name="image"/>
                            <img src="{{asset($category->image)}}" alt="" height="100" width="130"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Category Info</button>
                </form>
            </div>
        </div>
    </div>
@endsection
