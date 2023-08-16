@extends('backend.layouts.master')
@section('title', 'Cấu hình Tiêu đề')
@section('content')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <form action="{{ route('backend.cau-hinh.store.tieu-de') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Tiêu đề</label>
                        <input type="text" class="form-control" id="validationDefault01" name="123" placeholder="First name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Mô tả web</label>
                        <input type="text" class="form-control" id="validationDefault02" name="123" placeholder="Last name"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault03">Mã script</label>
                        <textarea type="text" class="form-control" id="validationDefault03" name="123" placeholder="City"></textarea>
                    </div>
                </div>
                <input type="hidden" value="{{ \App\Enum\ConfigType::TIEU_DE }}">
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>

@endsection

