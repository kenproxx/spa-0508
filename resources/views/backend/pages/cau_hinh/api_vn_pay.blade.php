@extends('backend.layouts.master')
@section('title', 'Cấu hình VN PAY')
@section('content')

    @include('backend.widgets.thong-bao')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <form action="{{ route('backend.cau-hinh.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Path</label>
                        <input type="text" class="form-control" id="validationDefault01" name="123" placeholder="First name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Host</label>
                        <input type="text" class="form-control" id="validationDefault02" name="123" placeholder="Last name"/>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">User</label>
                        <input type="text" class="form-control" id="validationDefault03" name="123" placeholder="City"/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault04">Pass</label>
                        <input type="text" class="form-control" id="validationDefault04" name="123" placeholder="State"/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Port</label>
                        <input type="text" class="form-control" id="validationDefault05" name="123" placeholder="Zip"/>
                    </div>
                </div>
                 <input type="hidden" name="type" value="{{ \App\Enum\ConfigType::API_VNPAY }}">
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>
@endsection

