@extends('site.master')
@section('title') اتصل بنا @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- page-head -->
        <section class="page-head bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h1>اتصل بنا</h1>
                </div>
            </div>
        </section>
        <!-- end page-head -->
        <!-- page-head -->
        <section class="page-cat page-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="contact-info">
                            <h2>
                                اتصل بنا
                            </h2>
                            <p>
                                {{settings('site_desc')}}
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>{{settings('address')}}</p>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:{{settings('phone')}}" class="text-dark">{{settings('phone')}}</a>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:{{settings('email')}}" class="text-dark">{{settings('email')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="contact-form ">
                            <form action="{{route('post_contact_us')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">الاسم بالكامل </label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">البريد الالكتروني</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="">رسالتك</label>
                                    <textarea id="" class="form-control" name="message" required cols="30" rows="4"></textarea>
                                </div>
                                <button class="sign-btn" type="submit">
                                    ارسال
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="add_map"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page-head -->
    </div>
@endsection
@section('script')  @endsection
