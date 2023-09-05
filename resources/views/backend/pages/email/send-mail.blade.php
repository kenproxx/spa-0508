@extends('backend.layouts.master')
@section('title', 'Goi dich vu')

@section('content')
    <form method="post" action="{{route('backend.admin.log.mail.create')}}">
        @csrf
        <div class="form-group ">
            <label for="mail_to">Email người nhận</label>
            <select name="mail_to" class="form-control" id="mail_to">
                @foreach($users as $user)
                    <option value="{{$user->email}}">{{$user->email}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Xin chào...">
        </div>
        <div class="form-group">
            <label for="message">Nội dung</label>
            <textarea class="form-control" name="message" rows="3" id="message"
                      placeholder="Xin chào mọi người.."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi ngay</button>
    </form>
@endsection
