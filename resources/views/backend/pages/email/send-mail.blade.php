@extends('backend.layouts.master')
@section('title', 'Goi dich vu')

@section('content')
    <form method="post" action="{{route('backend.admin.log.mail.create')}}">
        @csrf
        <div class="form-row row">
            <div class="form-group col-md-6">
                <label for="mail_from">Email Người gửi</label>
                <input type="email" class="form-control" name="mail_from" id="mail_from"
                       value="{{$emailFrom->value}}" placeholder="from@example.com">
            </div>
            <div class="form-group col-md-6">
                <label for="mail_to">Email người nhận</label>
                <select name="mail_to" class="form-control" id="mail_to">
                    @foreach($users as $user)
                        <option value="{{$user->email}}">{{$user->email}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Xin chào...">
        </div>
        <div class="form-group">
            <label for="message">Nội dung</label>
            <input type="text" name="message" class="form-control" id="message" placeholder="Xin chào mọi người..">
        </div>
        <button type="submit" class="btn btn-primary">Gửi ngay</button>
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
