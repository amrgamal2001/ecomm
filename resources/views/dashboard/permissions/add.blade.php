@extends('dashboard.master')
@section('title') {{awtTrans('اضافة صلاحية')}} @endsection
@section('style')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card" style="width:100% !important;">
            <div class="card-header">
                <div class="col-12">
                    <div class="header-buttons">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" onchange="checkAll()" type="checkbox" id="all" value="all">
                            <label for="all" class="custom-control-label">{{awtTrans('تحديد الكل')}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('addpermission')}}" method="POST" id="addRoleForm">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label>{{awtTrans('اسم الصلاحية')}}</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($routes as $item)
                                @if(isset($item->getAction()['title']) && isset($item->getAction()['child']))
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card child-permission">
                                            <div class="card-header permission-header">
                                                <div class="">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input all" onchange="checkChilds('{{$item->getName()}}')" name="permissions[]" type="checkbox"
                                                               id="parent{{$item->getName()}}" value="{{$item->getName()}}">
                                                        <label for="parent{{$item->getName()}}" class="custom-control-label">{{ $item->getAction()['title'] }}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                @foreach ($item->getAction()['child'] as $child)
                                                    @foreach ($routes as $child_item)
                                                        @if(isset($child_item->getAction()['title']) && $child_item->getName() == $child)
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input all childs child{{$item->getName()}}" disabled name="permissions[]" type="checkbox" id="child{{$child_item->getName()}}" value="{{$child}}">
                                                                    <label for="child{{$child_item->getName()}}" class="custom-control-label">{{ $child_item->getAction()['title'] }}</label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <div class="col-12">
                                <button onclick="storeRole()" type="submit" class="btn btn-md btn-success save" style="width:100%;margin-bottom: 10px">{{awtTrans('حفظ')}}</button>
                            </div>
                        </div>
                    </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@section('modal')

@endsection

@section('script')
    <script>
        function checkAll(){
            if($('#all').is(":checked")){
                $('.childs').removeAttr('disabled');
                $('.all').prop('checked' , true);
            }else{
                $('.childs').attr('disabled','');
                $('.all').prop("checked", false);
            }
        }

        function checkChilds(routeName){
            if($('#parent' + routeName).is(":checked")){
                $('.child' + routeName).removeAttr('disabled');
                $('.child' + routeName).prop('checked' , true);
            }else{
                console.log('false');
                $('.child' + routeName).attr('disabled','');
                $('.child' + routeName).prop("checked", false);
            }
        }

        function storeRole() {
            event.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : '{{ route('addpermission') }}' ,
                datatype    : 'json' ,
                async       : false,
                processData : false,
                contentType : false,
                data        : new FormData($("#addRoleForm")[0]),
                success     : function(msg){
                    if(msg.value == '0'){
                        $('.save').notify(
                            msg.msg, {
                                position: "top"
                            }
                        );
                    }else{
                        window.location.assign("{{route('permissions')}}");
                    }
                }
            });
        }
    </script>
@endsection
