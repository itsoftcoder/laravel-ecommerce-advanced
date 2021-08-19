@extends('layouts.backend-master')

@section('title')
	menu list -Admin mcom 
@endsection

@push('css')
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
@endpush

@section('menulist')
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
                                <h5>Menulist</h5>
                                <span>All menu below here.manage and add new menu</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Menulist</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>MENULIST</h3></div>
                        <div class="card-body">
                            <table id="data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th class="nosort">Menu Icon</th>
                                        <th>Menu Name</th>
                                        <th>Added By</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@forelse($menuLists as $menuList)
               
                                    <tr>
                                        <td>{{ $menuList->id }}</td>
                                        <td>{{ $menuList->icon_name }} <img src="{{ asset('frontend') }}/assets/img/icon-img/{{ $menuList->icon_name }}" class="table-user-thumb" alt="" style="width: 20px;height: 20px"></td>
                                        <td>{{ $menuList->name}}</td>
                                        <td>{{ $menuList->user->name }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('menulist.edit',$menuList->id) }}"><i class="ik ik-edit-2"></i></a>
                                                <a href="{{ route('menulist.destroy',$menuList->id) }}" onclick="return confirm('Are you sure delete this item ?')"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <p>no Menu available here</p>

                                   @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                	<div class="card">
                		<div class="card-header">
                			<h3>ADD NEW MENU</h3>
                		</div>
                		<div class="card-body">
                			@isset ($menuList_show)
                			   <form class="forms-sample" action="{{ route('menulist.update',$menuList_show->id) }}" method="POST">
                				@csrf
                				@method('PUT')
                			    @else 
                			    <form class="forms-sample" action="{{ route('menulist.store') }}" method="POST">
                				@csrf
                			@endisset
                				
		                        <div class="form-group">
		                            <label for="name">Name</label>
		                            <input type="text" class="form-control" name="name" id="name" placeholder="Menu Name" value="{{ $menuList_show->name ?? old('name') }}">
		                        </div>
		                        <div class="form-group">
		                            <label for="icon_name">Icon</label>
		                            <input type="text" class="form-control" name="icon_name" id="icon_name" placeholder="Icon Name only png" value="{{ $menuList_show->icon_name ?? old('icon_name')}}">
		                        </div>
		                        
		                        <button type="submit" class="btn btn-primary mr-2">
		                        @isset ($menuList_show)
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