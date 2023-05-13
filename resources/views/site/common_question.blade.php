@extends('site.master')
@section('title') الاسئلة الشائعة @endsection
@section('style')
@endsection

@section('content')
    <div class="sec-who">
        <div class="who-tittle">
            <h2> الاسئلة الشائعة </h2>
            {{-- <h3>ابو طلال > نبذه عنى </h3> --}}
        </div>
    </div>

    @include('msg')

    <div class="content">
        <div class="main-tittle">
            <h1> الاسئلة الشائعة  </h1>
        </div>
        <div class="container">
            <div class="row">



                <div class="accordion">
                    @foreach (App\Models\Question::get() as $item)
                        <div class="accordion-item">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">{{$item->title}}</div>
                            </a>

                            <div class="content">
                                <p>
                                    {{$item->desc}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')  @endsection
