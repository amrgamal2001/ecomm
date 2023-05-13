@extends('dashboard.master')
@section('title') {{awtTrans('الأعضاء')}} @endsection
@section('style')
    <style>
        .main-input {
        height: 100%;
        line-height: 40px;
        border: 1px solid #C6C6C6;
        padding: 0 15px;
        position: relative;
        overflow: hidden;
        height: 40px;
        }

        .main-input .file-input {
        position: absolute;
        opacity: 0;
        width: 100%;
        right: 0;
        height: 100%;
        }

        .main-input i {
        position: absolute;
        width: 40px;
        text-align: center;
        height: 40px;
        line-height: 40px;
        z-index: 3;
        right: 0;
        left: auto;
        font-size: 20px;
        }

        .file-name {
        font-size: 14px;
        color: #928d8d;
        white-space: nowrap;
        }

        .main-input .uploaded-image {
        position: absolute;
        top: 50%;
        height: auto;
        right: 0;
        z-index: 9;
        transform: translate(0, -50%);
        cursor: pointer;
        transition: all .3s;
        }

        .main-input .uploaded-image img {
        max-height: 40px;
        min-width: 40px;
        display: block;
        border-radius: 8px;
        transition: all .3s;
        height: 100%;
        }

        .main-input .uploaded-image.active img {
        max-height: 240px;
        min-width: auto;
        max-width: calc(100vw - 20px);
        margin: auto;
        height: auto;
        }

        .main-input .uploaded-image.active {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999999;
        width: auto;
        height: auto;
        box-shadow: none;
        }

        .btns {
        padding: 15px 0;
        }

        #confirm-del form {
        justify-content: center;
        }
        .card-footer a i{
        margin:  0 5px;
        }
        #confirm-del form button ,
        #add-user form button,
        #edit-user form button {
        margin: 5px;
        }

        .modal .modal-header .close {
        margin: 0;
        padding: 0;
        color: #fff
        }

        .modal .modal-header {
        align-items: center;
        padding: 10px;
        background-color: #343a40;
        color: #fff
        }

        .search-div form .form-in:not(:last-child),
        .search-div form .form-in:not(:last-child)+span {
        margin-right: 10px;
        }

        .select2-container .select2-selection--single {
        height: calc(2.25rem + 2px);
        }

        .bootstrap-switch {
        position: absolute;
        right: 16px;
        top: 6px;
        z-index: 99;
        }

        .mark-user .custom-control-label::before,
        .mark-user .custom-control-label::after {
        top: 8px;
        left: 0;
        width: 20px;
        height: 20px;
        }

    </style>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="search-div card  card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">{{awtTrans('البحث عن الأعضاء')}}</h3>
            </div>
            <div class="card-body">
                <form action="" class="d-flex">
                    <select class="select2 form-in" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                    </select>
                    <input class="form-control form-in" type="text" placeholder="Default input">
                    <select class="select2 form-in" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                    </select>
                    <select class="select2 form-in" multiple="multiple" data-placeholder="Select a State"
                    style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                    </select>
                </form>
            </div>
        </div>
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch showAll">
                    <div class="col-12">
                        <div class="btns">
                            <button class="btn bg-teal" data-toggle="modal" data-target="#add-user">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button class="btn bg-warning" data-toggle="modal" data-target="#send-noti">
                                <i class="fas fa-paper-plane"></i>
                                send notify to all
                            </button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#confirm-del">
                                <i class="fas fa-trash"></i>
                                Delete Marked
                            </button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#confirm-del">
                                <i class="fas fa-trash"></i>
                                Delete All
                            </button>
                        </div>
                    </div>
                    @foreach (get_users_by('client' , 'asc') as $item)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="custom-control custom-checkbox mark-user">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="user_ids[]" value="{{$item->id}}">
                                    <label for="customCheckbox1" class="custom-control-label"></label>
                                </div>
                                <input type="checkbox" name="my-checkbox" {{$item->blocked ? '' : 'checked'}} data-bootstrap-switch data-on-text="{{awtTrans('نشط')}}"
                                    data-off-text="{{awtTrans('حظر')}}" data-off-color="danger" data-on-color="success">
                                <div class="card-header text-muted border-bottom-0">

                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                        <h2 class="lead"><b>{{ $item->name }}</b></h2>
                                        <p class="text-muted text-sm"><b>{{awtTrans('البريد الألكتروني')}} : </b> {{ $item->email }}
                                        </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> {{awtTrans('العنوان')}} :
                                            {{ $item->address }}</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> {{awtTrans('الجوال')}} : {{ $item->phone }}</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> {{awtTrans('تاريخ التسجيل')}} :
                                            {{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</li>
                                        </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                        <img src="{{ url(''.$item->avatar) }}" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning " data-toggle="modal" data-target="#send-noti">
                                        <i class="fas fa-paper-plane"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm bg-teal"  data-toggle="modal" data-target="#edit-user">
                                        <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger"  data-toggle="modal" data-target="#confirm-del">
                                        <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@section('modal')
    <!-- send-noti modal-->
    <div class="modal fade" id="send-noti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Notify</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="">
                  Message
                </label>
                <textarea name="" id="" cols="30" rows="4" class="form-control"
                  placeholder="write your message ..."></textarea>
              </div>
              <button type="submit" class="btn btn-sm btn-warning" data-dismiss="modal">Send</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('adduser')}}" id="addUserForm" method="POST">
                @csrf
                <div class="form-group">
                    <label>{{awtTrans('الصورة الشخصية')}}</label>
                    <div class="main-input">
                    <input class="file-input" type="file" name="avatar" accept="image/*" name="avatar"/>
                    <i class="fas fa-camera gray"></i>
                    <span class="file-name text-right gray">
                        {{awtTrans('الصورة الشخصية')}}
                    </span>
                    <div class="uploaded-image"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{awtTrans('الأسم')}}</label>
                    <input type="text" name="name" class="form-control">
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
                    <label>{{awtTrans('العنوان')}}</label>
                    <input type="text" name="address" class="form-control">
                </div>
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
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label>User photo</label>
                <div class="main-input">
                  <input class="file-input" type="file" accept="image/*" name="avatar" />
                  <i class="fas fa-camera gray"></i>
                  <span class="file-name text-right gray">
                    User photo
                  </span>
                  <div class="uploaded-image">
                    <img src="../../dist/img/user1-128x128.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>User name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>User Email</label>
                <input type="email" class="form-control">
              </div>
              <div class="form-group">
                <label>User phone</label>
                <input type="number" class="form-control">
              </div>
              <div class="form-group">
                <label>User address</label>
                <input type="text" class="form-control">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-sm btn-success" data-dismiss="modal">save</button>
                <button class="btn btn-sm btn-danger" data-dismiss="modal">Cencel</button>
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
            <h5 class="modal-title" id="exampleModalLabel">confirm Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center">
              Are you sure ?
            </h3>
            <form action="" class="d-flex align-items-center">
              <button type="submit" class="btn btn-sm btn-success" data-dismiss="modal">Confirm</button>
              <button class="btn btn-sm btn-danger" data-dismiss="modal">Cencel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end confirm-del modal-->
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
                }
            });
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

    </script>
@endsection
