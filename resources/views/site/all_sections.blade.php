@extends('site.master')
@section('title') المنتجات @endsection
@section('style')
@endsection

@section('content')
    <div class="wrap">
        <!-- page-head -->
        <section class="page-head bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h1>المنتجات</h1>
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
                                المنتجات
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div id="accordion" class="cat-nav">
                            @foreach (App\Models\Section::get() as $item)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-dark" data-toggle="collapse"
                                                    data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                                                <span>{{$item->title}}</span>
                                                <i class="fa"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse{{$item->id}}"
                                         class="collapse {{isset($queries['sub_cat']) && !empty($queries['sub_cat']) && $item->sub_sections->count() > 0 && in_array($queries['sub_cat'] , $item->sub_sections->pluck('id')->toArray()) ? 'show' : '' }}"
                                         aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                @foreach($item->sub_sections as $sub)
                                                    <li class="">
                                                        <a class="" href="{{url('all-sections?sub_cat=' . $sub->id)}}" onclick="addToFilter('sub_cat' , {{$sub->id}} , event)" class="text-dark">
                                                            {{$sub->title}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-9 col-12">
                        <div class="filter-div">
                            <div class="search-result">
                                <p id="count">{{count($data)}}</p>
                                <span>منتج</span>
                            </div>
                            <div class="filter-links">
                                <ul>
                                    <li>
                                        <a href="#" class="filter text-dark">
                                            <span>التصفية</span>
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="sort text-dark" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>عرض حسب</span>
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item {{isset($queries['filter']) && !empty($queries['filter']) && $queries['filter'] == 'newer' ? 'active' : '' }}" href="{{url('all-sections?filter=newer')}}" onclick="addToFilter('filter' , 'newer' , event)">الاحدث</a>
                                            <a class="dropdown-item {{isset($queries['filter']) && !empty($queries['filter']) && $queries['filter'] == 'cheper' ? 'active' : '' }}" href="{{url('all-sections?filter=cheper')}}" onclick="addToFilter('filter' , 'cheper' , event)">الاقل سعرا</a>
                                            <a class="dropdown-item {{isset($queries['filter']) && !empty($queries['filter']) && $queries['filter'] == 'expensive' ? 'active' : '' }}" href="{{url('all-sections?filter=expensive')}}" onclick="addToFilter('filter' , 'expensive' , event)">الاكثر سعرا</a>
                                            <a class="dropdown-item {{isset($queries['filter']) && !empty($queries['filter']) && $queries['filter'] == 'salled' ? 'active' : '' }}" href="{{url('all-sections?filter=salled')}}" onclick="addToFilter('filter' , 'salled' , event)">الاكثر مبيعا</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" class="grid text-dark">
                                            <i class="fas fa-th-large"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="line text-dark">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="fliter-form">
                            <form action="{{route('search')}}" id="searchForm" method="post">
                                @csrf
                                <input type="hidden" name="sub_section_id" id="sub_cat" value="{{isset($queries['sub_cat']) && !empty($queries['sub_cat']) ? $queries['sub_cat'] : '' }}">
                                <input type="hidden" name="filter" id="filter" value="{{isset($queries['filter']) && !empty($queries['filter']) ? $queries['filter'] : '' }}">
                                @foreach (App\Models\Property::get() as $item)
                                    <div class="fliter-item">
                                        <h6 class="text-dark">{{$item->title}}</h6>
                                        <div class="check-group">
                                            @foreach ($item->items as $property_item)
                                                <label class="checkcontainer">{{$property_item->title}}
                                                    <input type="checkbox" name="property_item_ids[]" value="{{$property_item->id}}" {{isset($queries['property_item_ids']) && !empty($queries['property_item_ids']) && in_array($property_item->id , explode(',' , $queries['property_item_ids'])) ? 'checked' : '' }}>
                                                    <span class="checkmark"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                <div class="fliter-item">
                                    <h6 class="text-dark">filter by price</h6>
                                    <div class="filter-price">
                                        <div class="price-field">
                                            <input type="range" name="min_price" min="1" max="5000" value="{{isset($queries['min_price']) && !empty($queries['min_price']) ? $queries['min_price'] : '1' }}" id="lower">
                                            <input type="range" name="max_price" min="1" max="5000" value="{{isset($queries['max_price']) && !empty($queries['max_price']) ? $queries['max_price'] : '5000' }}" id="upper">
                                        </div>
                                        <div class="price-wrap">
                                            <span class="price-title">السعر</span>
                                            <div class="price-wrap-1">
                                                <input id="one">
                                                <label for="one">R.s</label>
                                            </div>
                                            <div class="price-wrap_line">-</div>
                                            <div class="price-wrap-2">
                                                <input id="two">
                                                <label for="two">R.s</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fliter-item cart-drop">
                                    <button type="submit" id="searchSubmit" class="sign-btn">
                                        تصفية
                                    </button>
                                    <button type="reset" class="sign-btn cart-btn">
                                        الغاء
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="product-cats feature-pro">
                            <div class="row justify-content-center">
                                @foreach ($data as $item)
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
                    </div>
                </div>
            </div>
        </section>
        <!-- end page-head -->
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
