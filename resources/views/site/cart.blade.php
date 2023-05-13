<div class="col-12">
    <div class="cats-link">
        <a href="{{url('/')}}">
            الرئيسية
        </a>
        /
        <a>
            سلة التسوق
        </a>
    </div>
</div>
<div class="col-md-8 col-12">
    <div class="cart-table">
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">المنتج</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">الاجمالي</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach (Auth::user()->carts as $item)
                    <tr id="cartRow{{$item->id}}">
                        <td>
                            <div class="prod-td">
                                <img src="{{$item->service->images->count() > 0 ? url('' . $item->service->images->first()->image) : url('public/none.png')}}" alt="">
                                <div class="info">
                                    <p>{{$item->service->title}}</p>
                                    <div class="theme">
                                        <span>{{$item->size}}</span>
                                        <span class="color" style="background:{{$item->hex}} !important"></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                                <span class="t-price">
                                    {{$item->service->price}} ريال سعودي
                                </span>
                        </td>
                        <td>
                            <form action="" class="product-modal">
                                <div class="qtySelector text-center">
                                    <input type="tel" id="countInput{{$item->id}}" class="qtyValue phone" value="{{$item->count}}"/>
                                    <div>
                                        <i class="fas fa-angle-up" onclick="updateCart({{$item->id}} , '+')"></i>
                                        <i class="fas fa-angle-down" onclick="updateCart({{$item->id}} , '-')"></i>
                                    </div>
                                </div>
                                <span class="text-danger" id="danger{{$item->id}}"></span>
                            </form>
                        </td>
                        <td>
                                <span class="t-price">
                                    {{$item->total}} ريال سعودي
                                </span>
                        </td>
                        <td>
                            <i class="fas fa-trash del-tr" id="cart{{$item->id}}"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="promo">
            <form action="" id="promoForm">
                @csrf
                <div class="form-group d-flex align-items-center">
                    <input type="hidden" name="cart_id" id="cart_id" value="">
                    <input type="hidden" name="count" id="count" value="">
                    <input type="text" name="code" value="{{isset($promo) ? $promo->code : ''}}" placeholder="كود الخصم" class="form-control">
                    <button class="sign-btn promoBtn" type="submit" onclick="checkPromo()">تطبيق الكود</button>
                </div>
            </form>
        </div>
        <div>
            <form action="{{route('checkout')}}" id="orderForm" method="POST">
                @csrf
                <div class="form-group d-flex align-items-center">
                    <input type="hidden" name="promo_id" value="{{isset($promo) ? $promo->id : ''}}">
                    <input type="hidden" name="subtotal" value="{{Auth::user()->carts->sum('total')}}">
                    <input type="hidden" name="sub_total" value="{{Auth::user()->carts->sum('total')}}">
                    <input type="hidden" name="delivery" value="{{App\Models\Cart::distinct('service_id')->where('user_id' , Auth::id())->sum('delivery')}}">
                    <input type="hidden" name="discount" value="{{Auth::user()->carts->sum('total') * (isset($discount) ? $discount : 0) / 100}}">
                    <input type="hidden" name="total" value="{{Auth::user()->carts->sum('total') - (Auth::user()->carts->sum('total') * (isset($discount) ? $discount : 0) / 100) + Auth::user()->carts->sum('delivery')}}">
                    <input type="submit" id="orderSubmit" style="display: none">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4 col-12">
    <div class="cart-total">
        <h4>اجمالي السلة</h4>
        <ul>
            <li>
                <span> اجمالي المنتجات</span>
                <span>{{Auth::user()->carts->sum('total')}} ريال سعودي</span>
            </li>
            <li>
                <span> التوصيل</span>
                <span>{{App\Models\Cart::distinct('service_id')->where('user_id' , Auth::id())->sum('delivery')}} ريال سعودي</span>
            </li>
            <li>
                <span> الخصم</span>
                <span>{{Auth::user()->carts->sum('total') * (isset($discount) ? $discount : 0) / 100}} ريال سعودي</span>
            </li>
        </ul>
        <div class="total-price">
            <span>الاجمالي</span>
            <span>{{Auth::user()->carts->sum('total') - (Auth::user()->carts->sum('total') * (isset($discount) ? $discount : 0) / 100) + Auth::user()->carts->sum('delivery')}} ريال سعودي</span>
        </div>
        <a href="#" class="sign-btn d-block" onclick="checkout()">
            استكمال الطلب
        </a>
        <a href="{{route('all_sections')}}" class="d-block text-dark">
            <i class="fas fa-sync"></i>
            <span>استكمال التسوق</span>
        </a>
    </div>
</div>
