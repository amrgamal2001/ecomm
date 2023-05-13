@extends('site.master')
@section('title') الرئيسية @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- collection -->
        <section class="collection bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h1><span>احدث</span> المنتجات</h1>
                </div>
                <div class="row justify-content-center">
                    @foreach (App\Models\Service::orderBy('id' , 'desc')->paginate(6) as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pro-cart">
                                <div class="pro-img">
                                    <img src="{{$item->images->count() > 0 ? url('' . $item->images->first()->image) : url('public/none.png')}}" alt="">
                                    <ul>
                                        <li>
                                            {{-- <a href="#" data-toggle="modal" data-target="#product-modal"> --}}
                                            <a href="{{route('show_service' , $item->id)}}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{route('show_service' , $item->id)}}">
                                                <i class="fas fa-shopping-bag"></i>
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a class="service{{$item->id}}" href="#" onclick="add_to_like({{$item->id}} , event)">
                                                <i class="far fa-heart  {{Auth::check() && is_favourite(Auth::id() , $item->id) ? 'fas red' : ''}}"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-txt">
                                    <a href="{{route('show_service' , $item->id)}}">
                                        <p class="neme">{{$item->title}}</p>
                                    </a>
                                    <p class="price">{{$item->price}} ريال سعودي</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end collection -->
        <!-- feature-pro -->
        <section class="feature-pro">
            <div class="container">
                <div class="collection-title">
                    <h1> منتجات مميزة</h1>
                </div>
                <div class="row">
                    @foreach (App\Models\Service::orderBy('salled_count' , 'desc')->orderBy('special' , 'desc')->paginate(8) as $item)
                        <div class="col-lg-3 col-md-6 col-12">
                            <a href="{{route('show_service' , $item->id)}}">
                                <div class="pro-cart">
                                    <div class="pro-img">
                                        <img src="{{$item->images->count() > 0 ? url('' . $item->images->first()->image) : url('public/none.png')}}" alt="">
                                    </div>
                                    <div class="pro-txt">
                                        <p class="neme">{{$item->title}}</p>
                                        <p class="price">{{$item->price}} ريال سعودي</p>
                                    </div>
                                    <span class="discount">مميز</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end feature-pro -->
        <!-- catogry -->
        <section class="catogry">
            <div class="container">
                @foreach (App\Models\Section::get() as $item)
                    <div class="cat-item">
                        <a href="{{url('all-sections?cat=' . $item->id)}}">
                            <img src="{{url('' . $item->image)}}" alt="">
                            <div class="overname">
                                <span class="cat-name">
                                    {{$item->title}}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- end catogry -->
        <!-- year -->
        <section class="collection year">
            <div class="container">
                <div class="collection-title">
                    <h1> collection <span></span></h1>
                </div>
                <div class="row justify-content-center">
                    @foreach (App\Models\Service::orderBy('id' , 'asc')->paginate(6) as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pro-cart">
                                <div class="pro-img">
                                    <img src="{{$item->images->count() > 0 ? url('' . $item->images->first()->image) : url('public/none.png')}}" alt="">
                                    <ul>
                                        <li>
                                            {{-- <a href="#" data-toggle="modal" data-target="#product-modal"> --}}
                                            <a href="{{route('show_service' , $item->id)}}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('show_service' , $item->id)}}">
                                                <i class="fas fa-shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="service{{$item->id}}" href="#" onclick="add_to_like({{$item->id}} , event)">
                                                <i class="far fa-heart  {{Auth::check() && is_favourite(Auth::id() , $item->id) ? 'fas red' : ''}}"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-txt">
                                    <a href="{{route('show_service' , $item->id)}}">
                                        <p class="neme">{{$item->title}}</p>
                                    </a>
                                    <p class="price">{{$item->price}} ريال سعودي</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end year -->
    </div>
@endsection
@section('script')  @endsection
