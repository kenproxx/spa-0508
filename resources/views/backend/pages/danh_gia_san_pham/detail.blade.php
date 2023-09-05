@extends('backend.layouts.master')
@section('title', 'Danh gia san pham')

@section('content')
    <div class="container">
        <form method="post" action="{{route('backend.danh-gia-san-pham.update', $feedback->id)}}">
            @csrf
            <div class="form-row row">
                <div class="form-group col-md-4">
                    <label for="name">Người đánh giá</label>
                    @php
                        $user = \App\Models\User::find($feedback->user_id)
                    @endphp
                    @if($user)
                        <input disabled type="text" class="form-control" placeholder="name"
                               value="{{$user->name}}">
                    @else
                        <input disabled type="text" class="form-control" placeholder="name">
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="time">Họ Tên</label>
                    <input disabled type="text" value="{{$feedback->fullName}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="time">Email</label>
                    <input disabled type="email" value="{{$feedback->email}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="content">Nội dung đánh giá</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{$feedback->content}}</textarea>
            </div>

            <div class="form-row row">
                <div class="form-group col-md-3">
                    <label for="price">Sản phẩm</label>
                    @php
                        $product = \App\Models\Product::find($feedback->product_id)
                    @endphp
                    <input disabled type="text" class="form-control" value="{{$product->name}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="star_number">Mức độ</label>
                    <input id="star_number" name="star_number" type="number" class="form-control"
                           value="{{$feedback->star_number}}" max="5" min="1">
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Trạng thái</label>
                    <select id="status" name="status" class="form-control">
                        @foreach($statusList as $status)
                            @php
                                $isChecked = false;
                                if ($status == $feedback->status){
                                    $isChecked = true;
                                }
                            @endphp
                            <option {{ $isChecked ? 'selected' : '' }} value="{{$status}}">{{$status}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>

    <form action="{{route('backend.danh-gia-san-pham.delete', $feedback->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xoá</button>
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
