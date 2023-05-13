@extends('dashboard.master')
@section('title') {{awtTrans('المديرين')}} @endsection
@section('style')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card" style="width:100% !important;">
            <div class="card-header">
                <div class="col-12">
                    <div class="btns header-buttons">
                        <button class="btn bg-teal" title="{{awtTrans('اضافة')}}" data-toggle="modal" data-target="#add-admin">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllAdmin('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllAdmin('all')" data-toggle="modal" data-target="#confirm-all-del">
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
                                <th>{{awtTrans('الأسم')}}</th>
                                <th>{{awtTrans('الجوال')}}</th>
                                <th>{{awtTrans('البريد الإلكتروني')}}</th>
                                <th>{{awtTrans('الصلاحية')}}</th>
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
                                        <a data-fancybox data-caption="{{$item->name}}" href="{{ url(''.$item->avatar) }}">
                                            <img src="{{ url(''.$item->avatar) }}" height="40px" width="35px" alt="" class="img-circle">
                                        </a>
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td><a href="tel:{{convert_phone_to_international_format($item->phone)}}" target="_blanck">{{$item->phone}}</a></td>
                                    <td><a href="mailto:{{$item->email}}" target="_blanck">{{$item->email}}</a></td>
                                    <td>{{is_null($item->role) ? '' : $item->role->name}}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                            {{-- <a href="#" class="btn btn-sm btn-primary" title="{{awtTrans('عرض')}}" onclick="showAdmin({{ $item }})"  data-toggle="modal" data-target="#user-profile">
                                                <i class="fas fa-user"></i>
                                            </a> --}}

                                            <a href="#" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}" onclick="editAdmin({{ $item }})"  data-toggle="modal" data-target="#edit-admin">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteAdmin('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
    </section>
    <!-- /.content -->
@endsection

@section('modal')
    <!-- user-profile modal-->
    <div class="modal fade user-profile" id="user-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="img-div">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <a id="show_avatar_fancy" data-fancybox data-caption="" href="">
                    <img id="show_avatar" src="" alt="">
                </a>
            </div>
           <div class="user-d text-center">
                <p class="name" id="show_name"></p>
                <ul>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a id="show_phone" href="">

                        </a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a id="show_email" href="">

                        </a>
                    </li>
                </ul>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!--end user-profile modal-->
    <!-- add-admin modal-->
    <div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إضافة مدير')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('addadmin')}}" id="addAdminForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{awtTrans('الصورة الشخصية')}}</label>
                    <div class="main-input">
                    <input class="file-input" type="file" name="photo" accept="image/*"/>
                    <i class="fas fa-camera gray"></i>
                    <span class="file-name text-right gray">

                    </span>
                    <div class="uploaded-image"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الأسم')}}</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="form-group" style="display: none">
                    <label>{{awtTrans('الأسم')}}</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('البريد الإلكتروني')}}</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الجوال')}}</label>
                    <input type="number" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الصلاحية')}}</label>
                    <select name="role_id" class="form-control">
                        @foreach (App\Models\Role::orderBy('name' , 'asc')->get() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('كلمة المرور')}}</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="addAdmin()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end add-admin modal-->
    <!-- edit-admin modal-->
    <div class="modal fade" id="edit-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تعديل مدير')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('updateadmin')}}" id="updateAdminForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="edit_id">
                <div class="form-group">
                    <label>{{awtTrans('الصورة الشخصية')}}</label>
                    <div class="main-input">
                        <input class="file-input" type="file" name="photo" accept="image/*"/>
                        <i class="fas fa-camera gray"></i>
                        <span class="file-name text-right gray">

                        </span>
                        <div class="uploaded-image">
                            <img src="" id="edit_avatar" alt="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الأسم')}}</label>
                    <input type="text" name="first_name" id="edit_first_name" class="form-control">
                </div>
                <div class="form-group" style="display: none">
                    <label>{{awtTrans('الأسم')}}</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('البريد الإلكتروني')}}</label>
                    <input type="email" name="email" id="edit_email" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الجوال')}}</label>
                    <input type="number" name="phone" id="edit_phone" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الصلاحية')}}</label>
                    <select name="role_id" id="edit_role_id" class="form-control">
                        @foreach (App\Models\Role::orderBy('name' , 'asc')->get() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label>{{awtTrans('كلمة المرور')}}</label>
                    <input type="password" name="password" id="edit_password" class="form-control">
                </div> --}}
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="updateAdmin()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end edit-admin modal-->
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
            <form action="{{route('deleteadmin')}}" method="post" class="d-flex align-items-center">
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
            <form action="{{route('deleteadmins')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="admin_ids" id="delete_ids">
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

        function sendNotify(type , id) {
            $('#notify_type').val(type);
            $('#notify_id').val(id);
        }

        function addAdmin() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('addadmin') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addAdminForm")[0]),
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

        function showAdmin(admin){
            $('#show_name').html(admin.name);
            $('#show_phone').html(admin.phone);
            $('#show_phone').removeAttr('href');
            $('#show_phone').attr('href' , "tel:" + admin.phone);
            $('#show_email').html(admin.email);
            $('#show_email').removeAttr('href');
            $('#show_email').attr('href' , "mailto:" + admin.email);
            $('#show_role_id').html(admin.role_id);
            $('#show_avatar').removeAttr('src');
            $('#show_avatar').attr('src' , "{{url('')}}"+admin.avatar);
            $('#show_avatar_fancy').removeAttr('data-caption');
            $('#show_avatar_fancy').attr('data-caption' , admin.name);
            $('#show_avatar_fancy').removeAttr('href');
            $('#show_avatar_fancy').attr('href' , "{{url('')}}"+admin.avatar);
        }

        function editAdmin(admin){
            $('#edit_id').val(admin.id);
            $('#edit_first_name').val(admin.first_name);
            $('#edit_phone').val(admin.phone);
            $('#edit_email').val(admin.email);
            $('#edit_role_id').val(admin.role_id);
            // $('#edit_password').val('');
            $('#edit_avatar').removeAttr('src');
            $('#edit_avatar').attr('src' , "{{url('')}}"+admin.avatar);
        }

        function updateAdmin() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updateadmin') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updateAdminForm")[0]),
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

        function deleteAdmin(id){
          $('#delete_id').val(id);
        }

        function deleteAllAdmin(type){
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
            let adminsIds = '';
            $('.checkSingle:checked').each(function () {
                let id = $(this).attr('id');
                adminsIds += id + ' ';
            });
            let requestData = adminsIds.split(' ');
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
