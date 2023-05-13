@extends('dashboard.master')
@section('title') {{awtTrans('الصلاحيات')}} @endsection
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
                        <button class="btn bg-teal" title="{{awtTrans('اضافة')}}" onclick="addRole()">
                            <i class="fas fa-plus"></i>
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
                                <th>#</th>
                                <th>{{awtTrans('الصلاحية')}}</th>
                                <th>{{awtTrans('وقت التسجيل')}}</th>
                                <th>{{awtTrans('التحكم')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i=>$item)
                                <tr style="text-align: center">
                                    <td>{{ ++$i }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="btn-action">
                                            <a href="{{url('edit-page-permission/' . $item->id)}}" class="btn btn-sm bg-teal" title="{{awtTrans('تعديل')}}">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deletePermission('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
            <form action="{{route('deletepermission')}}" method="post" class="d-flex align-items-center">
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
@endsection

@section('script')
    <script>

        function addRole(){
            document.location.assign("{{url('add-page-permission')}}");
        }

        function deletePermission(id){
          $('#delete_id').val(id);
        }

        function deleteAllPermission(type){
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
            let permissionsIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				permissionsIds += id + ' ';
			});
			let requestData = permissionsIds.split(' ');
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
