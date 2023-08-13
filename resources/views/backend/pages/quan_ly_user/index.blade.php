@extends('backend.layouts.master')
@section('title', 'Người dùng')
@section('content')

    @include('backend.widgets.thong-bao')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="px-4 py-3 border-bottom">
            <h5 class="card-title fw-semibold mb-0 lh-sm">Quản lý người dùng</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-user">
                Thêm mới
            </button>
        </div>
        <div class="card-body p-4">
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th><h6 class="fs-4 fw-semibold mb-0">Họ và tên</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Số điện thoại</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Email</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Kakao</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Loại User</h6></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listUser as $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40"
                                         height="40"/>
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">{{ $user->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td><p class="mb-0 fw-normal">{{ $user->number_phone }}</p></td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $user->email }}</p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">{{ $user->kakao_talk_id }}</p>
                            </td>
                            <td>
                           <span
                               class="badge <?php echo $user->role_id == '1' ? 'bg-light-primary' : ($user->role_id == '2' ? 'bg-light-secondary' : 'bg-light-danger') ?> rounded-3 py-8 text-primary fw-semibold fs-2">
                                {{ $user->role_id == '1' ? 'SUPER_ADMIN' : ($user->role_id == '2' ? 'ADMIN' : 'GUEST') }}
                           </span>
                            </td>
                            <td>
                                <div class="dropdown dropstart">
                                    <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="ti ti-dots-vertical fs-6"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li data-bs-toggle="modal" data-bs-target="#modal-user"
                                            onclick="editUser({{ $user->id }})">
                                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                    class="fs-4 ti ti-edit"></i>Sửa</a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i--}}
{{--                                                    class="fs-4 ti ti-trash"></i>Xóa</a>--}}
{{--                                        </li>--}}
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

    <div class="modal fade" id="modal-user" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Tạo mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form" action="{{ route('backend.nguoi-dung.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="note-title">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="Nhập Họ và tên"/>
                        </div>
                        <div class="note-title">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                   placeholder="Nhập Email"/>
                        </div>
                        <div class="note-title">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Nhập Mật khẩu"/>
                        </div>
                        <div class="note-title">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="number_phone" id="number_phone"
                                   placeholder="Nhập Số điện thoại"/>
                        </div>
                        <div class="note-title">
                            <label>Zalo</label>
                            <input type="tel" class="form-control" name="zalo_id" id="zalo_id"
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
                            <label>Phân quyền</label>
                            <select class="form-select" aria-label="Default select example" name="role_id" id="role_id">
                                @foreach($listRole as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
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
@endsection

<script>

    let isFormAdd = true

    function editUser(id) {
        $('#modalLabel').text('Chỉnh sửa');
        let url = '{{ route('backend.nguoi-dung.show', ['id' => ':id']) }}'
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            type: "GET",
            success: function (response) {
                importDataToModal(response, id);
            },
            error: function (xhr, status, error) {
                console.error("Error resetting form:", error);
            }
        });
    }

    function importDataToModal(data, id) {
        let isExistZalo = false

        if (data.zalo_id) {
            isExistZalo = true;
        }

        $('#name').val(data.name);
        $('#email').val(data.email).prop('disabled', true);
        $('#password').val(data.password);
        $('#number_phone').val(data.number_phone);
        $('#zalo_id').val(data.zalo_id).prop('disabled', isExistZalo);
        $('#kakao_talk_id').val(data.kakao_talk_id);
        $('#address').val(data.address);
        $('#role_id').val(data.role_id);

        let url = '{{ route('backend.nguoi-dung.update', ['id' => ':id']) }}';
        url = url.replace(':id', id);
        document.getElementById('form').action = url;
        isFormAdd = false;
    }


    function resetFormModal() {
        $('#modalLabel').text('Thêm mới');
        $('input[type="text"]').val('').prop('disabled', false);
        $('input[type="password"]').val('');
        $('input[type="number"]').val('');
        $('input[type="tel"]').val('').prop('disabled', false);
        $('select').prop('selectedIndex', 0);
        $('input[type="file"]').val('');
    }

    document.addEventListener("DOMContentLoaded", function() {
        const modalUser = document.getElementById('modal-user');
        modalUser.addEventListener('hidden.bs.modal', function() {
            resetFormModal();
        });
    });

</script>
