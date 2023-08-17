@extends('backend.layouts.master')
@section('title', 'Cấu hình Zalo')
@section('content')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <form action="{{ route('backend.cau-hinh.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="url">url</label>
                        <input type="text" class="form-control" id="url" name="url"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="method">method</label>
                        <input type="text" class="form-control" id="method" name="method"/>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="params">params</label>
                        <input type="text" class="form-control" id="params" name="params"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="body">body</label>
                        <input type="text" class="form-control" id="body" name="body"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="headers">headers</label>
                        <input type="text" class="form-control" id="headers" name="headers"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="files">files</label>
                        <input type="text" class="form-control" id="files" name="files"/>
                    </div>
                </div>



                 <input type="hidden" name="type" value="{{ \App\Enum\ConfigType::API_ZALO }}">
                <button class="btn btn-info rounded-pill px-4 mt-3" type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>

@endsection

