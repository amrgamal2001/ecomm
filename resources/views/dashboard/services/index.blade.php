@extends('dashboard.master')
@section('title') {{awtTrans('المنتجات')}} @endsection
@section('style')

@endsection

@section('content')
    <!-- Main content -->
    <service class="content">
        <!-- Default box -->
        <div class="card" style="width:100% !important;">
            <div class="card-header">
                <div class="col-12">
                    <div class="btns header-buttons">
                        <a href="{{route('newservice')}}" class="btn bg-teal" title="{{awtTrans('اضافة')}}">
                            <i class="fas fa-plus"></i>
                        </a>
                        <button class="btn btn-danger" onclick="deleteAllService('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllService('all')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف الكل')}}
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr style="text-align: center">
                                <th>
                                    <label class="custom-control material-checkbox" style="margin: auto">
                                        <input type="checkbox" class="material-control-input" id="checkedAll">
                                        <span class="material-control-indicator"></span>
                                    </label>
                                </th>
                                {{-- <th>#</th> --}}
                                <th>{{awtTrans('الصورة')}}</th>
                                <th>{{awtTrans('العنوان')}}</th>
                                <th>{{awtTrans('القسم')}}</th>
                                <th>{{awtTrans('وقت التسجيل')}}</th>
                                <th>{{awtTrans('التحكم')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i=>$item)
                                <tr style="text-align: center">
                                    <td>
                                        <label class="custom-control material-checkbox" style="margin: auto">
                                            <input type="checkbox" class="material-control-input checkSingle" id="{{$item->id}}">
                                            <span class="material-control-indicator"></span>
                                        </label>
                                    </td>
                                    {{-- <td>{{ ++$i }}</td> --}}
                                    <td>
                                        <a data-fancybox data-caption="{{$item->title_ar}}" href="{{ url(''.$item->images->first()->image) }}">
                                            <img src="{{ url(''.$item->images->first()->image) }}" height="40px" width="35px" alt="" class="img-circle">
                                        </a>
                                    </td>
                                    <td>{{$item->title_ar}}</td>
                                    <td>{{$item->section->title_ar}}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                        <a href="{{route('editservice' , $item->id)}}" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteService('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </service>
    <!-- /.content -->
@endsection

@section('modal')
    <!-- add-service modal-->
    <div class="modal fade" id="add-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إضافة منتج')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('addservice')}}" id="addServiceForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{awtTrans('الصورة')}}</label>
                    <div class="main-input">
                    <input class="file-input" type="file" name="photo" accept="image/*"/>
                    <i class="fas fa-camera gray"></i>
                    <span class="file-name text-right gray">

                    </span>
                    <div class="uploaded-image"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('القسم')}}</label>
                    <select name="section_id" class="form-control">
                        @foreach (App\Models\Section::orderBy('title_ar' , 'asc')->get() as $item)
                            <option value="{{ $item->id }}">{{ $item->title_ar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالعربية')}}</label>
                    <input type="text" name="title_ar" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالإنجليزية')}}</label>
                    <input type="text" name="title_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل القصيرة بالعربية')}}</label>
                    <textarea name="short_desc_ar" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل القصيرة بالإنجليزية')}}</label>
                    <textarea name="short_desc_en" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل الكاملة بالعربية')}}</label>
                    <textarea name="desc_ar" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل الكاملة بالإنجليزية')}}</label>
                    <textarea name="desc_en" class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="addService()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end add-service modal-->
    <!-- edit-service modal-->
    <div class="modal fade" id="edit-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تعديل منتج')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('updateservice')}}" id="updateServiceForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="edit_id">
                <div class="form-group">
                    <label>{{awtTrans('الصورة')}}</label>
                    <div class="main-input">
                        <input class="file-input" type="file" name="photo" accept="image/*"/>
                        <i class="fas fa-camera gray"></i>
                        <span class="file-name text-right gray">

                        </span>
                        <div class="uploaded-image">
                            <img src="" id="edit_image" alt="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('القسم')}}</label>
                    <select name="section_id" id="edit_section_id" class="form-control">
                        @foreach (App\Models\Section::orderBy('title_ar' , 'asc')->get() as $item)
                            <option value="{{ $item->id }}">{{ $item->title_ar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالعربية')}}</label>
                    <input type="text" name="title_ar" id="edit_title_ar" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالإنجليزية')}}</label>
                    <input type="text" name="title_en" id="edit_title_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل القصيرة بالعربية')}}</label>
                    <textarea name="short_desc_ar" id="edit_short_desc_ar" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل القصيرة بالإنجليزية')}}</label>
                    <textarea name="short_desc_en" id="edit_short_desc_en" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل الكاملة بالعربية')}}</label>
                    <textarea name="desc_ar" id="edit_desc_ar" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('التفاصيل الكاملة بالإنجليزية')}}</label>
                    <textarea name="desc_en" id="edit_desc_en" class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="updateService()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end edit-service modal-->
    <!-- confirm-del modal-->
    <div class="modal fade" id="confirm-del" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تأكيد الحذف')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center">
              {{awtTrans('هل تريد الاستمرار في عملية الحذف ؟')}}
            </h3>
            <form action="{{route('deleteservice')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="id" id="delete_id">
                <button type="submit" class="btn btn-sm btn-success">{{awtTrans('تأكيد')}}</button>
                <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إلغاء')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end confirm-del modal-->
    <!-- confirm-del-all modal-->
    <div class="modal fade" id="confirm-all-del" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تأكيد الحذف')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center">
              {{awtTrans('هل تريد الاستمرار في عملية الحذف ؟')}}
            </h3>
            <form action="{{route('deleteservices')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="section_ids" id="delete_ids">
                <input type="hidden" name="type" id="delete_type">
                <button type="submit" onclick="checkDataIds()" class="btn btn-sm btn-success">{{awtTrans('تأكيد')}}</button>
                <button class="btn btn-sm btn-danger" id="delete-all-modal" data-dismiss="modal">{{awtTrans('إلغاء')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end confirm-del-all modal-->
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
                                position: "bottom"
                            }
                        );
                    }else{
                        window.location.reload();
                    }
                }
            });
        }

        function editService(service){
            $('#edit_id').val(service.id);
            $('#edit_section_id').val(service.section_id);
            $('#edit_title_ar').val(service.title_ar);
            $('#edit_title_en').val(service.title_en);
            $('#edit_short_desc_ar').html(service.short_desc_ar);
            $('#edit_short_desc_en').html(service.short_desc_en);
            $('#edit_desc_ar').html(service.desc_ar);
            $('#edit_desc_en').html(service.desc_en);
            $('#edit_image').removeAttr('src');
            $('#edit_image').attr('src' , "{{url('')}}"+service.image);
        }

        function updateService() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updateservice') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updateServiceForm")[0]),
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

        function deleteService(id){
          $('#delete_id').val(id);
        }

        function deleteAllService(type){
          $('#delete_type').val(type);
        }

        function checkDataIds(){
            let ids  = $('#delete_ids').val();
            let type = $('#delete_type').val();
            if(type != 'all' && ids == ''){
                event.preventDefault();
                $('#delete-all-modal').trigger('click');
            }
        }

        function checkIds(){
            let servicesIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				servicesIds += id + ' ';
			});
			let requestData = servicesIds.split(' ');
            $('#delete_ids').val(requestData);
        }

        $("#checkedAll").change(function(){
			if(this.checked){
				$(".checkSingle").each(function(){
					this.checked=true;
				});
			}else{
				$(".checkSingle").each(function(){
					this.checked=false;
				});
			}
            checkIds();
		});

		$(".checkSingle").click(function () {
			if ($(this).is(":checked")){
				var isAllChecked = 0;
				$(".checkSingle").each(function(){
					if(!this.checked)
						isAllChecked = 1;
				})
				if(isAllChecked == 0){ $("#checkedAll").prop("checked", true); }
			}else {
				$("#checkedAll").prop("checked", false);
			}
            checkIds();
		});

        $(document).on("click", ".uploaded-image", function () {
            $(this).addClass("active");
        });

        $("body").on("click", function () {
            $('.uploaded-image').removeClass("active");
        });
    </script>
@endsection
