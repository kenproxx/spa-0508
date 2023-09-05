@extends('backend.layouts.master')
@section('title', 'Đơn hàng')

@section('content')
    <div class="container">
        <form method="post" action="{{route('backend.don-hang.update', $order->id)}}">
            @csrf
            @method('PUT')
            <div class="form-row row">
                <div class="form-group col-md-6">
                    <label for="ma_don_hang">Mã đơn hàng</label>
                    <input disabled type="text" class="form-control" id="ma_don_hang" name="ma_don_hang"
                           value="{{$order->ma_don_hang}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="tieu_de">Tiêu đề</label>
                    <input disabled type="text" class="form-control" id="tieu_de" name="tieu_de"
                           value="{{$order->tieu_de}}">
                </div>
            </div>
            <div class="form-row row">
                <div class="form-group col-md-6">
                    <label for="id_chu_spa">Chủ SPA</label>
                    <input disabled type="text" class="form-control" id="id_chu_spa" name="id_chu_spa"
                           value="{{$order->id_chu_spa}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="id_nguoi_dat">Người đặt</label>
                    <input disabled type="text" class="form-control" id="id_nguoi_dat" name="id_nguoi_dat"
                           value="{{$order->id_nguoi_dat}}">
                </div>
            </div>
            <div class="form-row row">
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input disabled type="text" class="form-control" id="email" name="email" value="{{$order->email}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="number_phone">Số điện thoại</label>
                    <input disabled type="text" class="form-control" id="number_phone" name="number_phone"
                           value="{{$order->number_phone}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="visa">Visa</label>
                    <input disabled type="text" class="form-control" id="visa" name="visa" value="{{$order->visa}}">
                </div>
            </div>
            <div class="form-row row">
                <div class="form-group col-md-6">
                    <label for="ngay_dat">Ngày đặt</label>
                    <input disabled type="text" class="form-control" id="ngay_dat" name="ngay_dat"
                           value="{{$order->ngay_dat}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="ngay_su_dung">Ngày sử dụng</label>
                    <input disabled type="text" class="form-control" id="ngay_su_dung" name="ngay_su_dung"
                           value="{{$order->ngay_su_dung}}">
                </div>
            </div>
            <div class="form-row row">
                <div class="form-group col-md-4">
                    <label for="kakao_id">Kakao ID</label>
                    <input disabled type="text" class="form-control" id="kakao_id" name="kakao_id"
                           value="{{$order->kakao_id}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="more_service">Dịch vụ khác</label>
                    <input disabled type="text" class="form-control" id="more_service" name="more_service"
                           value="{{$order->more_service}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="status">Trạng thái</label>
                    <select id="status" name="status" class="form-control form-select">
                        @if($order->status == \App\Enum\OrderStatus::PROCESSING)
                            <option selected value="{{\App\Enum\OrderStatus::PROCESSING}}">
                                {{\App\Enum\OrderStatus::PROCESSING}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::WAIT_PAYMENT}}">
                                {{\App\Enum\OrderStatus::WAIT_PAYMENT}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::COMPLETED}}">
                                {{\App\Enum\OrderStatus::COMPLETED}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::CANCELED}}">
                                {{\App\Enum\OrderStatus::CANCELED}}
                            </option>
                        @elseif($order->status == \App\Enum\OrderStatus::WAIT_PAYMENT)
                            <option value="{{\App\Enum\OrderStatus::PROCESSING}}">
                                {{\App\Enum\OrderStatus::PROCESSING}}
                            </option>
                            <option selected value="{{\App\Enum\OrderStatus::WAIT_PAYMENT}}">
                                {{\App\Enum\OrderStatus::WAIT_PAYMENT}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::COMPLETED}}">
                                {{\App\Enum\OrderStatus::COMPLETED}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::CANCELED}}">
                                {{\App\Enum\OrderStatus::CANCELED}}
                            </option>
                        @elseif($order->status == \App\Enum\OrderStatus::COMPLETED)
                            <option value="{{\App\Enum\OrderStatus::PROCESSING}}">
                                {{\App\Enum\OrderStatus::PROCESSING}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::WAIT_PAYMENT}}">
                                {{\App\Enum\OrderStatus::WAIT_PAYMENT}}
                            </option>
                            <option selected value="{{\App\Enum\OrderStatus::COMPLETED}}">
                                {{\App\Enum\OrderStatus::COMPLETED}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::CANCELED}}">
                                {{\App\Enum\OrderStatus::CANCELED}}
                            </option>
                        @else
                            <option value="{{\App\Enum\OrderStatus::PROCESSING}}">
                                {{\App\Enum\OrderStatus::PROCESSING}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::WAIT_PAYMENT}}">
                                {{\App\Enum\OrderStatus::WAIT_PAYMENT}}
                            </option>
                            <option value="{{\App\Enum\OrderStatus::COMPLETED}}">
                                {{\App\Enum\OrderStatus::COMPLETED}}
                            </option>
                            <option selected value="{{\App\Enum\OrderStatus::CANCELED}}">
                                {{\App\Enum\OrderStatus::CANCELED}}
                            </option>
                        @endif
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

