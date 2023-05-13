@if (Auth::check())
    @foreach (Auth::user()->carts as $item)
        <div class="row cart-detail">
            <div class="col-4 cart-detail-img">
                <img src="{{$item->service->images->count() > 0 ? url('' . $item->service->images->first()->image) : url('public/none.png')}}">
            </div>
            <div class="col-8 cart-detail-product">
                <a href="{{route('show_service' , $item->service->id)}}" class="name">
                    <p class="name">{{$item->service->title}}</p>
                </a>
                <p class="price"> {{$item->total}} ريال سعودي</p>
                <p class="count"> الكمية:{{$item->count}}</p>
                <p class="count" style="width: 10%;background:{{$item->hex}} !important;color:{{$item->hex}} !important">c</p>
            </div>
            <a href="#" onclick="deleteCart({{$item->id}})" class="del-cart">
                <i class="fas fa-trash"></i>
            </a>
        </div>
    @endforeach
    <p class="text-center total-drop">
        <span>الاجمالي</span>
        <span>:</span>
        <span>{{Auth::user()->carts->sum('total')}} ريال سعودي</span>
    </p>
    <div class="row justify-content-center">
        <div class="checkout">
            <a href="checkout.html" class="sign-btn">دفع</a>
        </div>
        <div class="cart-drop">
            <a href="{{route('show_cart')}}" class="sign-btn cart-btn">عرض السلة</a>
        </div>
    </div>
@else
    <div class="row cart-detail">
        <div class="col-12 cart-detail-product text-center">
            <p style="color: red;font-size: 18px">قم بتسجيل دخولك اولا</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="checkout">
            <a href="" class="sign-btn" data-toggle="modal" data-target="#sign-modal">تسجيل الدخول</a>
        </div>
    </div>
@endif
