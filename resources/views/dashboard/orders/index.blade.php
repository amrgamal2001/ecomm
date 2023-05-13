@extends('dashboard.master')
@section('title') {{awtTrans('الطلبات')}} @endsection
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
                        <a href="{{route('orders' , 'new')}}" class="btn waves-effect btn-lg waves-light" style="width: 220px;margin: 2px;color:white;background: #daa21c !important">{{awtTrans('الطلبات الجديدة')}}</a>
                        <a href="{{route('orders' , 'current')}}" class="btn waves-effect btn-lg waves-light" style="width: 220px;margin: 2px;color:white;background: #35b8e0 !important">{{awtTrans('الطلبات الحالية')}}</a>
                        <a href="{{route('orders' , 'refused')}}" class="btn waves-effect btn-lg waves-light" style="width: 220px;margin: 2px;color:white;background: #ed683d !important">{{awtTrans('الطلبات الملغية')}}</a>
                        <a href="{{route('orders' , 'finish')}}" class="btn waves-effect btn-lg waves-light" style="width: 220px;margin: 2px;color:white;background: #10c469 !important">{{awtTrans('الطلبات المنتهية')}}</a>
                    </div>
                </div>
                {{-- <div class="col-12">
                    <h3>
                        @if($status == 'pre-new') {{awtTrans('الطلبات الجديدة')}} @endif
                        @if($status == 'new') {{awtTrans('الطلبات الحالية')}} @endif
                        @if($status == 'in_way') {{awtTrans('الطلبات في الطريق')}} @endif
                        @if($status == 'refused') {{awtTrans('الطلبات الملغية')}} @endif
                        @if($status == 'pending') {{awtTrans('الطلبات المعلقة')}} @endif
                    </h3>
                </div> --}}
                {{-- <div class="col-12">
                    <div class="btns header-buttons">
                        <label for="">{{awtTrans('عرض حسب :')}}</label>
                        <select name="" id="sortedBy" onchange="sortedBy()" class="form-control" style="width: 25%">
                        <option value="" {{$filter == '' ? 'selected' : ''}}>{{awtTrans('الكل')}}</option>
                        <option value="day" {{$filter == 'day' ? 'selected' : ''}}>{{awtTrans('هذا اليوم')}}</option>
                        <option value="month" {{$filter == 'month' ? 'selected' : ''}}>{{awtTrans('هذا الشهر')}}</option>
                        <option value="year" {{$filter == 'year' ? 'selected' : ''}}>{{awtTrans('هذه السنة')}}</option>
                        </select>
                    </div>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr style="text-align: center">
                                {{-- <th>
                                    <label class="custom-control material-checkbox" style="margin: auto">
                                        <input type="checkbox" class="material-control-input" id="checkedAll">
                                        <span class="material-control-indicator"></span>
                                    </label>
                                </th> --}}
                                {{-- <th>#</th> --}}
                                <th>{{awtTrans('رقم الطلب')}}</th>
                                <th>{{awtTrans('اسم المستلم')}}</th>
                                <th>{{awtTrans('جوال المستلم')}}</th>
                                <th>{{awtTrans('إيميل المستلم')}}</th>
                                <th>{{awtTrans('اجمالي الطلب')}}</th>
                                <th>{{awtTrans('طريقة الدفع')}}</th>
                                <th>{{awtTrans('وقت التسجيل')}}</th>
                                <th>{{awtTrans('التحكم')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i=>$item)
                                <tr style="text-align: center">
                                    {{-- <td>
                                        <label class="custom-control material-checkbox" style="margin: auto">
                                            <input type="checkbox" class="material-control-input checkSingle" id="{{$item->id}}">
                                            <span class="material-control-indicator"></span>
                                        </label>
                                    </td> --}}
                                    {{-- <td>{{ ++$i }}</td> --}}
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                                    <td><a href="tel:{{$item->phone}}" target="_blanck">{{$item->phone}}</a></td>
                                    <td><a href="mailto:{{$item->email}}" target="_blanck">{{$item->email}}</a></td>
                                    <td>{{$item->total}}</td>
                                    <td>@if($item->payment_method == 'transfer') تحويل بنكي @elseif($item->payment_method == 'online') اون لاين @else كاش @endif</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                        <a href="{{route('showorder' , $item->id)}}" class="btn btn-info btn-sm" title="{{awtTrans('عرض')}}">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        {{-- @if($item->status == 'new')
                                            <a href="{{route('changeorder' , $item->id)}}" class="btn btn-primary btn-sm" title="{{awtTrans('الطلب في الطريق')}}">
                                                <i class="fas fa-truck"></i>
                                            </a>
                                        @endif --}}

                                        {{-- <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteCountry('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
                                            <i class="fas fa-trash"></i>
                                        </a> --}}
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
