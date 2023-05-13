@extends('dashboard.master')
@section('title') {{awtTrans('اكواد الخصم')}} @endsection
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
                        <button class="btn bg-teal" title="{{awtTrans('اضافة')}}" data-toggle="modal" data-target="#add-promo_code">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllPromo_code('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllPromo_code('all')" data-toggle="modal" data-target="#confirm-all-del">
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
                                <th>{{awtTrans('كود الخصم')}}</th>
                                <th>{{awtTrans('نسبة الخصم')}}</th>
                                <th>{{awtTrans('صلاحية الكود')}}</th>
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
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->discount}} %</td>
                                    <td>
                                        @if($item->type == 'all') بدون حدود @elseif($item->type == 'one_use') مرة واحدة فقط @else مرة واحدة لكل عضو @endif
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                        <a href="#" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}" onclick="editPromo_code({{ $item }})"  data-toggle="modal" data-target="#edit-promo_code">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deletePromo_code('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
    <!-- add-promo_code modal-->
    <div class="modal fade" id="add-promo_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إضافة كود')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('addpromo_code')}}" id="addPromo_codeForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{awtTrans('عنوان الكود')}}</label>
                    <input type="text" name="code" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('نسبة الخصم')}}</label>
                    <div class="input-group">
                        <input type="number" min="0" name="discount" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-percent"></i></span>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>{{awtTrans('صلاحية الكود')}}</label>
                    <select name="type" class="form-control">
                        <option value="all">بدون حدود</option>
                        <option value="one_use">مرة واحدة فقط</option>
                        <option value="more_use">مرة واحدة لكل عضو</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="addPromo_code()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end add-promo_code modal-->
    <!-- edit-promo_code modal-->
    <div class="modal fade" id="edit-promo_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تعديل كود')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('updatepromo_code')}}" id="updatePromo_codeForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="edit_id">
                <div class="form-group">
                    <label>{{awtTrans('عنوان الكود')}}</label>
                    <input type="text" name="code" id="edit_code" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('نسبة الخصم')}}</label>
                    <div class="input-group">
                        <input type="number" min="0" name="discount" id="edit_discount" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-percent"></i></span>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>{{awtTrans('صلاحية الكود')}}</label>
                    <select name="type" id="edit_type" class="form-control">
                        <option value="all">بدون حدود</option>
                        <option value="one_use">مرة واحدة فقط</option>
                        <option value="more_use">مرة واحدة لكل عضو</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="updatePromo_code()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end edit-promo_code modal-->
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
            <form action="{{route('deletepromo_code')}}" method="post" class="d-flex align-items-center">
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
            <form action="{{route('deletepromo_codes')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="country_ids" id="delete_ids">
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

        function addPromo_code() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('addpromo_code') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addPromo_codeForm")[0]),
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

        function editPromo_code(promo_code){
            $('#edit_id').val(promo_code.id);
            $('#edit_code').val(promo_code.code);
            $('#edit_discount').val(promo_code.discount);
            $('#edit_type').val(promo_code.type);
        }

        function updatePromo_code() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updatepromo_code') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updatePromo_codeForm")[0]),
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

        function deletePromo_code(id){
          $('#delete_id').val(id);
        }

        function deleteAllPromo_code(type){
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
            let promo_codesIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				promo_codesIds += id + ' ';
			});
			let requestData = promo_codesIds.split(' ');
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
