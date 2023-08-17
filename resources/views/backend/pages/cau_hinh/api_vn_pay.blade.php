@extends('backend.layouts.master')
@section('title', 'Cấu hình VN PAY')
@section('content')

    @include('backend.widgets.thong-bao')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <form action="{{ route('backend.cau-hinh.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_Version">vnp_Version</label>
                        <input type="text" class="form-control" id="vnp_Version" name="vnp_Version"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_Command">vnp_Command</label>
                        <input type="text" class="form-control" id="vnp_Command" name="vnp_Command"/>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_TmnCode">vnp_TmnCode</label>
                        <input type="text" class="form-control" id="vnp_TmnCode" name="vnp_TmnCode"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_Amount">vnp_Amount</label>
                        <input type="text" class="form-control" id="vnp_Amount" name="vnp_Amount"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_BankCode">vnp_BankCode</label>
                        <input type="text" class="form-control" id="vnp_BankCode" name="vnp_BankCode"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_CreateDate">vnp_CreateDate</label>
                        <input type="text" class="form-control" id="vnp_CreateDate" name="vnp_CreateDate"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_CurrCode">vnp_CurrCode</label>
                        <input type="text" class="form-control" id="vnp_CurrCode" name="vnp_CurrCode"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_IpAddr">vnp_IpAddr</label>
                        <input type="text" class="form-control" id="vnp_IpAddr" name="vnp_IpAddr"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_Locale">vnp_Locale</label>
                        <input type="text" class="form-control" id="vnp_Locale" name="vnp_Locale"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_OrderInfo">vnp_OrderInfo</label>
                        <input type="text" class="form-control" id="vnp_OrderInfo" name="vnp_OrderInfo"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_OrderType">vnp_OrderType</label>
                        <input type="text" class="form-control" id=vnp_OrderType" name="vnp_OrderType"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_ReturnUrl">vnp_ReturnUrl</label>
                        <input type="text" class="form-control" id="vnp_ReturnUrl" name="vnp_ReturnUrl"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vnp_TxnRef">vnp_TxnRef</label>
                        <input type="text" class="form-control" id="vnp_TxnRef" name="vnp_TxnRef"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vnp_SecureHash">vnp_SecureHash</label>
                        <input type="text" class="form-control" id="vnp_SecureHash" name="vnp_SecureHash"/>
                    </div>
                </div>

                 <input type="hidden" name="type" value="{{ \App\Enum\ConfigType::API_VNPAY }}">
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>
@endsection

