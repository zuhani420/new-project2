@extends('admin.master')

@section('title')
    Edit Unit Page
@endsection

@section('body')
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Edit Unit Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('unit.update', ['id' => $unit->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Edit Unit Name</label>
                            <input type="text" class="form-control" value="{{$unit->name}}" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label for="firstname" class="form-label">Edit Unit Code</label>
                            <input type="text" class="form-control" value="{{$unit->code}}" required name="code"/>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="form-label">Edit Unit Description</label>
                            <textarea class="form-control" rows="4" required name="description">{{$unit->description}}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update New Unit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
