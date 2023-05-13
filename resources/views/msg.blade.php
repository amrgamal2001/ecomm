<style>
    .errorDiv{
        color: white;
        background-color: #d94552;
        font-size: 15px;
        font-weight: bold;
        border-color: #df3648;
        display: block;
        margin-top: 15px;
        text-align: -webkit-auto;
        width: 750px;
        margin-left: 20%;
    }
</style>
@if ($errors->any())
    <div class="alert alert-danger errorDiv">
        <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="margin-right: 15px">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- alert data -->
@if(Session::has('success'))
    <!-- success alert -->
    <input type="hidden" id="alertType" value="1">
    <input type="hidden" id="alertTheme" value="success">
    <input type="hidden" id="alertMessage" value="{{Session::get('success')}}">
    @php
        Session::forget('success');
    @endphp
@elseif(Session::has('danger'))
    <!-- danger alert -->
    <input type="hidden" id="alertType" value="2">
    <input type="hidden" id="alertTheme" value="error">
    <input type="hidden" id="alertMessage" value="{{Session::get('danger')}}">
    @php
        Session::forget('danger');
    @endphp
@else
    <!-- no alert -->
    <input type="hidden" id="alertType" value="0">
@endif
