@extends('layouts.backend-master')
@section('title')
  Add new product page - Admin Mcom
@endsection
@section('product')
    active
@endsection

@push('css')

{{-- <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/dist/summernote-bs4.css"> --}}
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
{{-- <link rel="stylesheet" href="{{ asset('backend') }}/plugins/mohithg-switchery/dist/switchery.min.css"> --}}

@endpush

@section('content')

                <div class="main-content">
                    <div class="container-fluid">
                        
                        <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-inbox bg-blue"></i>
                            <div class="d-inline">
                                <h5>Product</h5>
                                <span>Add new product below here</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../index.html"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('product.index') }}">Product list</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
                        
                        <div class="card">
                        <div class="card-header">
                            <h3>
                                @isset($product_show)
                                 Edit product
                                 @else 
                                 Add New product
                                 @endisset
                            </h3>
                        </div>
                        <div class="card-body">
                            @isset ($product_show)
                               <form class="forms-sample" action="{{ route('product.update',$product_show->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @else 
                                <form class="forms-sample" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @endisset
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" id="product_name" placeholder="product Name" value="{{ $product_show->product_name ?? old('product_name') }}">
                                            @error('product_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Product Price</label>
                                            <input type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price" id="product_price" placeholder=" product_price" value="{{ $product_show->product_price ?? old('product_price') }}">
                                            @error('product_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="product_quantity">Product Quantity</label>
                                            <input type="text" class="form-control @error('product_quantity') is-invalid @enderror" name="product_quantity" id="product_quantity" placeholder="product_quantity" value="{{ $product_show->product_quantity ?? old('product_quantity') }}">
                                            @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Product Type</label>
                                            <select name="product_type" class="form-control @error('product_type') is-invalid @enderror">
                                                <option disabled="" selected="">Choose type</option>
                                                <option value="new">New</option>
                                                <option value="hot">Hot</option>
                                                <option value="sell">Sell</option>
                                                
                                            </select>

                                            @error('product_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="product_thumbnail">Product_thumbnail</label>
                                            <input type="file" class="form-control @error('product_thumbnail') is-invalid @enderror" name="product_thumbnail" id="product_thumbnail" value="{{ $product_show->product_thumbnail ?? old('product_thumbnail') }}">
                                            @error('product_thumbnail')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="size">Size</label>
                                            <input type="text" class="form-control @error('size') is-invalid @enderror" name="size" id="size" placeholder="product size" value="{{ $product_show->size ?? old('size') }}">
                                            @error('size')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" id="color" placeholder="product color" value="{{ $product_show->color ?? old('color') }}">
                                            @error('color')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option disabled="" selected="">Choose Status</option>
                                                <option value="1">In Stock</option>
                                                <option value="0">Out Stock</option>
                                                <option value="2">Upcoming</option>       
                                            </select>

                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Sub Category</label>
                                            <select name="subCategory" class="form-control @error('subCategory') is-invalid @enderror">
                                                <option disabled="" selected="">Choose SubCategory</option>
                                                @forelse ($subCategories as $subCategory)
                                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }} ({{ $subCategory->category->name }})</option>
                                                @empty
                                                    <option disabled="">No Available Sub Category</option>
                                                @endforelse
                                                
                                            </select>

                                            @error('subCategory')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Brand</label>
                                            <select name="brand" class="form-control @error('brand') is-invalid @enderror">
                                                <option disabled="" selected="">Choose Brand</option>
                                                @forelse ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @empty
                                                    <option disabled="">No Available Brand</option>
                                                @endforelse
                                                
                                            </select>
                                            @error('brand')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tag">Tags</label>
                                                <input type="text" id="tags" class="form-control" name="tag" value="{{ old('tag') }}">
                                            @error('tag')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tag">Short Description</label>
                                                <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description">{{ old('short_description') }}</textarea>
                                            @error('short_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tag">Full Description</label>
                                                <textarea class="form-control @error('full_description') is-invalid @enderror" name="full_description">{{ old('full_description') }}</textarea>
                                            @error('full_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mr-2">
                                @isset ($product_show)
                                    Update
                                    @else 
                                    Add
                                @endisset   
                               </button>
                          </form>
                        </div>
                    </div>
                    </div>
                </div>

@endsection

@push('js')
{{-- <script src="{{ asset('backend') }}/plugins/select2/dist/js/select2.min.js"></script>
<script src="{{ asset('backend') }}/plugins/summernote/dist/summernote-bs4.min.js"></script> --}}
<script src="{{ asset('backend') }}/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
{{-- <script src="{{ asset('backend') }}/plugins/jquery.repeater/jquery.repeater.min.js"></script>
<script src="{{ asset('backend') }}/plugins/mohithg-switchery/dist/switchery.min.js"></script> --}} 

@endpush

