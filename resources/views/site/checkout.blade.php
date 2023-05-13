@extends('site.master')
@section('title') استكمال الطلب @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- page-head -->
        <section class="page-head bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h6>التسوق</h6>
                    <h1>الفاتورة</h1>
                </div>
            </div>
        </section>
        <!-- end page-head -->
        <div class="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                            <div class="cats-link">
                                <a href="{{url('/')}}">
                                    الرئيسية
                                </a>
                                /
                                <a>
                                    استكمال الطلب
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{route('store-order')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="address-form d-block cart-table">
                                <h3>تفاصيل الفاتورة</h3>
                                <div class="container">
                                    <div class="row" id="addressData">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">العنوان</label>
                                                <select name="address_id" id="address_id" onchange="fillAddressData()" class="form-control">
                                                    @foreach (Auth::user()->addresses as $item)
                                                        <option value="{{$item->id}}">{{$item->first_street}} , {{$item->city}} , {{isset($item->country) ? $item->country->title : ''}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">الاسم الاول</label>
                                                <input type="text" name="first_name" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->first_name : ''}}" id="address_first_name" class="form-control" disabled="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">الاسم الاخير</label>
                                                <input type="text" name="last_name" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->last_name : ''}}" id="address_last_name" class="form-control" disabled="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">الدولة</label>
                                                <select name="country_id" id="address_country_id" class="form-control" disabled="">
                                                    <option value=""></option>
                                                    @foreach (App\Models\Country::orderBy('title_ar')->get() as $item)
                                                        <option value="{{$item->id}}" {{Auth::user()->addresses->count() > 0 && Auth::user()->addresses->first()->country_id == $item->id ? 'selected' : ''}}>{{$item->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">المدينة</label>
                                                <input type="text" name="city" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->city : ''}}" id="address_city" class="form-control" disabled="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">العنوان</label>
                                                <input type="text" name="first_street" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->first_street : ''}}" id="address_first_street" class="form-control m-b-15"
                                                       placeholder="" disabled="">
                                                <input type="text" name="second_street" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->second_street : ''}}" id="address_second_street" class="form-control" disabled=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">الجوال</label>
                                                <input type="tel" name="phone" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->phone : ''}}" id="address_phone" class="form-control phone" disabled="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">البريد الالكتروني</label>
                                                <input type="email" name="email" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->email : ''}}" id="address_email" class="form-control" disabled="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">ملاحظات</label>
                                                <input type="text" name="notes" value="{{Auth::user()->addresses->count() > 0 ? Auth::user()->addresses->first()->notes : ''}}" id="address_notes" class="form-control" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="cart-total cart-total-custom">
                                <h4>طلباتك</h4>
                                <input type="hidden" name="promo_id" value="{{$request->promo_id}}">
                                <input type="hidden" name="sub_total" value="{{$request->sub_total}}">
                                <input type="hidden" name="delivery" value="{{$request->delivery}}">
                                <input type="hidden" name="discount" value="{{$request->discount}}">
                                <input type="hidden" name="total" value="{{$request->total}}">
                                <ul>
                                    <li class="head">
                                        <span>المنتج</span>
                                        <span>السعر</span>
                                    </li>
                                    @foreach (Auth::user()->carts as $item)
                                        <li>
                                            <span>{{$item->count}} * {{$item->service->title}}</span>
                                            <span>{{$item->total}} ريال سعودي</span>
                                        </li>
                                    @endforeach
                                    <li class="sub">
                                        <span> اجمالي المنتجات</span>
                                        <span>{{$request->sub_total}} ريال سعودي</span>
                                    </li>
                                    <li class="sub">
                                        <span> التوصيل</span>
                                        <span>{{$request->delivery}} ريال سعودي</span>
                                    </li>
                                    <li class="sub">
                                        <span> الخصم</span>
                                        <span>{{$request->discount}} ريال سعودي</span>
                                    </li>
                                </ul>
                                <div class="total-price">
                                    <span> الاجمالي</span>
                                    <span>{{$request->total}} ريال سعودي</span>
                                </div>
                                <div class="radio-goup">
                                    <label class="checkcontainer">
                                        كاش عند التسليم
                                        <input type="radio" checked="checked" name="payment_method" value="cash">
                                        <span class="radiobtn"></span>
                                    </label>
                                    <label class="checkcontainer">
                                        اونلاين
                                        <input type="radio" name="payment_method" value="online">
                                        <span class="radiobtn"></span>
                                    </label>
                                </div>
                                <button type="submit" class="sign-btn d-block">
                                    استكمال الطلب
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
    </div>
@endsection
@section('script')  @endsection
