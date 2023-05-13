@extends('dashboard.master')
@section('title') {{awtTrans('إضافة منتج')}} @endsection
@section('style')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card" style="width:100% !important;">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('addservice')}}" id="addServiceForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{awtTrans('القسم')}}</label>
                            <select name="sub_section_id" class="form-control">
                                @foreach (App\Models\Sub_section::orderBy('section_id' , 'asc')->get() as $item)
                                    <option value="{{ $item->id }}">{{ $item->section->title_ar }} - {{ $item->title_ar }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('صور المنتج')}}</label>
                            <div class="main-input">
                            <input class="file-input" type="file" name="photos[]" accept="image/*" multiple/>
                            <i class="fas fa-camera gray"></i>
                            <span class="file-name text-right gray">

                            </span>
                            <div class="uploaded-image"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('اسم المنتج بالعربية')}}</label>
                            <input type="text" name="title_ar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('اسم المنتج بالإنجليزية')}}</label>
                            <input type="text" name="title_en" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('سعر المنتج')}}</label>
                            <div class="input-group">
                                <input type="tel" min="0" name="price" value="" class="form-control phone">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{awtTrans('ريال')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('سعر التوصيل')}}</label>
                            <div class="input-group">
                                <input type="tel" min="0" name="delivery" value="" class="form-control phone">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{awtTrans('ريال')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('التفاصيل بالعربية')}}</label>
                            <textarea name="desc_ar" id="desc_ar" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('التفاصيل بالإنجليزية')}}</label>
                            <textarea name="desc_en" id="desc_en" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('معلومة اضافية بالعربية')}}</label>
                            <textarea name="short_desc_ar" id="short_desc_ar" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>{{awtTrans('معلومة اضافية بالإنجليزية')}}</label>
                            <textarea name="short_desc_en" id="short_desc_en" class="form-control" rows="3"></textarea>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label>{{awtTrans('اضافة سمات المنتج')}}</label>
                        </div>

                        <div class="form-group propertyData">
                            <input type="hidden" id="arr_index" value="0">
                            <div class="input-group">
                                @foreach (App\Models\Property::get() as $property)
                                    <select name="{{$property->title_en}}[0]" style="width: {{$width}}% !important;margin-bottom:4px" class="form-control">
                                        @foreach ($property->items as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                @endforeach
                                <input type="tel" min="0" name="amount[0]" style="width: {{$width}}% !important;margin-bottom:4px" value="" class="form-control phone" placeholder="الكمية">
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="#" class="btn btn-info" onclick="addProperty()"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" style="width:100%" class="btn btn-sm btn-success save" onclick="addService()">{{awtTrans('حفظ')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script>
        $(function () {
            $(document).on("change", ".file-input", function () {
                let input = $(this),
                uploadedImage = input.siblings(".uploaded-image"),
                placeHolder = input.siblings(".placeholder"),
                fileName = input.parent().find(".file-name"),
                plus = input.siblings("i.fas.fa-camera");
                if (input.val() === "") {
                fileName.empty();
                uploadedImage.empty();
                placeHolder.removeClass("active");
                plus.fadeIn(100);
                } else {
                plus.fadeOut(100);
                fileName.text(input.val().replace("C:\\fakepath\\", ""));
                uploadedImage.empty();
                uploadedImage.append('<img src="' + URL.createObjectURL(event.target.files[0]) + '">');
                }
            });

            $(document).on("click", ".file-name", function () {
                $(this).siblings(".file-input").click();
            });

            $(document).on("click", ".uploaded-image", function () {
                $(this).addClass("active");
            });

            $("body").on("click", function () {
                $('.uploaded-image').removeClass("active");
            });

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
                $('#label-switch').bootstrapSwitch('onText', 'I');
                $('#label-switch').bootstrapSwitch('offText', 'O');
            });

        });

        function addProperty() {
            event.preventDefault();
            let arr_index = parseInt($('#arr_index').val()) + 1;
            $('#arr_index').val(arr_index);
            $('.propertyData').append('<div class="input-group">@foreach (App\Models\Property::get() as $property)<select name="{{$property->title_en}}[' + arr_index + ']" style="width: {{$width}}% !important;margin-bottom:4px" class="form-control">@foreach ($property->items as $item)<option value="{{$item->id}}">{{$item->title}}</option>@endforeach</select>@endforeach<input type="tel" min="0" name="amount[' + arr_index + ']" style="width: {{$width}}% !important;margin-bottom:4px" value="" class="form-control phone" placeholder="الكمية"></div>');
        }

        function addService() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('addservice') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addServiceForm")[0]),
                success     : function(msg){
                    if(msg.value == '0'){
                        $('.save').notify(
                            msg.msg, {
                                position: "top"
                            }
                        );
                    }else{
                        window.location.assign("{{route('services')}}");
                    }
                }
            });
        }

        $(document).on("click", ".uploaded-image", function () {
            $(this).addClass("active");
        });

        $("body").on("click", function () {
            $('.uploaded-image').removeClass("active");
        });
    </script>
@endsection
