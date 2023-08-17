@extends('backend.layouts.master')
@section('title', 'Cấu hình Tiêu đề')
@section('content')

    @include('backend.widgets.thong-bao')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <form action="{{ route('backend.cau-hinh.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tieu_de">Tiêu đề</label>
                        <input type="text" class="form-control" id="tieu_de" name="tieu_de" placeholder="Nhập tiêu đề" value="{{ $arrConfig['tieu_de'] ?? '' }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mo_ta_web">Mô tả web</label>
                        <input type="text" class="form-control" id="mo_ta_web" name="mo_ta_web" placeholder="Nhập mô tả web" value="{{ $arrConfig['mo_ta_web'] ?? '' }}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="script_code">Mã script</label>
                        <textarea type="text" class="form-control" id="script_code" name="script_code" placeholder="Nhập mã script" >{{ $arrConfig['script_code'] ?? '' }}</textarea>
                    </div>
                </div>
                 <input type="hidden" name="type" value="{{ \App\Enum\ConfigType::TIEU_DE }}">
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>

@endsection

