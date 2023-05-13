@extends('dashboard.master')
@section('title') {{awtTrans('تواصل معنا')}} @endsection
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
                        <button class="btn btn-danger" onclick="deleteAllContact('more')" data-toggle="modal" data-target="#confirm-all-del">
                            <i class="fas fa-trash"></i>
                            {{awtTrans('حذف المحدد')}}
                        </button>
                        <button class="btn btn-danger" onclick="deleteAllContact('all')" data-toggle="modal" data-target="#confirm-all-del">
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
                                <th>{{awtTrans('الأسم')}}</th>
                                {{-- <th>{{awtTrans('الجوال')}}</th> --}}
                                <th>{{awtTrans('البريد الإلكتروني')}}</th>
                                {{-- <th>{{awtTrans('العنوان')}}</th> --}}
                                <th>{{awtTrans('حالة الرسالة')}}</th>
                                <th>{{awtTrans('وقت التسجيل')}}</th>
                                <th>{{awtTrans('التحكم')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i=>$item)
                                <tr id="contactTable{{$item->id}}" style="text-align: center">
                                    <td>
                                        <label class="custom-control material-checkbox" style="margin: auto">
                                            <input type="checkbox" class="material-control-input checkSingle" id="{{$item->id}}">
                                            <span class="material-control-indicator"></span>
                                        </label>
                                    </td>
                                    {{-- <td>{{ ++$i }}</td> --}}
                                    <td>{{$item->name}}</td>
                                    {{-- <td><a href="tel:{{convert_phone_to_international_format($item->phone)}}" target="_blanck">{{$item->phone}}</a></td> --}}
                                    <td><a href="mailto:{{$item->email}}" target="_blanck">{{$item->email}}</a></td>
                                    {{-- <td>{{$item->title}}</td> --}}
                                    <td>
                                        @if($item->seen == '0')
                                            <span class="badge badge-danger">{{awtTrans('غير مقروءة')}}</span>
                                        @else
                                            <span class="badge badge-success">{{awtTrans('مقروءة')}}</span>
                                        @endif
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                    <div class="btn-action">
                                            <a href="#" class="btn btn-sm btn-primary" title="{{awtTrans('عرض')}}" onclick="showContact({{ $item }})"  data-toggle="modal" data-target="#contact-profile">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger" title="{{awtTrans('حذف')}}" onclick="deleteContact('{{ $item->id }}')"  data-toggle="modal" data-target="#confirm-del">
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
    <!-- contact-profile modal-->
    <div class="modal fade show-profile" id="contact-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="img-div">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="{{url('public/mail.png')}}" alt="">
            </div>
           <div class="user-d text-center">
                <p class="name" id="show_name"></p>
                <ul>
                    {{-- <li>
                        <i class="fa fa-phone"></i>
                        <a id="show_phone" href="">

                        </a>
                    </li> --}}
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a id="show_email" href="">

                        </a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span id="show_message"></span>
                    </li>
                </ul>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!--end contact-profile modal-->
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
            <form action="{{route('deletecontact')}}" method="post" class="d-flex align-items-center">
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
            <form action="{{route('deletecontacts')}}" method="post" class="d-flex align-items-center">
                @csrf
                <input type="hidden" name="contact_ids" id="delete_ids">
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
        function showContact(contact){
            $('#show_name').html(contact.name);
            $('#show_phone').html(contact.phone);
            $('#show_phone').removeAttr('href');
            $('#show_phone').attr('href' , "tel:" + contact.phone);
            $('#show_email').html(contact.email);
            $('#show_email').removeAttr('href');
            $('#show_email').attr('href' , "mailto:" + contact.email);
            $('#show_title').html(contact.title);
            $('#show_message').html(contact.message);

            $.ajax({
                type: "POST",
                url: "{{route('contact-seen')}}",
                data: {id: contact.id, _token: '{{csrf_token()}}'},
                success: function( msg ) {}
            });
        }

        function deleteContact(id){
          $('#delete_id').val(id);
        }

        function deleteAllContact(type){
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
            let contactsIds = '';
			$('.checkSingle:checked').each(function () {
				let id = $(this).attr('id');
				contactsIds += id + ' ';
			});
			let requestData = contactsIds.split(' ');
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
