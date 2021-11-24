@extends('Admin.Admin_master')

@section('content')

    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li>
                        <!-- User Profile-->
                        <div class="user-profile d-flex no-block dropdown m-t-20">
                            <div class="user-pic"><img src="{{ asset('public/images/users/1.jpg') }}" alt="users"
                                    class="rounded-circle" width="40" /></div>
                            <div class="user-content hide-menu m-l-10">
                                <a href="#" class="" id="Userdd" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h5 class="m-b-0 user-name font-medium">{{ Auth::user()->name }} <i
                                            class="fa fa-angle-down"></i></h5>
                                    <span class="op-5 user-email">{{ Auth::user()->email }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                                    <a class="dropdown-item"href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                   </form>
                                </div>
                            </div>
                        </div>
                        <!-- End User Profile-->
                    </li>
                    <li class="p-15 m-t-10"><a href="javascript:void(0)"
                        class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
                        class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a>
                    </li>
                    <!-- User Profile-->
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                        class="hide-menu">Dashboard</span></a>
                    </li>                    
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Sales Summary</h4>
                                    <h5 class="card-subtitle">Overview of Latest Month</h5>
                                </div>
                            </div>
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-12">
                                    <div class="campaign ct-charts"></div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- title -->
                            <div class="d-md-flex">
                                <div>
                                    <h4 class="card-title">Items</h4>
                                </div>
                                <div class="ms-auto">
                                    <div class="dl">
                                        <a href="{{ route('ItemsUpload') }}" class="btn btn-sm btn-info"> Add New Items </a>
                                    </div>
                                </div>
                            </div>
                            <!-- title -->
                        </div>
                        <div id="item_data">
                            @include('Admin.item_data')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- title -->
                            <div class="d-md-flex">
                                <div>
                                    <h4 class="card-title">Categories</h4>
                                </div>
                                <div class="ms-auto">
                                    <div class="dl">
                                        <a href="{{ route('CategoriesUpload') }}" class="btn btn-sm btn-info"> Add New Categories </a>
                                    </div>
                                </div>
                            </div>
                            <!-- title -->
                        </div>
                        <div id="category_data">
                            @include('Admin.category_data')
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection

<!-- script -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script >
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_item_data(page);
        });

        function fetch_item_data(page) {
            $.ajax({
                url:  "{{route('item_data')}}" + "?page=" + page,
                success: function(item) {
                    $('#item_data').html(item);
                }
            });
        }

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('pages=')[1];
            fetch_category_data(page);
        });

        function fetch_category_data(page) {
            $.ajax({
                url:  "{{route('category_data')}}" + "?pages=" + page,
                success: function(category) {
                    $('#category_data').html(category);
                }
            });
        } 
    });
</script>
<!-- end script -->