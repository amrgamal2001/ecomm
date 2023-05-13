@extends('dashboard.master')
@section('title') {{awtTrans('الطلبات')}} @endsection
@section('style')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline item -->
              <div>
                <i class="fas fa-info bg-blue"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header">{{awtTrans('تفاصيل الطلب')}}</h3>

                  <div class="timeline-body">
                    <div class="bill-info">
                      <ul>
                        <li class="text-bold">
                            <span>{{awtTrans('رقم الطلب')}}</span>
                            <span>:</span>
                            <span>{{$order->id}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('طريقة الدفع')}}</span>
                            <span>:</span>
                            <span>@if($order->payment_method == 'transfer') تحويل بنكي @elseif($order->payment_method == 'online') اون لاين @else كاش @endif</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('حالة الطلب')}}</span>
                            <span>:</span>
                            <span>{{order_status($order->status)}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('أسم المستلم')}}</span>
                            <span>:</span>
                            <span>{{$order->first_name}} {{$order->last_name}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('جوال المستلم')}}</span>
                            <span>:</span>
                            <span>{{$order->phone}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('إيميل المستلم')}}</span>
                            <span>:</span>
                            <span>{{$order->email}}</span>
                        </li>
                        {{-- <li class="text-bold">
                            <span>{{awtTrans('العنوان على الخريطة')}}</span>
                            <span>:</span>
                            <span>
                                <a href="http://maps.google.co.uk/maps?q={{$order->lat}},{{$order->lng}}" target="_blank">
                                    {{awtTrans('عرض العنوان')}}
                                </a>
                            </span>
                        </li> --}}
                        <li class="text-bold">
                            <span>{{awtTrans('الدولة')}}</span>
                            <span>:</span>
                            <span>{{$order->country->title}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('المدينة')}}</span>
                            <span>:</span>
                            <span>{{$order->city}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('العنوان')}}</span>
                            <span>:</span>
                            <span>{{$order->first_street}} {{$order->second_street}}</span>
                        </li>

                        <li class="text-bold">
                            <span>{{awtTrans('الملاحظات')}}</span>
                            <span>:</span>
                            <span>{{$order->notes}}</span>
                        </li>
                        <li class="text-bold">
                            <span>{{awtTrans('التاريخ')}}</span>
                            <span>:</span>
                            <span>{{date('d-m-Y' , strtotime($order->created_at))}}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-list bg-yellow"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header">{{awtTrans('المنتجات')}}</h3>
                  <div class="timeline-body">
                        @foreach ($order->items as $item)
                            <div class="order-item">
                                <div class="img">
                                    <div class="img-c">
                                        <a data-fancybox data-caption="{{!is_null($item->service) ? $item->service->title_ar : $item->service_title_ar}}"
                                            href="{{is_null($item->service) ? url('/public/none.png') : url('' . $item->service->images->first()->image)}}">
                                            <img src="{{is_null($item->service) ? url('/public/none.png') : url('' . $item->service->images->first()->image)}}" alt="...">
                                        </a>
                                        <span class="count">{{$item->count}}</span>
                                    </div>
                                    <span class="order-name">{{!is_null($order->service) ? $order->service->title_ar : $order->service_title_ar}}</span>
                                </div>
                                <div class="item-price">
                                    <span> {{!is_null($item->service) ? $item->service->title_ar : $item->service_title_ar}}</span>
                                </div>
                                <div class="item-price">
                                    <span>{{awtTrans('الحجم : ')}} {{$item->size}}</span>
                                </div>
                                <div class="item-price">
                                    <span>{{awtTrans('اللون : ')}} {{$item->color}}</span>
                                </div>
                                <div class="item-total">
                                    <span> {{$item->total}}</span>
                                </div>
                            </div>
                        @endforeach
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-wallet bg-purple"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header">{{awtTrans('تفاصيل الفاتورة')}}</h3>
                  <div class="timeline-body">
                    <div class="bill-total">
                        <p>
                            <span>{{awtTrans('اجمالي المنتجات')}}</span>
                            <span>{{$order->sub_total}}</span>
                        </p>
                        <p>
                            <span>{{awtTrans('قيمة الخصم')}}</span>
                            <span>{{$order->discount}}</span>
                        </p>
                        <p>
                            <span>{{awtTrans('سعر التوصيل')}}</span>
                            <span>{{$order->delivery}}</span>
                        </p>
                        <p>
                            <span>{{awtTrans('اجمالي الفاتورة')}}</span>
                            <span>{{$order->total}}</span>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
@endsection

@section('modal')
    <!-- confirm-del modal-->
    <div class="modal fade" id="notes-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{awtTrans('ملاحظات')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center" id="notes">

            </h3>
          </div>
        </div>
      </div>
    </div>
    <!--end confirm-del modal-->
@endsection

@section('script')
    <script>
        function showNotes(notes) {
            if(notes == '') notes = 'لا يوجد ملاحظات';
            $('#notes').html(notes);
        }
    </script>
@endsection
