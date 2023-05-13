@extends('dashboard.master')
@section('title') الرئيسية @endsection
@section('style')
    <style>
        .main-input {
            height: 100%;
            line-height: 40px;
            border: 1px solid #C6C6C6;
            padding: 0 15px;
            position: relative;
            overflow: hidden;
            height: 40px;
        }

        .main-input .file-input {
            position: absolute;
            opacity: 0;
            width: 100%;
            right: 0;
            height: 100%;
        }

        .main-input i {
            position: absolute;
            width: 40px;
            text-align: center;
            height: 40px;
            line-height: 40px;
            z-index: 3;
            right: 0;
            left: auto;
            font-size: 20px;
        }

        .file-name {
            font-size: 14px;
            color: #928d8d;
            white-space: nowrap;
        }

        .main-input .uploaded-image {
            position: absolute;
            top: 50%;
            height: auto;
            right: 0;
            z-index: 9;
            transform: translate(0, -50%);
            cursor: pointer;
            transition: all .3s;
        }

        .main-input .uploaded-image img {
            max-height: 40px;
            min-width: 40px;
            display: block;
            border-radius: 8px;
            transition: all .3s;
            height: 100%;
        }

        .main-input .uploaded-image.active img {
            max-height: 240px;
            min-width: auto;
            max-width: calc(100vw - 20px);
            margin: auto;
            height: auto;
        }

        .main-input .uploaded-image.active {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999999;
            width: auto;
            height: auto;
            box-shadow: none;
        }

        .btns {
            padding: 15px 0;
        }

        #confirm-del form {
            justify-content: center;
        }
        .card-footer a i{
            margin:  0 5px;
        }
        #confirm-del form button ,
        #add-user form button,
        #edit-user form button {
            margin: 5px;
        }

        .modal .modal-header .close {
            margin: 0;
            padding: 0;
            color: #fff
        }

        .modal .modal-header {
            align-items: center;
            padding: 10px;
            background-color: #343a40;
            color: #fff
        }

        .search-div form .form-in:not(:last-child),
        .search-div form .form-in:not(:last-child)+span {
            margin-right: 10px;
        }

        .select2-container .select2-selection--single {
            height: calc(2.25rem + 2px);
        }

        .bootstrap-switch {
            position: absolute;
            right: 16px;
            top: 6px;
            z-index: 99;
        }

        .mark-user .custom-control-label::before,
        .mark-user .custom-control-label::after {
            top: 8px;
            left: 0;
            width: 20px;
            height: 20px;
        }

        .showIndexData{
            height: 275px;
        }

    </style>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">الأعضاء</span>
                            <span class="info-box-number">
                        {{ count(get_users_by('client', 'asc', 0)) }}
                                {{-- <small>%</small> --}}
                        </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تواصل معنا</span>
                            <span class="info-box-number">{{ App\Models\Contact::count() }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

            {{-- <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="infالمندوبين</span>
                    <span class="info-box-number">{{ count(get_users_by('provider', 'asc', 0)) }}</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div> --}}
            <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-database"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">الأقسام</span>
                            <span class="info-box-number">{{App\Models\Section::count()}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-server"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">المنتجات</span>
                            <span class="info-box-number">{{App\Models\Service::count()}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->



            <!-- Main row -->
            <div class="row">
                <div class="col-md-4">
                    <!-- USERS LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">أحدث الاعضاء</h3>

                            <div class="card-tools">
                                <span class="badge badge-danger">أعضاء جدد</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                </button> --}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body showIndexData p-0">
                            <ul class="users-list clearfix">
                                @foreach (get_users_by('client' ,'desc' , 8) as $item)
                                    <li>
                                        <img src="{{url('' . $item->avatar)}}" alt="{{$item->name}}">
                                        <a class="users-list-name" href="#">{{$item->name}}</a>
                                        <span class="users-list-date">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="{{route('users')}}">عرض الكل</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.col -->

            {{-- <div class="col-md-4">
                <!-- USERS LIST -->
                <div class="card">
                    <div class="card-header">
                    <h3 classأحدث المندوبين</h3>

                    <div class="card-tools">
                        <span class="badgمندوبين جدد</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>

                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body showIndexData p-0">
                    <ul class="users-list clearfix">
                        @foreach (get_users_by('provider' ,'desc' , 8) as $item)
                            <li>
                                <img src="{{url('' . $item->avatar)}}" alt="{{$item->name}}">
                                <a class="users-list-name" href="#">{{$item->name}}</a>
                                <span class="users-list-date">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                    <a href="عرض الكل</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
            </div> --}}
            <!-- /.col -->

                <div class="col-md-4">
                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">احدث المنتجات</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button> --}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body showIndexData p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                @foreach (App\Models\Service::orderBy('id','desc')->paginate(4) as $item)
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{url(''.$item->images->first()->image)}}" alt="{{$item->title_ar}}" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">{{$item->title_ar}}
                                                <span class="badge badge-warning float-right">{{$item->price}}</span></a>
                                            <span class="product-description">
                                    {{$item->short_desc}}
                                </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="{{route('services')}}" class="uppercase">عرض الكل</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            {{-- <div class="col-12">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Latest Orders</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Popularity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                </td>
                                </tr>
                                <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                </td>
                                </tr>
                                <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                </td>
                                </tr>
                                <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-info">Processing</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                </td>
                                </tr>
                                <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                </td>
                                </tr>
                                <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div> --}}
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('script')  @endsection
