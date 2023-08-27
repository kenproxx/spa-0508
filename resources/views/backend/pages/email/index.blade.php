@extends('backend.layouts.master')
@section('title', 'Lịch sử gửi mail')

@section('content')
    @include('backend.widgets.thong-bao')
    <a href="{{ route('backend.admin.mail.processCreate') }}">
        <button type="button" class="btn btn-primary mb-3">
            Thêm mới
        </button>
    </a>
    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </th>
                        <th scope="col">Nguời tạo</th>
                        <th scope="col">Nguời gửi</th>
                        <th scope="col">Nguời nhận</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!$mailLogs->isEmpty())
                        @foreach($mailLogs as $item)
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            @php
                                                $user = \App\Models\User::find($item->created_by);
                                            @endphp
                                            @if($user)
                                                <p class=" mb-0 fs-4">{{ $user->name }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $item->mail_from }}p</p>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $item->mail_to }}</p>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $item->created_at }}</p>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $item->title }}</p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="bg-success p-1 rounded-circle"></span>
                                        <p class="mb-0 ms-2">{{ $item->status == 1 ? 'Kích hoạt' : 'Hủy kích hoạt'}}</p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-end py-1">
                    <p class="mb-0 fs-2">Rows per page:</p>
                    <select class="form-select w-auto ms-0 ms-sm-2 me-8 me-sm-4 py-1 pe-7 ps-2 border-0" aria-label="Default select example">
                        <option selected>5</option>
                        <option value="1">10</option>
                        <option value="2">25</option>
                    </select>
                    <p class="mb-0 fs-2">1–5 of 12</p>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center mb-0 ms-8 ms-sm-9">
                            <li class="page-item p-1">
                                <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-left"></i></a>
                            </li>
                            <li class="page-item p-1">
                                <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
