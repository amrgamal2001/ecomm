@extends('site.master')
@section('title') {{$page->title}} @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- page-head -->
        <section class="page-head bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h1>{{$page->title}}</h1>
                </div>
            </div>
        </section>
        <!-- end page-head -->
        <!-- page-head -->
        <section class="page-cat page-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="contact-info">
                            <h2>
                                {{$page->title}}
                            </h2>
                            <p>
                                {{$page->desc}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page-head -->
    </div>
@endsection
@section('script')  @endsection
