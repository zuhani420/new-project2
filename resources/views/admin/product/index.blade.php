@extends('admin.master')

@section('title')
    Add Product Page
@endsection

@section('body')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Add Product Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">Category Name</label>
                            <select class="form-control" name="category_id">
                                <option value=""> -- Select Category -- </option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Sub Category Name</label>
                            <select class="form-control" name="sub_category_id">
                                <option value=""> -- Select Sub Category -- </option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}"> {{$sub_category->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Brand Name</label>
                            <select class="form-control" name="brand_id">
                                <option value=""> -- Select Brand -- </option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}"> {{$brand->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Unit Name</label>
                            <select class="form-control" name="unit_id">
                                <option value=""> -- Select Unit -- </option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}"> {{$unit->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Code</label>
                            <input type="text" class="form-control" required name="code"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Stock Amount</label>
                            <input type="number" class="form-control" required name="stock_amount"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control" required name="regular_price" placeholder="Regular Price"/>
                                <input type="number" class="form-control" required name="selling_price" placeholder="Selling Price"/>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Short Description</label>
                            <textarea class="form-control" rows="4" required name="short_description"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Long Description</label>
                            <textarea class="form-control" id="summernote" rows="4" required name="long_description"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Image</label>
                            <input type="file" class="form-control" required name="image"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Other Image</label>
                            <input type="file" class="form-control" multiple required name="other_image[]"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Create New Product</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
