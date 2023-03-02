@extends('admin.master')

@section('title')
    Add Brand Page
@endsection

@section('body')
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Add Brand Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('brand.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="form-label">Brand Description</label>
                            <textarea class="form-control" rows="4" required name="description"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="file" class="form-label">Brand Image</label>
                            <input type="file" class="form-control" required name="image"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Create New Brand</button>
                </form>
            </div>
        </div>
    </div>
@endsection
