@extends('admin.master')

@section('title')
    Edit Product Page
@endsection

@section('body')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Edit Product Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">Category Name</label>
                            <select class="form-control" name="category_id">
                                <option value=""> -- Select Category -- </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}> {{$category->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Sub Category Name</label>
                            <select class="form-control" name="sub_category_id">
                                <option value=""> -- Select Sub Category -- </option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}" {{$product->sub_category_id == $sub_category->id ? 'selected' : ''}}> {{$sub_category->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Brand Name</label>
                            <select class="form-control" name="brand_id">
                                <option value=""> -- Select Brand -- </option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}> {{$brand->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Unit Name</label>
                            <select class="form-control" name="unit_id">
                                <option value=""> -- Select Unit -- </option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}" {{$product->unit_id == $unit->id ? 'selected' : ''}}> {{$unit->name}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" value="{{$product->name}}" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Code</label>
                            <input type="text" class="form-control" value="{{$product->code}}" required name="code"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Stock Amount</label>
                            <input type="number" class="form-control" value="{{$product->stock_amount}}" required name="stock_amount"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control" value="{{$product->regular_price}}" required name="regular_price" placeholder="Regular Price"/>
                                <input type="number" class="form-control" value="{{$product->selling_price}}" required name="selling_price" placeholder="Selling Price"/>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Short Description</label>
                            <textarea class="form-control" rows="4" required name="short_description">{{$product->short_description}}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Long Description</label>
                            <textarea class="form-control" id="summernote" rows="4" required name="long_description">{{$product->long_description}}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="image"/>
                            <img src="{{asset($product->image)}}" alt="" height="100" width="130"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Other Image</label>
                            <input type="file" class="form-control" multiple name="other_image[]"/>
                            @foreach($product->otherImages as $otherImage)
                                <img src="{{asset($otherImage->image)}}" alt="" height="100" width="130"/>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Product Info</button>
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
