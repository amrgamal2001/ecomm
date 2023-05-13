<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{settings('description')}}">
    <meta name="keywords" content="{{settings('key_words')}}">
    <meta name="author" content="Abdelrahman">
    <meta name="robots" content="index/follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta property="og:title" content="{{settings('site_name')}}" />
    <meta property="og:image" content="{{settings('logo')}}" />
    <meta property="og:description" content="{{settings('site_name')}}" />
    <meta property="og:site_name" content="{{settings('site_name')}}" />
    <link rel="shortcut icon" type="image/png" href="{{settings('logo')}}" />

    <title>{{settings('site_name')}} | @yield('title')</title>

    <link rel="shortcut icon" type="image/png" href="{{site_path()}}/img/logo.png" />
    <link rel="stylesheet" href="{{site_path()}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{site_path()}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{site_path()}}/css/swiper.min.css">
    <link rel="stylesheet" href="{{site_path()}}/css/style.css">
    <!-- <link rel="stylesheet" href="css/ar.css"> -->

    <style>
        /* remove increase and decrease arrows from number input */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .error {
            color: red;
            text-align: center !important;
        }
    </style>
    @yield('style')
</head>

<body>
<div class="lang-over"></div>
<!-- loader -->
<div class="loader">
    <h2><img class="img-responsive" src="{{url('') . settings('logo')}}"></h2>
</div>
<!-- end loader -->
<div class="overlay"></div>
<!-- header -->
<header class="bg-pink">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="logo">
                    <div class="mob-collaps">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="{{route('site_home')}}">
                        <img class="img-responsive" src="{{url('') . settings('logo')}}">
                    </a>
                </div>
                <nav class="d-flex align-items-center site-nav">
                    <ul class="d-flex">
                        <li class=""><a href="{{route('site_home')}}">الرئيسية</a></li>
                        @foreach (App\Models\Section::get() as $item)
                            <li><a href="{{url('all-sections?cat=' . $item->id)}}">{{$item->title}}</a></li>
                        @endforeach
                        <li><a href="{{route('contact_us')}}">اتصل بنا</a></li>
                    </ul>
                </nav>
            </div>

            <div class="nav-option">
                <ul class="d-flex">
                    @if(Auth::check())
                        <li>
                            <div class="dropdown user-drop">
                                <a href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="fas fa-angle-down"></i>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{url('show-profile?tab=order')}}">
                                        <i class="fas fa-box"></i>
                                        <span>طلباتي</span>
                                    </a>
                                    <a class="dropdown-item" href="{{url('show-profile?tab=address')}}">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>عناويني</span>
                                    </a>
                                    <a class="dropdown-item" href="{{url('show-profile?tab=profile')}}">
                                        <i class="fas fa-user"></i>
                                        <span>حسابي</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('site_logout')}}">
                                        تسجيل الخروج
                                    </a>
                                </div>
                            </div>
                        </li>
                    @else
                        <li><a href="" class="sign-btn" data-toggle="modal" data-target="#sign-modal">تسجيل الدخول</a></li>
                    @endif

                    <li><a href="{{route('show_likes')}}"><i class="far fa-heart"></i></a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-shopping-bag"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <div class="container-fluid cartMini">
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
                                                    <p class="count"> الكمية: {{$item->count}}</p>
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
                                                <a href="{{route('checkout')}}" class="sign-btn">دفع</a>
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
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{url('all-sections')}}"><i class="fas fa-search"></i></a></li>
                    {{-- <li><a href="" class="open-lang"><img src="{{site_path()}}/img/menu-2.png" alt=""></a></li> --}}
                </ul>
                <div class="lang-div">
                    <i class="fas fa-times close-lang"></i>
                    <a href="{{route('site_home')}}">
                        <img class="img-responsive" src="{{url('') . settings('logo')}}">
                    </a>
                    <ul class="d-flex align-items-center justify-content-center">
                        <li class="nav-item  d-sm-inline-block">
                            @if(App::getLocale() == 'en')
                                <a href="{{url('change-lang/ar')}}">العربية</a>
                            @else
                                <a href="{{url('change-lang/en')}}">English</a>
                            @endif
                        </li>
                        {{-- <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>currency :</span>
                                        <img src="{{site_path()}}/img/eg.png" alt="">
                                        <span>EGP</span>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{site_path()}}/img/eg.png" alt="">
                                            <span>EGP</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{site_path()}}/img/eg.png" alt="">
                                            <span>EGP</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{site_path()}}/img/eg.png" alt="">
                                            <span>EGP</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                    <p>
                        {{settings('site_desc')}}
                    </p>
                    <div class="contacts">
                        <a href="tel:{{settings('phone')}}">
                            {{settings('phone')}}
                        </a>
                        <a href="mailto:{{settings('email')}}">
                            {{settings('email')}}
                        </a>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="{{settings('twitter')}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settings('google')}}">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settings('behance')}}">
                                <i class="fab fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settings('facebook')}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- wrap -->
