@extends('backend.layouts.master')
@section('title', 'Cấu hình VN PAY')
@section('content')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <form action="{{ route('backend.cau-hinh.store.tieu-de') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" id="validationDefault01" name="123" placeholder="First name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" name="123" placeholder="Last name"/>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" id="validationDefault03" name="123" placeholder="City"/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault04">State</label>
                        <input type="text" class="form-control" id="validationDefault04" name="123" placeholder="State"/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" name="123" placeholder="Zip"/>
                    </div>
                </div>
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>
@endsection

