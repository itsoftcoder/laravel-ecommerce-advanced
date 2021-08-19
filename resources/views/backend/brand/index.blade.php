@extends('layouts.backend-master')

@section('title')
	Brands -Admin mcom 
@endsection

@push('css')
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
@endpush

@section('brand')
	active
@endsection

@section('content')
	<div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-inbox bg-blue"></i>
                            <div class="d-inline">
                                <h5>Brand</h5>
                                <span>All brand below here.manage and add new brand</span>
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
                                <li class="breadcrumb-item active" aria-current="page">brand</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>brand</h3></div>
                        <div class="card-body">
                            <table id="data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Logo</th>
                                        <th>Created At</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@forelse($brands as $brand)
               
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td><img src="{{ Storage::url('public/uploads/brand-logos/'.$brand->logo) }}" style="width: 60px;height: 60px;"></td>
                                        <td>{{ $brand->created_at}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('brand.edit',$brand->id) }}"><i class="ik ik-edit-2"></i></a>
                                                <a href="{{ route('brand.destroy',$brand->id) }}" onclick="return confirm('Are you sure delete this item ?')"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3">no brand available here</td></tr>

                                   @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                	<div class="card">
                		<div class="card-header">
                			<h3>
                                @isset($brand_show)
                                 Edit brand
                                 @else 
                                 Add brand
                                 @endisset
                            </h3>
                		</div>
                		<div class="card-body">
                            @isset ($brand_show)
                               <form class="forms-sample" action="{{ route('brand.update',$brand_show->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @else 
                                <form class="forms-sample" action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @endisset

                                <div data-repeater-list="group-a">
                                    <div data-repeater-item class="d-flex mb-2">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Brand Name" value="{{ $brand_show->name ?? old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Brand Logo</label>
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo" placeholder="Brand Name" value="{{ $brand_show->logo ?? old('logo') }}">
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <button data-repeater-delete type="button" class="btn btn-danger btn-icon ml-2" ><i class="ik ik-trash-2"></i></button>
                                 </div>
                                </div>

                                <button data-repeater-create type="button" class="btn btn-success btn-icon ml-2 mb-2"><i class="ik ik-plus"></i></button>

                                <button type="submit" class="btn btn-primary mr-2">
                                @isset ($brand_show)
                                    Update
                                    @else 
                                    Upload
                                @endisset   
                               </button>
                            </form>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
	<script src="{{ asset('backend') }}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jquery.repeater/jquery.repeater.min.js"></script>
    <script type="text/javascript">
        $('.repeater').repeater({
              // (Optional)
              // "defaultValues" sets the values of added items.  The keys of
              // defaultValues refer to the value of the input's name attribute.
              // If a default value is not specified for an input, then it will
              // have its value cleared.
               defaultValues: {
                'text-input': 'foo'
               },
              // (Optional)
              // "show" is called just after an item is added.  The item is hidden
              // at this point.  If a show callback is not given the item will
              // have $(this).show() called on it.
              show: function() {
                $(this).slideDown();
              },
              // (Optional)
              // "hide" is called when a user clicks on a data-repeater-delete
              // element.  The item is still visible.  "hide" is passed a function
              // as its first argument which will properly remove the item.
              // "hide" allows for a confirmation step, to send a delete request
              // to the server, etc.  If a hide callback is not given the item
              // will be deleted.
              hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                  $(this).slideUp(deleteElement);
                }
              },
              // (Optional)
              // Removes the delete button from the first list item,
              // defaults to false.
              isFirstItemUndeletable: true
            });
    </script>
 
   @if (session('status'))
    <script type="text/javascript">
    	(function($) {
    	$.toast({
		      heading: '{{ Str::title(session('type')) }}',
		      text: '{{ session('status') }}',
		      showHideTransition: 'slide',
		      icon: '{{ session('type') }}',
		      loaderBg: '{{ session('bg') }}',
		      position: 'top-right'
		    })
    	})(jQuery);
    
    </script>
@endif
  
@endpush