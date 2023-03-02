@extends('admin.master')

@section('title')
    Add Sub Category Page
@endsection

@section('body')
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Add Sub Category Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('sub-category.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Category Name</label>
                            <select class="form-control" name="category_id">
                                <option value=""> -- Select Category -- </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Sub Category Name</label>
                            <input type="text" class="form-control" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="form-label">Sub Category Description</label>
                            <textarea class="form-control" rows="4" required name="description"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="file" class="form-label">Sub Category Image</label>
                            <input type="file" class="form-control" required name="image"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Create New Sub Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