@include('msg')
@yield('content')
<!-- end wrap -->

<!-- footer -->
<footer class="bg-pink">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-item">
                    <a href="{{route('site_home')}}" class="f-logo">
                        <img class="img-responsive" src="{{url('') . settings('logo')}}">
                    </a>
                    <p>
                        {{-- {{settings('site_desc')}} --}}
                    </p>
                    <ul class="social">
                        <li>
                            <a href="{{settings('twitter')}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settings('google')}}">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settings('behance')}}">
                                <i class="fab fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settings('facebook')}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-item">
                    <h5>اقسام المتجر</h5>
                    <ul class="link">
                        @foreach (App\Models\Section::get() as $item)
                            <li>
                                <a href="{{url('all-sections?cat=' . $item->id)}}">
                                    <span>{{$item->title}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-item">
                    <h5>متجرنا</h5>
                    <ul class="link">
                        <li>
                            <a href="{{route('page' , 'about')}}">
                                <span>عن المتجر</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact_us')}}">
                                <span>اتصل بنا</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('page' , 'help')}}">
                                <span>مساعدة</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-item">
                    <h5>سجل ليصلك كل جديد</h5>
                    <form action="{{route('mail_list')}}" method="post" id="MailListForm">
                        @csrf
                        <input type="email" name="email" id="MailListInput" class="form-control save" placeholder="بريدك الالكتروني">
                        <button class="btn" onclick="saveEmail()">اشترك</button>
                    </form>
                    <ul class="d-flex flex-wrap pay-methods">
                        {{-- <li>
                            <img src="{{site_path()}}/img/visa.png" alt="">
                        </li>
                        <li>
                            <img src="{{site_path()}}/img/visa.png" alt="">
                        </li>
                        <li>
                            <img src="{{site_path()}}/img/visa.png" alt="">
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer text-center">
        <p>
            copyright &copy;
        </p>
    </div>
</footer>
<!-- fixed-footer -->
<ul class="fixed-footer">
    <li>
        <a href="{{route('site_home')}}" class="active">
            <i class="fas fa-home"></i>
            <span>الرئيسية</span>
        </a>
    </li>
    <li>
        <a href="{{route('page' , 'about')}}">
            <i class="fas fa-info"></i>
            <span>عن المتجر</span>
        </a>
    </li>
    <li>
        <a href="{{route('contact_us')}}">
            <i class="fas fa-phone"></i>
            <span>اتصل بنا</span>
        </a>
    </li>
    <li>
        <a href="{{route('page' , 'help')}}">
            <i class="fas fa-question"></i>
            <span>مساعدة</span>
        </a>
    </li>
    @if(Auth::check())
        <li>
            <a href="{{route('site_logout')}}">
                <i class="fas fa-sign-out-alt"></i>
                <span>تسجيل الخروج</span>
            </a>
        </li>
    @else
        <li>
            <a href="#" data-toggle="modal" data-target="#sign-modal">
                <i class="fas fa-sign-in-alt"></i>
                <span>تسجيل الدخول</span>
            </a>
        </li>
    @endif
</ul>
<!-- end fixed-footer -->
<!-- sign-modal -->
<div class="modal fade sign-modal" id="sign-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="fade-up">
                    <div class="title">
                        <h3>مرحبا بعودتك</h3>
                        <p>سجل دخولك</p>
                    </div>
                    <form action="{{route('site_post_login')}}" id="formLogin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">كلمة المرور</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <a href="#" class="text-dark forget-link">
                            نسيت كلمة المرور ؟
                        </a>
                        <button type="submit" class="sign-btn d-block w-100 login" onclick="login()">
                            تسجيل الدخول
                        </button>
                        <p>
                            ليس لديك حساب ؟
                            <a href="#" class="text-dark sign-upscrol">
                                تسجيل جديد
                            </a>
                        </p>
                    </form>
                </div>
                <div class="fade-in">
                    <div class="title">
                        <h3>تسجيل جديد</h3>
                        <p>انشئ حسابك الجديد</p>
                    </div>
                    <form action="{{route('site_post_register')}}" class=" form-up" id="formRegister" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between flex-wrap">

                        </div>
                        <div class="form-group">
                            <label for="">الاسم الاول</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">الاسم الاخير</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">رقم الجوال</label>
                            <input type="phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">كلمة المرور</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">تأكيد كلمة المرور</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <button type="submit" class="sign-btn d-block w-100 register" onclick="register()">
                            تسجيل جديد
                        </button>
                        <p>
                            لديك حساب بالفعل ؟
                            <a href="#" class="text-dark sign-inscrol">
                                تسجيل الدخول
                            </a>
                        </p>
                    </form>
                </div>
                <div class="fade-pass">
                    <div class="title">
                        <h3>نسيت كلمة السر</h3>
                        {{-- <p>please enter your email , we will send you a link to reset your password</p> --}}
                        <p>ارجو ادخال بريدك الالكتروني  وسيتم ارسال رابط عليه لاعادة تعيين كلمة سر جديدة</p>
                    </div>
                    <form action="{{route('site_post_forget_password')}}" class="form-pass" id="formForget" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <button type="submit" class="sign-btn d-block w-100 forget" onclick="forget()">
                            ارسال
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sign-modal -->
<!-- product-modal -->
<div class="modal fade  product-modal" id="product-modal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <i class="fas fa-times close-promodal" data-dismiss="modal"></i>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="img-modal">
                                <img class="img-fluid" src="{{site_path()}}/img/slide1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="pro-detail">
                                <h3>product name</h3>
                                <p class="price">200 R.s</p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia ipsa
                                    esse, vitae quos quam officiis suscipit modi amet aliquam, ab enim, eligendi
                                    neque cumque facere ad numquam dolores adipisci.
                                </p>
                                <form action="">
                                    <div class="option">
                                        <div class="option-item">
                                            <h3 class="fw-title">color :</h3>
                                            <div class="fw-color-choose">
                                                <div class="cs-item">
                                                    <input type="radio" name="cs" id="gray-color">
                                                    <label class="cs-gray" for="gray-color">
                                                        <img class="img-fluid" src="{{site_path()}}/img/slide1.jpg" alt="">
                                                    </label>
                                                </div>
                                                <div class="cs-item">
                                                    <input type="radio" name="cs" id="orange-color">
                                                    <label class="cs-orange" for="orange-color">
                                                        <img class="img-fluid" src="{{site_path()}}/img/slide1.jpg" alt="">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="option-item">
                                            <h3 class="fw-title">size :</h3>
                                            <div class="fw-size-choose">
                                                <div class="sc-item">
                                                    <input type="radio" name="sc" id="s">
                                                    <label for="s">s</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" name="sc" id="m">
                                                    <label for="m">m</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" name="sc" id="l" checked="">
                                                    <label for="l">l</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" name="sc" id="xl">
                                                    <label for="xl">xl</label>
                                                </div>
                                                <div class="sc-item">
                                                    <input type="radio" name="sc" id="xxl">
                                                    <label for="xxl">xxl</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-btn">
                                        <div class="qtySelector text-center">
                                            <input type="text" class="qtyValue" value="1" />
                                            <div>
                                                <i class="fas fa-angle-up increaseQty"></i>
                                                <i class="fas fa-angle-down decreaseQty"></i>
                                            </div>
                                        </div>
                                        <button class="btn sign-btn">
                                            <i class="fas fa-shopping-bag"></i>
                                            add to cart
                                        </button>
                                    </div>
                                    <a href="" class="add-wishlist">
                                        <i class="far fa-heart"></i>
                                        add to wishlist
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product-modal -->
<!-- sign-modal -->
<div class="modal fade sign-modal" id="sign-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="fade-up">
                    <div class="title">
                        <h3>welcome back</h3>
                        <p>تسجيل الدخول to continue</p>
                    </div>
                    <form action="index-after.html">
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control">
                        </div>
                        <a href="#" class="text-dark forget-link">
                            forget password ?
                        </a>
                        <button type="submit" class="sign-btn d-block w-100">
                            تسجيل الدخول
                        </button>
                        <p>
                            don't have account?
                            <a href="#" class="text-dark sign-upscrol">
                                تسجيل جديد
                            </a>
                        </p>
                    </form>
                </div>
                <div class="fade-in">
                    <div class="title">
                        <h3>تسجيل جديد</h3>
                        <p>creat your new account</p>
                    </div>
                    <form action="index-after.html" class=" form-up">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="form-group">
                                <label for="">first name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">last name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">phone</label>
                            <input type="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">confirm password</label>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="sign-btn d-block w-100">
                            تسجيل جديد
                        </button>
                        <p>
                            already have account?
                            <a href="#" class="text-dark sign-inscrol">
                                تسجيل الدخول
                            </a>
                        </p>
                    </form>
                </div>
                <div class="fade-pass">
                    <div class="title">
                        <h3>forget password</h3>
                        <p>please enter your email , we will send you a link to reset your password</p>
                    </div>
                    <form action="rest-pass.html" class="form-pass">
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="sign-btn d-block w-100">
                            submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sign-modal -->
@yield('modal')

<script src="{{site_path()}}/js/jquery-3.2.1.min.js"></script>
<script src="{{site_path()}}/js/popper.min.js"></script>
<script src="{{site_path()}}/js/bootstrap.min.js"></script>
<script src="{{site_path()}}/js/swiper.min.js"></script>
<script src="{{site_path()}}/js/main.js"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNm7VC4eQsCZcny5cVteIkg_SMJpc2G7Y&libraries=places&callback=initialize&lang=ar"
        async defer></script>

<!-- JQuery Validation -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<!-- Notify Js -->
<script src="{{url('/')}}/public/notify.js"></script>
<script>
    $(document).ready(function() {
        fillAddressData();
        // Notify Js
        var type = $('#alertType').val();
        if (type != '0') {
            var theme = $('#alertTheme').val();
            var message = $('#alertMessage').val();
            $.notify(message, theme);
        }

        // allow number only in inputs has class phone
        $(".phone").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        // Google Maps
        if (navigator.geolocation) navigator.geolocation.getCurrentPosition(showPosition);
    });
</script>

<!-- FireBase start -->

<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
{{-- <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script> --}}

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyAAdk8K0JT-ZS2hTPZVjGDnT4zTc2xNQgA",
        authDomain: "project-8-6-2020.firebaseapp.com",
        databaseURL: "https://project-8-6-2020.firebaseio.com",
        projectId: "project-8-6-2020",
        storageBucket: "project-8-6-2020.appspot.com",
        messagingSenderId: "937261375908",
        appId: "1:937261375908:web:2cee8d6c5a7c730a916131",
        measurementId: "G-YF2VD5X7F9",
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    // Retrieve Firebase Messaging object.
    const messaging = firebase.messaging();
    window.fcmMessageing  = messaging;
    // Add the public key generated from the console here.
    messaging.usePublicVapidKey("AAAA2jkhoaQ:APA91bGaZTr5OCAzosBguPj6XejiZp6LH6DacE81RcuFYUR99nNSFCCKkkazypj0oJLoMm48eT9n9PdgM5e7WffrQjoK0GEFTB1q9pJ1e3Yx_ImhNstvZkhA_Jy3qCK1n8rHcV_vE4fM");

    Notification.requestPermission().then((permission) => {
        if (permission === 'granted') {
            console.log('Notification permission granted.');
        } else {
            console.log('Unable to get permission to notify.');
        }
    });

    messaging.getToken().then((currentToken) => {
        if (currentToken) {
            console.log(currentToken);
            localStorage.setItem('device_id', currentToken);
        } else {
            console.log('No Instance ID token available. Request permission to generate one.');
        }
    }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
    });


    // Callback fired if Instance ID token is updated.
    // messaging.onTokenRefresh(() => {
    //     messaging.getToken().then((refreshedToken) => {
    //         console.log('Token refreshed.');
    //     }).catch((err) => {
    //         console.log('Unable to retrieve refreshed token ', err);
    //     });
    // });

    messaging.onMessage((payload) => {
        let title = payload.notification.title;
        let body  = payload.notification.body;
        let title_desc  = '';
        let body_desc   = '';

        // Swal.fire(
        //     title_desc,
        //     body_desc,
        //     'info'
        // )
    });
</script>

<link rel="manifest" href="{{site_path()}}/manifest.json">

<!-- FireBase End -->

{{-- DatePicker --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( ".datepicker" ).datepicker({
            minDate:0,
            startDate:new Date(),
            autoclose: true,
            todayHighlight: true,
            dateFormat: 'yy-mm-dd',
        });
    });
</script>

{{-- Maps --}}
<script>
    let lat = 24.774265;
    let lng = 46.738586;
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function initialize() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                lat = position.coords.latitude;
                lng = position.coords.longitude;
                $("#lat").val(lat);
                $("#lng").val(lng);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        }
        var myLatlng = new google.maps.LatLng(lat, lng);

        var myOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };

        var map = new google.maps.Map(
            document.getElementById("add_map"),
            myOptions
        );

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            draggable: true,
        });

        var searchBox = new google.maps.places.SearchBox(
            document.getElementById("pac-input")
        );
        google.maps.event.addListener(searchBox, "places_changed", function() {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; (place = places[i]); i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(12);
        });

        google.maps.event.addListener(marker, "position_changed", function() {
            var lat     = marker.getPosition().lat();
            var lng     = marker.getPosition().lng();
            $("#lat").val(lat);
            $("#lng").val(lng);
        });
    }

    function showPosition(position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        initialize();
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl02ktqMdvzEwH-_oa7RREoI8Gr-6c9eQ&libraries=places&callback=initialize"
        async defer></script>

<script>
    function saveEmail() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('mail_list') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#MailListForm")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.save').notify(
                        msg.msg, {
                            position: "bottom"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    $('.save').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );

                    $('#MailListInput').val('');
                }
            }
        });
    }

    function addAddress() {
        event.preventDefault();
        // edit
        if($('#address_type').val() == 'edit'){
            editAddress();
            return false;
        }
        // add
        $.ajax({
            type: 'POST',
            url: '{{ route('storeAddress') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#formRegister")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.register').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    document.location.assign("{{url('/show-profile?tab=address')}}");
                }
            }
        });
    }

    function editAddressData(type , item = '') {
        $('#address_type').val(type);
        // if(item == '') return false;
        $('#address_id').val(item.id);
        $('#address_first_name').val(item.first_name);
        $('#address_last_name').val(item.last_name);
        if(item != '') $('#address_country_id').val(item.country_id);
        $('#address_city').val(item.city);
        $('#address_first_street').val(item.first_street);
        $('#address_second_street').val(item.second_street);
        $('#address_phone').val(item.phone);
        $('#address_email').val(item.email);
        $('#address_notes').val(item.notes);
    }

    function editAddress() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('updateAddress') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#formRegister")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.register').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    document.location.assign("{{url('/show-profile?tab=address')}}");
                }
            }
        });
    }

    function updateProfile() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('update_profile') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#updateProfileForm")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.updateProfile').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    window.location.assign("{{url('/show-profile?tab=profile')}}");
                }
            }
        });
    }

    function updatePassword() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('update_password') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#updatePasswordForm")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.updatePassword').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    window.location.assign("{{url('/show-profile?tab=profile')}}");
                }
            }
        });
    }

    function addToCart() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('add_to_cart') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#add_to_cartForm")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.cart').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    window.location.reload();
                }
            }
        });
    }

    function updateCart(cart_id , operater = '+') {
        // event.preventDefault();
        $('#cart_id').val(cart_id);
        let count = operater == '+' ? parseInt($('#countInput' + cart_id).val()) + 1 : parseInt($('#countInput' + cart_id).val()) - 1;
        $('#count').val(count);
        $.ajax({
            type: 'POST',
            url: '{{ route('update_to_cart') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#promoForm")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('#danger' + cart_id).html(msg.msg);
                } else if (msg.value == '2') {
                    $('#danger' + cart_id).html(msg.msg);
                } else {
                    $('.cartRow').html(msg.maxCart);
                    $('.cartMini').html(msg.miniCart);
                    $('#danger' + cart_id).html('');
                }
            }
        });
    }

    function checkPromo() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('check_promo') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#promoForm")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.promoBtn').notify(
                        msg.msg, {
                            position: "bottom"
                        }
                    );
                } else if (msg.value == '2') {
                    $.notify(msg.msg, 'danger');
                } else {
                    $('.cartRow').html(msg.maxCart);
                    $('.cartMini').html(msg.miniCart);
                    $.notify("كود صالح للاستخدام", 'success');
                }
            }
        });
    }

    function checkout() {
        event.preventDefault();
        $('#orderSubmit').trigger('click');
    }

    function register() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('site_post_register') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#formRegister")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.register').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else {
                    window.location.assign('{{route('site_home')}}');
                }
            }
        });
    }

    function login() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('site_post_login') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#formLogin")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.login').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else {
                    window.location.assign('{{route('site_home')}}');
                }
            }
        });
    }

    function forget() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('site_post_forget_password') }}',
            datatype: 'json',
            async: false,
            processData: false,
            contentType: false,
            data: new FormData($("#formForget")[0]),
            success: function (msg) {
                if (msg.value == '0') {
                    $('.forget').notify(
                        msg.msg, {
                            position: "top"
                        }
                    );
                } else {
                    window.location.assign('{{route('site_home')}}');
                }
            }
        });
    }

    function add_to_like(service_id ,event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('add_to_like') }}',
            data: {
                '_token'     : '{{csrf_token()}}',
                'service_id' : service_id,
            },
            success: function (msg) {
                if (msg.value != '1') {
                    $.notify(msg.msg, 'danger');
                }else {
                    $('.service' + service_id).find('i').toggleClass('fas red');
                }
            }
        });
    }

    function fillAddressData() {
        // event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ route('fill_address_data') }}',
            data: {
                '_token'     : '{{csrf_token()}}',
                'address_id' : $('#address_id').val(),
            },
            success: function (msg) {
                $('#addressData').html(msg);
            }
        });
    }

    function showColor(id) {
        $('.allColor').hide();
        $('.color' + id).show();
        $('.color' + id + '0').prop('checked' , 'true');
    }
</script>

@yield('script')
</body>

</html>
