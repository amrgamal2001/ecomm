@extends('dashboard.master')
@section('title') {{awtTrans('الحسابات البنكية')}} @endsection
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
                        <button class="btn bg-teal" title="{{awtTrans('اضافة')}}" data-toggle="modal" data-target="#add-bank_account">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllBank_account('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllBank_account('all')" data-toggle="modal" data-target="#confirm-all-del">
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
                                <th>{{awtTrans('صورة البنك')}}</th>
                                <th>{{awtTrans('اسم البنك')}}</th>
                                <th>{{awtTrans('اسم صاحب الحساب')}}</th>
                                <th>{{awtTrans('رقم الحساب')}}</th>
                                <th>{{awtTrans('رقم الايبان')}}</th>
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
                                        <a data-fancybox data-caption="{{$item->name}}" href="{{ url(''.$item->image) }}">
                                            <img src="{{ url(''.$item->image) }}" height="40px" width="35px" alt="" class="img-circle">
                                        </a>
                                    </td>
                                    <td>{{$item->title_ar}}</td>
                                    <td>{{$item->account_name}}</td>
                                    <td>{{$item->account_number}}</td>
                                    <td>{{$item->iban_number}}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="btn-action">
                                            <a href="#" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}" onclick="editBank_account({{ $item }})"  data-toggle="modal" data-target="#edit-bank_account">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteBank_account('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
    <!-- add-bank_account modal-->
    <div class="modal fade" id="add-bank_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إضافة حساب')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('addbank_account')}}" id="addBank_accountForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{awtTrans('صورة البنك')}}</label>
                    <div class="main-input">
                    <input class="file-input" type="file" name="photo" accept="image/*"/>
                    <i class="fas fa-camera gray"></i>
                    <span class="file-name text-right gray">

                    </span>
                    <div class="uploaded-image"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('اسم البنك بالعربية')}}</label>
                    <input type="text" name="title_ar" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('اسم البنك بالإنجليزية')}}</label>
                    <input type="text" name="title_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('اسم صاحب الحساب')}}</label>
                    <input type="text" name="account_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('رقم الحساب')}}</label>
                    <input type="tel" name="account_number" class="form-control phone">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('رقم الايبان')}}</label>
                    <input type="text" name="iban_number" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="addBank_account()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end add-bank_account modal-->
    <!-- edit-bank_account modal-->
    <div class="modal fade" id="edit-bank_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تعديل حساب')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('updatebank_account')}}" id="updateBank_accountForm" method="POST" enctype="multipart/form-data">
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
                            <img src="" id="edit_photo" alt="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('اسم البنك بالعربية')}}</label>
                    <input type="text" name="title_ar" id="edit_title_ar" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('اسم البنك بالإنجليزية')}}</label>
                    <input type="text" name="title_en" id="edit_title_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('اسم صاحب الحساب')}}</label>
                    <input type="text" name="account_name" id="edit_account_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('رقم الحساب')}}</label>
                    <input type="tel" name="account_number" id="edit_account_number" class="form-control phone">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('رقم الايبان')}}</label>
                    <input type="text" name="iban_number" id="edit_iban_number" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="updateBank_account()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end edit-bank_account modal-->
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
            <form action="{{route('deletebank_account')}}" method="post" class="d-flex align-items-center">
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
            <form action="{{route('deletebank_accounts')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="bank_account_ids" id="delete_ids">
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

        function addBank_account() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('addbank_account') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addBank_accountForm")[0]),
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

        function editBank_account(bank_account){
            $('#edit_id').val(bank_account.id);
            $('#edit_title_ar').val(bank_account.title_ar);
            $('#edit_title_en').val(bank_account.title_en);
            $('#edit_account_name').val(bank_account.account_name);
            $('#edit_account_number').val(bank_account.account_number);
            $('#edit_iban_number').val(bank_account.iban_number);
            $('#edit_photo').removeAttr('src');
            $('#edit_photo').attr('src' , "{{url('')}}"+bank_account.image);
        }

        function updateBank_account() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updatebank_account') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updateBank_accountForm")[0]),
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

        function deleteBank_account(id){
          $('#delete_id').val(id);
        }

        function deleteAllBank_account(type){
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
            let bank_accountsIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				bank_accountsIds += id + ' ';
			});
			let requestData = bank_accountsIds.split(' ');
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
    </script>
@endsection
