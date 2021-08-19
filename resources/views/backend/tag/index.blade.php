@extends('layouts.backend-master')

@section('title')
	tags -Admin mcom 
@endsection

@push('css')
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
@endpush

@section('tag')
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
                                <h5>Tag</h5>
                                <span>All tag below here.manage and add new tag</span>
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
                                <li class="breadcrumb-item active" aria-current="page">tag</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Tag</h3></div>
                        <div class="card-body">
                            <table id="data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@forelse($tags as $tag)
               
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->created_at}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('tag.edit',$tag->id) }}"><i class="ik ik-edit-2"></i></a>
                                                <a href="{{ route('tag.destroy',$tag->id) }}" onclick="return confirm('Are you sure delete this item ?')"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3">no tag available here</td></tr>

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
                                @isset($tag_show)
                                 Edit tag
                                 @else 
                                 Add tag
                                 @endisset
                            </h3>
                		</div>
                		<div class="card-body">
                			@isset ($tag_show)
                			   <form class="forms-sample" action="{{ route('tag.update',$tag_show->id) }}" method="POST">
                				@csrf
                				@method('PUT')
                			    @else 
                			    <form class="forms-sample" action="{{ route('tag.store') }}" method="POST">
                				@csrf
                			@endisset
                				
		                        <div class="form-group">
		                            <label for="name">Name</label>
		                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="tag Name" value="{{ $tag_show->name ?? old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
		                        </div>
		                        
		                        
		                        <button type="submit" class="btn btn-primary mr-2">
		                        @isset ($tag_show)
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