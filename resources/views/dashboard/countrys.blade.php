@extends('dashboard.master')
@section('title') {{awtTrans('الدول')}} @endsection
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
                        <button class="btn bg-teal" title="{{awtTrans('اضافة')}}" data-toggle="modal" data-target="#add-country">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllCountry('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllCountry('all')" data-toggle="modal" data-target="#confirm-all-del">
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
                                <th>{{awtTrans('العنوان')}}</th>
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
                                    <td>{{$item->title_ar}}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                        <a href="#" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}" onclick="editCountry({{ $item }})"  data-toggle="modal" data-target="#edit-country">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteCountry('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
    <!-- add-country modal-->
    <div class="modal fade" id="add-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('إضافة دولة')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('addcountry')}}" id="addCountryForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالعربية')}}</label>
                    <input type="text" name="title_ar" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالإنجليزية')}}</label>
                    <input type="text" name="title_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('كود الدولة')}}</label>
                    <input type="tel" name="code" class="form-control phone">
                </div>
                {{-- <div class="form-group">
                    <label>{{awtTrans('رمز العملة')}}</label>
                    <input type="text" name="currency" class="form-control">
                </div> --}}
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="addCountry()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end add-country modal-->
    <!-- edit-country modal-->
    <div class="modal fade" id="edit-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('تعديل دولة')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('updatecountry')}}" id="updateCountryForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="edit_id">
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالعربية')}}</label>
                    <input type="text" name="title_ar" id="edit_title_ar" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('العنوان بالإنجليزية')}}</label>
                    <input type="text" name="title_en" id="edit_title_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{awtTrans('كود الدولة')}}</label>
                    <input type="tel" name="code" id="edit_code" class="form-control phone">
                </div>
                {{-- <div class="form-group">
                    <label>{{awtTrans('رمز العملة')}}</label>
                    <input type="text" name="currency" id="edit_currency" class="form-control">
                </div> --}}
                <div class="d-flex justify-content-center">
                    <button type="submit" onclick="updateCountry()" class="btn btn-sm btn-success save">{{awtTrans('حفظ')}}</button>
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">{{awtTrans('إغلاق')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end edit-country modal-->
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
            <form action="{{route('deletecountry')}}" method="post" class="d-flex align-items-center">
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
            <form action="{{route('deletecountrys')}}" method="post" class="d-flex align-items-center">
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

        function addCountry() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('addcountry') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addCountryForm")[0]),
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

        function editCountry(country){
            $('#edit_id').val(country.id);
            $('#edit_title_ar').val(country.title_ar);
            $('#edit_title_en').val(country.title_en);
            $('#edit_code').val(country.code);
            $('#edit_currency').val(country.currency);
        }

        function updateCountry() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('updatecountry') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#updateCountryForm")[0]),
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

        function deleteCountry(id){
          $('#delete_id').val(id);
        }

        function deleteAllCountry(type){
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
            let countrysIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				countrysIds += id + ' ';
			});
			let requestData = countrysIds.split(' ');
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
