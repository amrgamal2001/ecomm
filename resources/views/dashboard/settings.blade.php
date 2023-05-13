@extends('dashboard.master')
@section('title') الإعدادات @endsection
@section('style')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <!-- Default box -->
                    <div class="card card card-outline card-info">
                        <div class="card-body p-0">
                            <div class="set-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="setting-tab" data-toggle="tab" href="#setting" role="tab"
                                           aria-controls="setting" aria-selected="true">
                                            <img src="{{dashboard_path()}}/dist/img/presentation.png" alt="">
                                            <span>اعدادت التطبيق</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab"
                                           aria-controls="social" aria-selected="false">
                                            <img src="{{dashboard_path()}}/dist/img/meeting.png" alt="">
                                            <span>مواقع التواصل</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab"
                                           aria-controls="location" aria-selected="false">
                                            <img src="{{dashboard_path()}}/dist/img/map-placeholder.png" alt="">
                                            <span>اعدادات الخريطة</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab"
                                           aria-controls="seo" aria-selected="true">
                                            <img src="{{dashboard_path()}}/dist/img/presentation.png" alt="">
                                            <span>اعدادات البحث</span>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" id="profile5-tab" data-toggle="tab" href="#profile5" role="tab"
                                            aria-controls="profile5" aria-selected="false">
                                            <img src="{{dashboard_path()}}/dist/img/headphone.png" alt="">
                                            <span>اعدادات الدعم </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact6-tab" data-toggle="tab" href="#contact6" role="tab"
                                            aria-controls="contact6" aria-selected="false">
                                            <img src="{{dashboard_path()}}/dist/img/wallet.png" alt="">
                                            <span>اعدادات الدفع </span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-8 col-12">
                    <!-- Default box -->
                    <div class="card card card-outline card-info">
                        <div class="card-body p-0">
                            <div class="set-tabsContent">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                                        <form action="{{route('updatesetting')}}" method="post" id="updatesettingForm" class="dropzone">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail2">اسم المتجر</label>
                                                    <input type="text" name="keys[site_name]" value="{{settings('site_name')}}" class="form-control" id="exampleInputEmail2"
                                                           placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail2">العنوان</label>
                                                    <input type="text" name="keys[address]" value="{{settings('address')}}" class="form-control" id="exampleInputEmail2"
                                                           placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">البريد الإلكتروني</label>
                                                    <input type="email" name="keys[email]" value="{{settings('email')}}" class="form-control" id="exampleInputEmail1"
                                                           placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">الجوال</label>
                                                    <input type="tel" name="keys[phone]" value="{{settings('phone')}}" class="form-control phone" id="exampleInputPhone1" placeholder="">
                                                </div>
                                                <div class="form-group pad">
                                                    <label>وصف للموقع</label>
                                                    <textarea class="form-control" name="keys[site_desc]" placeholder="" rows="4">{{settings('site_desc')}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input-file-now-custom-1">لوجو الموقع</label>
                                                    <input type="file" name="logo" id="input-file-now-custom-1" class="dropify"
                                                           data-default-file="{{url('' . settings('logo'))}}" />
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" onclick="updatesetting()" class="btn btn-success save" style="width:100%">حفظ</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                        <form action="{{route('updatesocial')}}" id="updatesocialForm" method="POST" class="dropzone">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>فيسبوك</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                                                        </div>
                                                        <input type="url" name="keys[facebook]" value="{{settings('facebook')}}" class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <div class="form-group">
                                                    <label>تويتر</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                        </div>
                                                        <input type="url" name="keys[twitter]" value="{{settings('twitter')}}" class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <div class="form-group">
                                                    <label>جوجل بلاس</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-google-plus-g"></i></span>
                                                        </div>
                                                        <input type="url" name="keys[google]" value="{{settings('google')}}" class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <div class="form-group">
                                                    <label>بيهانس</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-behance"></i></span>
                                                        </div>
                                                        <input type="text" name="keys[behance]" value="{{settings('behance')}}" class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" onclick="updatesocial()" class="btn btn-success save" style="width:100%">حفظ</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show" id="location" role="tabpanel" aria-labelledby="location-tab">
                                        <form action="{{route('updatelocation')}}" id="updatelocationForm" method="POST" class="dropzone">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group" style="position: relative;">
                                                    <input class="controls" id="pac-input" name="pac-input" value="" placeholder="اكتب موقعك"/>
                                                    <input type="hidden" name="keys[lat]" id="lat" value="{{settings('lat')}}" readonly />
                                                    <input type="hidden" name="keys[lng]" id="lng" value="{{settings('lng')}}" readonly />
                                                    <div class="col-sm-12" id="add_map"></div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" onclick="updatelocation()" class="btn btn-success save" style="width:100%">حفظ</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                                        <form action="{{route('updateseo')}}" id="updateseoForm" method="POST" class="dropzone">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group pad">
                                                    <label>الوصف</label>
                                                    <textarea class="form-control" name="keys[description]" placeholder="" rows="4">{{settings('description')}}</textarea>
                                                </div>

                                                <div class="form-group pad">
                                                    <label>الكلمات المفتاحية</label>
                                                    <textarea class="form-control" name="keys[key_words]" placeholder="" rows="4">{{settings('key_words')}}</textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" onclick="updateseo()" class="btn btn-success save" style="width:100%">حفظ</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('modal')
@endsection

@section('script')
    <script>
        function updatesetting(){
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updatesetting') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updatesettingForm")[0]),
                success     : function(msg){
                    if(msg.value == '0'){
                        $('.save').notify(
                            msg.msg, {
                                position: "bottom"
                            }
                        );
                    }else{
                        window.location.reload();
                    }
                }
            });
        }

        function updatesocial(){
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updatesocial') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updatesocialForm")[0]),
                success     : function(msg){
                    if(msg.value == '0'){
                        $('.save').notify(
                            msg.msg, {
                                position: "bottom"
                            }
                        );
                    }else{
                        $.notify(msg.msg, 'success');
                    }
                }
            });
        }

        function updatelocation(){
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updatelocation') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updatelocationForm")[0]),
                success     : function(msg){
                    if(msg.value == '0'){
                        $('.save').notify(
                            msg.msg, {
                                position: "bottom"
                            }
                        );
                    }else{
                        $.notify(msg.msg, 'success');
                    }
                }
            });
        }

        function updateseo(){
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updateseo') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updateseoForm")[0]),
                success     : function(msg){
                    if(msg.value == '0'){
                        $('.save').notify(
                            msg.msg, {
                                position: "bottom"
                            }
                        );
                    }else{
                        $.notify(msg.msg, 'success');
                    }
                }
            });
        }
    </script>
@endsection
