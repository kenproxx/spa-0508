@extends('backend.layouts.master')
@section('title', 'Sản phẩm')
@section('content')

    @include('backend.widgets.thong-bao')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <div class="table-responsive rounded-2">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th><h6 class="fs-4 fw-semibold mb-0">Tên cơ sở</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Ngành nghề</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Địa chỉ</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Trạng thái</h6></th>
                        <th></th>
                    </tr>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listDaiLy as $daiLy)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo $daiLy->avatar ? $daiLy->avatar : '../../dist/images/blog/blog-img1.jpg'?>" class="rounded-2" width="42" height="42" />
                                    <div class="ms-3">
                                        <h6 class="fw-semibold mb-1">{{ $daiLy->ten_co_so }}</h6>
                                        <span class="fw-normal">{{ $daiLy->ten_quan_ly }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-light-danger text-danger rounded-3 fw-semibold fs-2">{{ $daiLy->nganh_nghe }}</span>
                                </div>
                            </td>
                            <td><p class="mb-0 fw-normal">{{ $daiLy->address }}</p></td>
                            <td>{{ $daiLy->status }}</td>
                            <td>
                                <div class="dropdown dropstart">
                                    <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots fs-5"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li data-bs-toggle="modal" data-bs-target="#modal-dai-ly" onclick="getInfoSpa({{ $daiLy->id }})">
                                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Sửa</a>
                                        </li>
                                        <li onclick="lockSpa({{ $daiLy->id }})">
                                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Xóa</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-dai-ly" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Chỉnh sửa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form" action="" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="note-title">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" name="name" id="name" required
                                   placeholder="Nhập Họ và tên"/>
                        </div>
                        <div class="note-title">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" required
                                   placeholder="Nhập Email"/>
                        </div>
                        <div class="note-title">
                            <label id="labelPassword">Mật khẩu</label>
                            <input id="password" type="password" class="form-control" minlength="8" name="password" required>
                            <span class="fa fa-fw fa-eye field-icon toggle-password" id="eyeIcon" onclick="showPassword()"></span>
                        </div>
                        <div class="note-title">
                            <label>Số điện thoại</label>
                            <input type="tel" class="form-control" name="number_phone" id="number_phone"
                                   placeholder="Nhập Số điện thoại" required pattern="^(0\d{9,10})$"/>
                        </div>
                        <div class="note-title">
                            <label>Zalo</label>
                            <input type="tel" class="form-control" name="zalo_id" id="zalo_id" pattern="^(0\d{9,10})$"
                                   placeholder="Nhập Zalo"/>
                        </div>
                        <div class="note-title">
                            <label>Kakao</label>
                            <input type="text" class="form-control" name="kakao_talk_id" id="kakao_talk_id"
                                   placeholder="Nhập Kakao"/>
                        </div>
                        <div class="note-title">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="Nhập Địa chỉ"/>
                        </div>
                        <div class="note-title">
                            <label>Ảnh đại diện</label>
                            <input type="file" class="form-control" name="avatar"
                                   placeholder="Title"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function getInfoSpa(id) {
            $('#modalLabel').text('Chỉnh sửa');
            let url = '{{ route('backend.dai-ly.show', ['id' => ':id']) }}'
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                },
                error: function (xhr, status, error) {
                }
            });
        }

        function lockSpa(id) {
            let url = '{{ route('backend.dai-ly.destroy', ['id' => ':id']) }}'
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    console.log(response)
                },
                error: function (xhr, status, error) {
                }
            });
        }
    </script>
@endsection

