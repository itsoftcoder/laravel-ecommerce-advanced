@extends('layouts.backend-master')
@section('title')
  Product page - Admin Mcom
@endsection
@section('product')
    active
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/weather-icons/css/weather-icons.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/c3/c3.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
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
                                <span>All product below here.manage and add new product</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
                        
                        <div class="card">
                            <div class="card-header row">
                                <div class="col col-sm-3">
                                    <div class="card-options d-inline-block">
                                        <a href="#"><i class="ik ik-inbox"></i></a>
                                        <a href="{{ route('product.create') }}"><i class="ik ik-plus"></i></a>
                                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">More Action</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="card-search with-adv-search dropdown">
                                        <form action="">
                                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required>
                                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Name" data-column="0">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="price" data-column="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="size" data-column="2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="color" data-column="3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="brand" data-column="4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col5_filter" placeholder="category" data-column="5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-theme">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col col-sm-3">
                                    <div class="card-options text-right">
                                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="data_table" class="table">
                                    <thead>
                                        <tr>
                                            <th class="nosort" width="10">
                                                <label class="custom-control custom-checkbox m-0">
                                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th class="nosort">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td>{{ $product->product_name }}</td>
                                            <td><img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" class="rounded" style="width: 100px;height: 100px;"></td>
                                            <td>${{ $product->product_price}}</td>
                                            <td>{{ $product->product_quantity }}</td>
                                            <td>{{ $product->status}}</td>
                                            <td>
                                            <div class="list-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-inbox"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                            </td>
                                        </tr>
                                        @empty 
                                        No available product here
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

@push('js')
<script src="{{ asset('backend') }}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('backend') }}/plugins/moment/moment.js"></script>
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/d3/dist/d3.min.js"></script>
<script src="{{ asset('backend') }}/plugins/c3/c3.min.js"></script>
<script src="{{ asset('backend') }}/js/tables.js"></script>
<script src="{{ asset('backend') }}/js/widgets.js"></script>
<script src="{{ asset('backend') }}/js/charts.js"></script> 
@endpush

