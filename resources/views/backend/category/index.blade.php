@extends('layouts.backend-master')

@section('title')
  Category list -Admin mcom 
@endsection

@push('css')
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
@endpush

@section('category')
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
                                <h5>Category</h5>
                                <span>All Category below here.manage and add new Category</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Category</h3></div>
                        <div class="card-body">
                            <table id="data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Menu Name</th>
                                        <th>Added By</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@forelse($categorys as $category)
               
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->menuList->name}}</td>
                                        <td>{{ $category->user->name }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('category.edit',$category->id) }}"><i class="ik ik-edit-2"></i></a>
                                                <a href="{{ route('category.destroy',$category->id) }}" onclick="return confirm('Are you sure delete this item ?')"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3">no Category available here</td></tr>

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
                                @isset($category_show)
                                 Edit Category
                                 @else 
                                 Add Category
                                 @endisset
                            </h3>
                		</div>
                		<div class="card-body">
                			@isset ($category_show)
                			   <form class="forms-sample" action="{{ route('category.update',$category_show->id) }}" method="POST">
                				@csrf
                				@method('PUT')
                			    @else 
                			    <form class="forms-sample" action="{{ route('category.store') }}" method="POST">
                				@csrf
                			@endisset
                				
		                        <div class="form-group">
		                            <label for="name">Name</label>
		                            <input type="text" class="form-control" name="name" id="name" placeholder="Menu Name" value="{{ $category_show->name ?? old('name') }}">
		                        </div>
		                        <div class="form-group">
		                            <label for="menu">Choose Menu</label>
		                            <select name="menu" class="form-control">
                                        @foreach ($menuLists as $menuList)
                                            <option value="{{ $menuList->id }}" @isset($category_show)@if($menuList->id == $category_show->menu_list_id) selected="" @endif @endisset>{{ $menuList->name }}</option> 
                                        @endforeach
                                            
                                    </select>
		                        </div>
		                        
		                        <button type="submit" class="btn btn-primary mr-2">
		                        @isset ($category_show)
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