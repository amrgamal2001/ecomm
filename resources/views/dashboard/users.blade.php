@extends('dashboard.master')
@section('title') {{awtTrans('الأعضاء')}} @endsection
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
                        <button class="btn bg-teal" title="{{awtTrans('اضافة')}}" data-toggle="modal" data-target="#add-user">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn bg-warning" onclick="sendNotify('all' , '0')" data-toggle="modal" data-target="#send-noti">
                            <i class="fas fa-paper-plane"></i>
                            {{awtTrans('إرسال للكل')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllUser('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllUser('all')" data-toggle="modal" data-target="#confirm-all-del">
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
                                <th>{{awtTrans('حالة العضو')}}</th>
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
                                    <td><a href="tel:{{$item->full_phone}}" target="_blanck">{{$item->phone}}</a></td>
                                    <td><a href="mailto:{{$item->email}}" target="_blanck">{{$item->email}}</a></td>
                                    <td>
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            {{-- <label class="custom-control-label" for="customSwitch3">{{awtTrans('حظر')}}</label> --}}
                                            <input type="checkbox" onchange="changeUserStatus('{{$item->id}}')" {{ $item->blocked ? '' : 'checked' }} class="custom-control-input" id="customSwitch{{$item->id}}">
                                            <label class="custom-control-label" id="status_label{{$item->id}}" for="customSwitch{{$item->id}}">{{ $item->blocked ? awtTrans('حظر') : awtTrans('مفعل')}}</label>
                                        </div>
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                            <a href="#" class="btn btn-sm btn-primary" title="{{awtTrans('عرض')}}" onclick="showUser({{ $item }})"  data-toggle="modal" data-target="#user-profile">
                                                <i class="fas fa-user"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-warning" title="{{awtTrans('إرسال إشعار')}}" onclick="sendNotify('one' , '{{ $item->id }}')" data-toggle="modal" data-target="#send-noti">
                                                <i class="fas fa-paper-plane"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}" onclick="editUser({{ $item }})"  data-toggle="modal" data-target="#edit-user">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteUser('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
                    {{-- <li>
                        <i class="fa fa-home"></i>
                        <span id="show_address"></span>
                    </li> --}}
                </ul>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!--end user-profile modal-->
    <!-- send-noti modal-->
    <div class="modal fade" id="send-noti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إرسال أشعار')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('sendnotifyuser')}}" method="POST">
                @csrf
                <input type="hidden" name="type" id="notify_type">
                <input type="hidden" name="id" id="notify_id">
                <div class="form-group">
                    <label for="">
                    {{awtTrans('الرسالة')}}
                    </label>
                    <textarea name="message" id="" cols="30" rows="4" class="form-control"
                    placeholder="{{awtTrans('اكتب رسالتك ...')}}"></textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-success" data-dismiss="modal">{{awtTrans('إرسال')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end send-noti modal-->
    <!-- add-user modal-->
    <div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إضافة عضو')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('adduser')}}" id="addUserForm" method="POST" enctype="multipart/form-data">
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
                    <label>{{awtTrans('الأسم الاول')}}</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الأسم الاخير')}}</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('البريد الإلكتروني')}}</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('كود الدولة')}}</label>
                    <select name="phone_code" id="" class="form-control">
                        @foreach (get_countries('code') as $item)
                            <option value="{{$item->code}}">{{$item->code}} - {{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الجوال')}}</label>
                    <input type="number" name="phone" class="form-control">
                </div>
                {{-- <div class="form-group">
                    <label>{{awtTrans('العنوان')}}</label>
                    <input type="text" name="address" class="form-control">
                </div> --}}
                <div class="form-group">
                    <label>{{awtTrans('كلمة المرور')}}</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="addUser()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end add-user modal-->
    <!-- edit-user modal-->
    <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تعديل عضو')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('updateuser')}}" id="updateUserForm" method="POST" enctype="multipart/form-data">
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
                    <label>{{awtTrans('الأسم الاول')}}</label>
                    <input type="text" name="first_name" id="edit_first_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الأسم الاخير')}}</label>
                    <input type="text" name="last_name" id="edit_last_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('البريد الإلكتروني')}}</label>
                    <input type="email" name="email" id="edit_email" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('كود الدولة')}}</label>
                    <select name="phone_code" id="edit_phone_code" class="form-control">
                        @foreach (get_countries('code') as $item)
                            <option value="{{$item->code}}">{{$item->code}} - {{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الجوال')}}</label>
                    <input type="number" name="phone" id="edit_phone" class="form-control">
                </div>
                {{-- <div class="form-group">
                    <label>{{awtTrans('العنوان')}}</label>
                    <input type="text" name="address" id="edit_address" class="form-control">
                </div> --}}
                {{-- <div class="form-group">
                    <label>{{awtTrans('كلمة المرور')}}</label>
                    <input type="password" name="password" id="edit_password" class="form-control">
                </div> --}}
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="updateUser()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end edit-user modal-->
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
            <form action="{{route('deleteuser')}}" method="post" class="d-flex align-items-center">
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
            <form action="{{route('deleteusers')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="user_ids" id="delete_ids">
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

        function changeUserStatus(id) {
            var tokenv  = "{{csrf_token()}}";
            $.ajax({
                type     : 'POST',
                url      : '{{ route('changestatususer') }}' ,
                datatype : 'json' ,
                data     : {
                    'id'         :  id ,
                    '_token'     :  tokenv
                }, success   : function(msg){
                    //success here
                    if(msg == 0)
                        return false;
                    else
                        $('#status_label'+id).html(msg);
                }
            });
        }

        function sendNotify(type , id) {
            $('#notify_type').val(type);
            $('#notify_id').val(id);
        }

        function addUser() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('adduser') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addUserForm")[0]),
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

        function showUser(user){
            $('#show_name').html(user.first_name);
            $('#show_phone').html(user.phone);
            $('#show_phone').removeAttr('href');
            $('#show_phone').attr('href' , "tel:" + user.phone);
            $('#show_email').html(user.email);
            $('#show_email').removeAttr('href');
            $('#show_email').attr('href' , "mailto:" + user.email);
            // $('#show_address').html(user.address);
            $('#show_avatar').removeAttr('src');
            $('#show_avatar').attr('src' , "{{url('')}}"+user.avatar);
            $('#show_avatar_fancy').removeAttr('data-caption');
            $('#show_avatar_fancy').attr('data-caption' , user.name);
            $('#show_avatar_fancy').removeAttr('href');
            $('#show_avatar_fancy').attr('href' , "{{url('')}}"+user.avatar);
        }

        function editUser(user){
            $('#edit_id').val(user.id);
            $('#edit_first_name').val(user.first_name);
            $('#edit_last_name').val(user.last_name);
            $('#edit_phone_code').val(user.phone_code);
            $('#edit_phone').val(user.phone);
            $('#edit_email').val(user.email);
            // $('#edit_address').val(user.address);
            // $('#edit_password').val('');
            $('#edit_avatar').removeAttr('src');
            $('#edit_avatar').attr('src' , "{{url('')}}"+user.avatar);
        }

        function updateUser() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updateuser') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updateUserForm")[0]),
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

        function deleteUser(id){
          $('#delete_id').val(id);
        }

        function deleteAllUser(type){
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
            let usersIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				usersIds += id + ' ';
			});
			let requestData = usersIds.split(' ');
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
