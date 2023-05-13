@extends('site.master')
@section('title') المنتجات المفضلة @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- feature-pro -->
        <section class="feature-pro related-pro">
            <div class="container">
                <div class="collection-title">
                    <h1> المنتجات المفضلة</h1>
                </div>
                <div class="row">
                    @foreach (App\Models\Service_like::where('user_id' , Auth::id())->get() as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="{{route('show_service' , $item->service->id)}}">
                                <div class="pro-cart">
                                    <div class="pro-img">
                                        <img src="{{$item->service->images->count() > 0 ? url('' . $item->service->images->first()->image) : url('public/none.png')}}" alt="">
                                    </div>
                                    <div class="pro-txt">
                                        <p class="neme">{{$item->service->title}}</p>
                                        <p class="price">{{$item->service->price}} ريال سعودي</p>
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
