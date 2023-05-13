@extends('site.master')
@section('title') الصفحة الشخصية @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- page-head -->
        <section class="page-head bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h1>الصفحة الشخصية</h1>
                </div>
            </div>
        </section>
        <!-- end page-head -->
        <!-- page-head -->
        <section class="page-cat">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cats-link">
                            <a href="{{url('/')}}">
                                الرئيسية
                            </a>
                            /
                            <a>
                                الصفحة الشخصية
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <ul class="nav nav-tabs acc-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{empty($tab) || $tab == 'order' ? 'active' : ''}}" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    <i class="fas fa-box"></i>
                                    <span>طلباتي</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$tab == 'address' ? 'active' : ''}}" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>عناويني</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$tab == 'profile' ? 'active' : ''}}" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <i class="fas fa-user"></i>
                                    <span>حسابي</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-12">
                        <div class="tab-content acc-content" id="myTabContent">
                            <div class="tab-pane fade {{empty($tab) || $tab == 'order' ? 'show active' : ''}}" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="my-order">
                                    <h3>طلباتي</h3>
                                    @foreach ($orders as $order)
                                        <div class="order-item">
                                            <div class="order-img">
                                                @foreach ($order->items as $item)
                                                    <div class="img">
                                                        <img src="{{isset($item->service) && $item->service->images->count()>0 ? url('' . $item->service->images->first()->image) : url('public/none.png')}}" alt="">
                                                        <span class="sign-btn">{{$item->count}}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <ul class="order-info">
                                                <li>
                                                    <span>الاجمالي</span>
                                                    <span>{{$order->total}} ريال سعودي</span>
                                                </li>
                                                <li>
                                                    <span>العنوان</span>
                                                    <span class="address">{{$order->first_street}} , {{$order->city}} , {{isset($order->country) ? $order->country->title : ''}}</span>
                                                </li>
                                            </ul>
                                            {{-- <div class="stat">
                                                <i class="far fa-times-circle"></i>
                                                <span>canceled</span>
                                            </div> --}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade {{$tab == 'address' ? 'show active' : ''}}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="my-address">
                                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                                        <h3>عناويني</h3>
                                        <a href="" onclick="editAddressData('add')" class="add-address text-dark">
                                            <i class="fas fa-plus"></i>
                                            <span>
                                                اضف عنوان جديد
                                            </span>
                                        </a>
                                    </div>
                                    @foreach ($addresses as $item)
                                        <div class="address-item">
                                            <ul class="address-info">
                                                <li>
                                                    <p>الاسم</p>
                                                    <p>{{$item->first_name}} {{$item->last_name}}</p>
                                                </li>
                                                <li>
                                                    <p>العنوان</p>
                                                    <p class="address">
                                                        {{$item->first_street}} , {{$item->city}} , {{isset($item->country) ? $item->country->title : ''}}
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>الجوال</p>
                                                    <p>{{$item->phone}}</p>
                                                </li>
                                                <li>
                                                    <div class="action">
                                                        <a href="#" onclick="editAddressData('edit' , {{$item}})" class="edit-address sign-btn">
                                                            تعديل
                                                        </a>
                                                        <a href="{{route('deleteAddress' , $item->id)}}" class="sign-btn delete-btn">
                                                            حذف
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="address-form">
                                    <h3>عنوان</h3>
                                    <form action="{{route('storeAddress')}}" class="form-up" id="formRegister" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="address_type" value="add">
                                        <input type="hidden" name="id" id="address_id">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="">الاسم الاول *</label>
                                                        <input type="text" name="first_name" id="address_first_name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="">الاسم الاخير</label>
                                                        <input type="text" name="last_name" id="address_last_name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">الدولة *</label>
                                                        <select name="country_id" id="address_country_id" class="form-control">
                                                            @foreach (App\Models\Country::orderBy('title_ar')->get() as $item)
                                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">المدينة *</label>
                                                        <input type="text" name="city" id="address_city" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">العنوان *</label>
                                                        <input type="text" name="first_street" id="address_first_street" class="form-control m-b-15"
                                                               placeholder="رقم العقار و اسم الشارع">
                                                        <input type="text" name="second_street" id="address_second_street" class="form-control"
                                                               placeholder="الشقة و الوحدة">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">الجوال *</label>
                                                        <input type="tel" name="phone" id="address_phone" class="form-control phone">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">البريد الالكتروني *</label>
                                                        <input type="email" name="email" id="address_email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">ملاحظات</label>
                                                        <input type="text" name="notes" id="address_notes" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="sign-btn register" onclick="addAddress()">
                                                        حفظ
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade {{$tab == 'profile' ? 'show active' : ''}}" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="my-account">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <h3>حسابي</h3>
                                    </div>
                                    <div class="acc-info">
                                        <a href="" class="sign-btn edit-acc"  data-toggle="modal" data-target="#edit-modal">
                                            تعديل
                                        </a>
                                        <div class="acc-img">
                                            <img src="{{url('' . Auth::user()->avatar)}}" alt="">
                                            {{-- <i class="fas fa-camera"></i> --}}
                                        </div>
                                        <div class="details">
                                            <ul>
                                                <li>
                                                    <span>الاسم :</span>
                                                    <span> {{Auth::user()->name}}</span>
                                                </li>
                                                <li>
                                                    <span>البريد الالكتروني :</span>
                                                    <span> {{Auth::user()->email}} </span>
                                                </li>
                                                <li>
                                                    <span>الجوال :</span>
                                                    <span> {{Auth::user()->phone}} </span>
                                                </li>
                                                <li>
                                                    <a href="#" class="sign-btn change" data-toggle="modal" data-target="#change-modal">
                                                        تعديل كلمة المرور
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page-head -->
    </div>
@endsection
@section('modal')
    <!-- edit-modal -->
    <div class="modal fade sign-modal edit-modal" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="title">
                            <h3>تعديل حسابي</h3>
                            <p>عدل بياناتك الشخصية</p>
                        </div>
                        <form action="{{route('update_profile')}}" class=" form-up" id="updateProfileForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group border-none">
                                <div class="img-block">
                                    <div class="upload-img">
                                        <div class="upload-icon">
                                            <img src="{{url('' . Auth::user()->avatar)}}" alt="">
                                            {{-- <i class="fas fa-camera-retro"></i> --}}
                                        </div>
                                        <input type="file" id="gallery-photo-add" name="photo">
                                    </div>
                                    {{-- <div class="gallery">
                                        <div class="images">
                                            <img src="img/slide1.jpg" alt="">
                                            <input name="images" type="hidden">
                                            <button class="close">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">

                            </div>
                            <div class="form-group">
                                <label for="">الاسم الاول</label>
                                <input type="text" name="first_name" value="{{Auth::user()->first_name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">الاسم الاخير</label>
                                <input type="text" name="last_name" value="{{Auth::user()->last_name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">البريد الالكتروني</label>
                                <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">الجوال</label>
                                <input type="tel" name="phone" value="{{Auth::user()->phone}}" class="form-control phone">
                            </div>
                            <button type="submit" class="sign-btn d-block w-100 updateProfile" onclick="updateProfile()">
                                حفظ
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end edit-modal -->
    <!-- edit-modal -->
    <div class="modal fade sign-modal change-modal" id="change-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <div class="title">
                            <h3>تعديل كلمة المرور</h3>
                            <p>تعديل كلمة المرور القديمة</p>
                        </div>
                        <form action="{{route('update_password')}}" class=" form-up" id="updatePasswordForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">كلمة المرور الحالية</label>
                                <input type="password" name="old_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">كلمة المرور الجديدة</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">تأكيد كلمة المرور الجديدة</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <button type="submit" class="sign-btn d-block w-100 updatePassword" onclick="updatePassword()">
                                حفظ
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end edit-modal -->
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
