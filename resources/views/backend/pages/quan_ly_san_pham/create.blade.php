@extends('backend.layouts.master')
@section('title', 'Sản phẩm')
@section('content')

    <form action="">
        <div class="modal-body">
            <div class="notes-box">
                <div class="notes-content">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="note-title">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" class="form-control" placeholder="Nhập Tên mã"/>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                        <label>Chọn User</label>

                                    <select
                                        class="select2 form-control"
                                        style="width: 100%; height: 36px"
                                    >
                                        @foreach($listAdmin as $admin)
                                            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="note-title">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Giá gốc</label>
                                        <input type="text" class="form-control" id="code" required
                                               placeholder="Nhập Mã"/>
                                    </div>
                                    <div class="col-6">
                                        <label>Giá khuyến mãi</label>
                                        <input type="text" class="form-control" id="code" required
                                               placeholder="Nhập Mã"/>
                                    </div>
                                </div>
                            </div>

                            <div class="note-title">
                                <label>Mô tả ngắn</label>
                                <textarea type="text" class="form-control"></textarea>
                            </div>
                            <div class="note-title">
                                <label>Mô tả chi tiết</label>
                                <textarea type="text" class="form-control"></textarea>
                            </div>
                            <div class="note-title">
                                <label>Ảnh Thumbnail</label>
                                <input type="file" class="form-control"/>
                            </div>
                            <div class="note-title">
                                <label>Ảnh Gallery</label>
                                <input type="file" multiple min="1" class="form-control"
                                       placeholder="Nhập Số lượng"/>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Sản phẩm bán chạy</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng"/>
                                </div>
                                <div class="col-sm-3">
                                    <label>Sản phẩm yêu thích</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng"/>
                                </div>
                                <div class="col-sm-3">
                                    <label>Sản phẩm HOT</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng"/>
                                </div>
                                <div class="col-sm-3">
                                    <label>Sản phẩm Flashsale</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
