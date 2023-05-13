<div class="col-12">
    <div class="form-group">
        <label for="">العنوان</label>
        <select name="address_id" id="address_id" onchange="fillAddressData()" class="form-control">
            @foreach (Auth::user()->addresses as $item)
                <option value="{{$item->id}}" {{$address->id == $item->id ? 'selected' : ''}}>{{$item->first_street}} , {{$item->city}} , {{isset($item->country) ? $item->country->title : ''}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <label for="">الاسم الاول</label>
        <input type="text" name="first_name" value="{{$address->first_name}}" id="address_first_name" class="form-control" disabled="">
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <label for="">الاسم الاخير</label>
        <input type="text" name="last_name" value="{{$address->last_name}}" id="address_last_name" class="form-control" disabled="">
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">الدولة</label>
        <select name="country_id" id="address_country_id" class="form-control" disabled="">
            <option value=""></option>
            @foreach (App\Models\Country::orderBy('title_ar')->get() as $item)
                <option value="{{$item->id}}" {{$address->country_id == $item->id ? 'selected' : ''}}>{{$item->title}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">المدينة</label>
        <input type="text" name="city" value="{{$address->city}}" id="address_city" class="form-control" disabled="">
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">العنوان</label>
        <input type="text" name="first_street" value="{{$address->first_street}}" id="address_first_street" class="form-control m-b-15"
               placeholder="" disabled="">
        <input type="text" name="second_street" value="{{$address->second_street}}" id="address_second_street" class="form-control" disabled=""
               placeholder="">
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">الجوال</label>
        <input type="tel" name="phone" value="{{$address->phone}}" id="address_phone" class="form-control phone" disabled="">
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">البريد الالكتروني</label>
        <input type="email" name="email" value="{{$address->email}}" id="address_email" class="form-control" disabled="">
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">ملاحظات</label>
        <input type="text" name="notes" value="{{$address->notes}}" id="address_notes" class="form-control" disabled="">
    </div>
</div>
