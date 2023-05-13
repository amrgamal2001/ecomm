@extends('site.master')
@section('title') {{$service->title}} @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <section class="product-contain product-modal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="pro-silder">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    @foreach ($service->images as $item)
                                        <div class="swiper-slide"><img src="{{url('' . $item->image)}}" alt=""></div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-white"></div>
                                <div class="swiper-button-prev swiper-button-white"></div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach ($service->images as $item)
                                        <div class="swiper-slide"><img src="{{url('' . $item->image)}}" alt=""></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="pro-detail">
                            <div class="cats-link">
                                <a href="{{url('/')}}">
                                    الرئيسية
                                </a>
                                /
                                <a>
                                    {{$service->title}}
                                </a>
                            </div>
                            <h3>{{$service->title}}</h3>
                            <p class="price">{{$service->price}} R.s</p>
                            <p>
                                {{$service->desc}}
                            </p>
                            <form action="{{route('add_to_cart')}}" method="POST" id="add_to_cartForm">
                                @csrf
                                <input type="hidden" name="service_id" value="{{$service->id}}">
                                <div class="option">
                                    <div class="option-item">
                                        <h3 class="fw-title">size :</h3>
                                        <div class="fw-size-choose">
                                            @foreach(get_service_group($service->id) as $i=>$item)
                                                <div class="sc-item">
                                                    <input type="radio" name="size_id" value="{{$item['id']}}" id="size{{$item['id']}}" onchange="showColor({{$item['id']}})" {{$i == 0 ? 'checked' : ''}}>
                                                    <label for="size{{$item['id']}}">{{$item['title']}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <h3 class="fw-title">color :</h3>
                                        <div class="fw-color-choose">
                                            @foreach(get_service_group($service->id) as $m=>$item)
                                                @foreach($item['colors'] as $j=>$color)
                                                    <div class="cs-item allColor color{{$item['id']}}" @if($m != 0) style="display: none" @endif>
                                                        <input type="radio" class="color{{$item['id']}}{{$j}}" name="color_id" value="{{$color['id']}}" id="color{{$color['group_id']}}" {{$m == '0' && $j == '0' ? 'checked' : ''}}>
                                                        <label class="cs-gray" for="color{{$color['group_id']}}" style="color: white;background:{{$color['color']}}">
                                                            {{-- <img class="img-fluid" src="img/slide1.jpg" alt=""> --}}
                                                            {{-- {{$color['title']}} --}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-btn">
                                    <div class="qtySelector text-center">
                                        <input type="text" name="count" class="qtyValue phone" value="1"/>
                                        <div>
                                            <i class="fas fa-angle-up increaseQty"></i>
                                            <i class="fas fa-angle-down decreaseQty"></i>
                                        </div>
                                    </div>
                                    <button class="btn sign-btn cart" onclick="addToCart()">
                                        <i class="fas fa-shopping-bag"></i>
                                        اضف الى السلة
                                    </button>
                                </div>
                                {{-- add-wishlist --}}
                                <a class="add-wishlist service{{$service->id}}" href="#" onclick="add_to_like({{$service->id}} , event)">
                                    <i class="far fa-heart  {{Auth::check() && is_favourite(Auth::id() , $service->id) ? 'fas red' : ''}}"></i>
                                    اضف الى المفضلة
                                </a>
                            </form>
                            <div class="pro-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc"
                                           role="tab" aria-controls="desc" aria-selected="true">
                                            الوصف
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="add-info-tab" data-toggle="tab" href="#add-info"
                                           role="tab" aria-controls="add-info" aria-selected="false">
                                            معلومات اضافية
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                           role="tab" aria-controls="contact" aria-selected="false">
                                            المراجعات
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="desc" role="tabpanel"
                                         aria-labelledby="desc-tab">
                                        <p>
                                            {{$service->desc}}
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="add-info" role="tabpanel"
                                         aria-labelledby="add-info-tab">
                                        <p>
                                            {{$service->short_desc}}
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="additional">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="add-item">
                            <img src="{{site_path()}}/img/box.png" alt="">
                            <div class="txt">
                                <h4>free worldwide shipping</h4>
                                <p>on all orders over 200Rs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="add-item">
                            <img src="{{site_path()}}/img/surface1.png" alt="">
                            <div class="txt">
                                <h4>100% secure checkout</h4>
                                <p>paypal / MasterCard / visa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="add-item">
                            <img src="{{site_path()}}/img/telephone-call.png" alt="">
                            <div class="txt">
                                <h4>24/7 hours service</h4>
                                <p>what we can do for you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="add-item">
                            <img src="{{site_path()}}/img/exchange.png" alt="">
                            <div class="txt">
                                <h4>Easy 30 days Returns</h4>
                                <p>30 days money back guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-pro -->
        <section class="feature-pro related-pro">
            <div class="container">
                <div class="collection-title">
                    <h1>منتجات ذات صلة</h1>
                </div>
                <div class="row">
                    @foreach ($services as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="{{route('show_service' , $item->id)}}">
                                <div class="pro-cart">
                                    <div class="pro-img">
                                        <img src="{{$item->images->count() > 0 ? url('' . $item->images->first()->image) : url('public/none.png')}}" alt="">
                                    </div>
                                    <div class="pro-txt">
                                        <p class="neme">{{$item->title}}</p>
                                        <p class="price">{{$item->price}} ريال سعودي</p>
                                    </div>
                                    {{-- <span class="discount">new</span> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end feature-pro -->
    </div>
@endsection
@section('script')
    <script>
        function addToFilter(idKey , idValue , event){
            event.preventDefault();
            $('#' + idKey).val(idValue);
            $('#searchSubmit').trigger('click');
        }
    </script>
@endsection
