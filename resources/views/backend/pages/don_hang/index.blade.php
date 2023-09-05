@extends('backend.layouts.master')
@section('title', 'Đơn hàng')
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.3/apexcharts.min.js"></script>
@section('content')
    <div class="container">
        <div class="todo_list">
            <div class="title">Báo cáo thống kê đơn hàng</div>
            <div class="card-body">
                <h3 class="text-center mt-3 mb-3">Tổng số doanh thu</h3>
                <!-- Line Chart -->
                <div id="revenueChart"></div>
                <!-- End Line Chart -->
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Chủ SPA</th>
                <th scope="col">Người đặt đơn</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @if(!$listOrder->isEmpty())
                @foreach($listOrder as $list)
                    @php
                        $item = \App\Models\Product::find($list->ma_don_hang);
                        $user = \App\Models\User::find($list->id_nguoi_dat);
                        $spa = \App\Models\User::find($list->id_chu_spa);
                    @endphp
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{$list->ma_don_hang}}</td>
                        <td>{{$spa->name}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->number_phone}}</td>
                        <td>{{$list->status}}</td>
                        <td>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{route('backend.don-hang.detail', $list->id)}}" class="btn btn-warning">Chi tiết</a>
                                <div class="">
                                    <form method="post" action="{{route('backend.don-hang.delete', $list->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
@endsection

