@extends('layouts.backend-master')

@section('title')
	Sub Category -Admin mcom 
@endsection

@push('css')
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
@endpush

@section('subCategory')
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
                                <h5>Sub Category</h5>
                                <span>All Sub Category below here.manage and add new Sub Category</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Sub Category</h3></div>
                        <div class="card-body">
                            <table id="data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>Added By</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@forelse($subCategorys as $subCategory)
               
                                    <tr>
                                        <td>{{ $subCategory->id }}</td>
                                        <td>{{ $subCategory->name }}</td>
                                        <td>{{ $subCategory->category->name}}</td>
                                        <td>{{ $subCategory->user->name }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('subCategory.edit',$subCategory->id) }}"><i class="ik ik-edit-2"></i></a>
                                                <a href="{{ route('subCategory.destroy',$subCategory->id) }}" onclick="return confirm('Are you sure delete this item ?')"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3">no subCategory available here</td></tr>

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
                                @isset($subCategory_show)
                                 Edit Sub Category
                                 @else 
                                 Add Sub Category
                                 @endisset
                            </h3>
                		</div>
                		<div class="card-body">
                			@isset ($subCategory_show)
                			   <form class="forms-sample" action="{{ route('subCategory.update',$subCategory_show->id) }}" method="POST">
                				@csrf
                				@method('PUT')
                			    @else 
                			    <form class="forms-sample" action="{{ route('subCategory.store') }}" method="POST">
                				@csrf
                			@endisset
                				
		                        <div class="form-group">
		                            <label for="name">Name</label>
		                            <input type="text" class="form-control" name="name" id="name" placeholder="Menu Name" value="{{ $subCategory_show->name ?? old('name') }}">
		                        </div>
		                        <div class="form-group">
		                            <label for="category">Choose Menu</label>
		                            <select name="category" class="form-control">
                                        @foreach ($categorys as $category)
                                            <option value="{{ $category->id }}" @isset($subCategory_show)@if($category->id == $subCategory_show->category_id) selected="" @endif @endisset>{{ $category->name }}</option> 
                                        @endforeach
                                            
                                    </select>
		                        </div>
		                        
		                        <button type="submit" class="btn btn-primary mr-2">
		                        @isset ($subCategory_show)
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
        </div>
    </div>
@endsection

@push('js')
	<script src="{{ asset('backend') }}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
 
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