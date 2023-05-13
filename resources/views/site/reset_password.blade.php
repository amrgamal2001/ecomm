@extends('site.master')
@section('title') تحديث كلمة المرور @endsection
@section('style')
@endsection

@section('content')

    <div class="wrap">
        <!-- page-head -->
        <section class="page-head bg-pink">
            <div class="container">
                <div class="collection-title">
                    <h1>تحديث كلمة المرور</h1>
                </div>
            </div>
        </section>
        <!-- end page-head -->
        <!-- page-head -->
        <section class="page-cat page-contact">
            <div class="container">
                <div class="">
                    <h1 class="text-center"><img class="img-responsive" src="{{url('') . settings('logo')}}"></h1>
                    <div class="title">
                        <h3>اعادة تعيين كلمة المرور</h3>
                    </div>
                    <form action="{{route('site_post_reset_password')}}" class="form-pass" id="formLogin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="form-group">
                            <label for="">كلمة المرور الجديدة</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for=""> تأكيد كلمة المرور الجديدة</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="sign-btn d-block w-100 login" onclick="login()">
                            حفظ
                        </button>
                    </form>
                </div>
            </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        function login() {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('site_post_reset_password') }}',
                datatype: 'json',
                async: false,
                processData: false,
                contentType: false,
                data: new FormData($("#formLogin")[0]),
                success: function (msg) {
                    if (msg.value == '0') {
                        $('.login').notify(
                            msg.msg, {
                                position: "top"
                            }
                        );
                    } else {
                        window.location.assign('{{route('site_home')}}');
                    }
                }
            });
        }
    </script>
@endsection
