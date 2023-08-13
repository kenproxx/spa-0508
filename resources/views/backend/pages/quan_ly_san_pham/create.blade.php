@extends('backend.layouts.master')
@section('title', 'Tạo sản phẩm')
@section('content')
    <form action="{{ route('backend.san-pham.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="notes-box">
                <div class="notes-content">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" placeholder="Nhập Tên sản phẩm" name="title"/>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Chọn Spa</label>
                                    <select class="form-control" name="agency_id" id="agency_id">
                                        @foreach($listSpa as $spa)
                                            <option value="{{ $spa->id }}">
                                                {{ $spa->ten_quan_ly }} - {{ $spa->ten_co_so }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>Chọn Dịch vụ thêm</label>
                                    <select class="form-control" name="service_id[]" id="service_id">
                                        <option value="">Chưa có dịch vụ</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Giá gốc</label>
                                        <input type="text" class="form-control" name="gia_goc"
                                               placeholder="Nhập Giá gốc"/>
                                    </div>
                                    <div class="col-6">
                                        <label>Giá khuyến mãi</label>
                                        <input type="text" class="form-control" name="gia_khuyen_mai"
                                               placeholder="Nhập Giá khuyến mại"/>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label>Mô tả ngắn</label>
                                <textarea type="text" class="form-control" name="mo_ta_ngan"></textarea>
                            </div>
                            <div>
                                <label>Mô tả chi tiết</label>
                                <textarea type="text" class="form-control" name="mo_ta_chi_tiet"></textarea>
                            </div>
                            <div>
                                <label>Ảnh Thumbnail</label>
                                <input type="file" class="form-control" accept="image/*" name="avatar"/>
                            </div>
                            <div>
                                <label>Ảnh Gallery</label>
                                <input type="file" multiple name="gallery[]" accept="image/*" class="form-control"/>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Sản phẩm bán chạy</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng" name="ban_chay"/>
                                </div>
                                <div class="col-sm-3">
                                    <label>Sản phẩm yêu thích</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng" name="yeu_thich"/>
                                </div>
                                <div class="col-sm-3">
                                    <label>Sản phẩm HOT</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng" name="hot"/>
                                </div>
                                <div class="col-sm-3">
                                    <label>Sản phẩm Flashsale</label>
                                    <input type="checkbox" class="form-check-input"
                                           placeholder="Nhập Số lượng" name="flash_sale"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>

    <script>
        const agencySelect = document.getElementById('agency_id');
        const serviceSelect = document.getElementById('service_id');

        agencySelect.addEventListener('change', () => {
            loadServiceFromAgency();
        });

        loadServiceFromAgency();

        function loadServiceFromAgency() {
            const selectedAgencyId = agencySelect.value;

            serviceSelect.innerHTML = '';

            let url = '{{ route('backend.dich-vu-them.get-by-agency', ['id' => ':id']) }}'
            url = url.replace(':id', selectedAgencyId);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    renderHTMLForMoreService(data)
                })
                .catch(error => {
                    console.error('Error loading additional services');
                });
        }

        function renderHTMLForMoreService(data) {
            if (0 !== data.length) {
                data.forEach(service => {
                    const option = document.createElement('option');
                    option.value = service.id;
                    option.textContent = service.service_name;
                    serviceSelect.appendChild(option);
                });
            } else {
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'Chưa có dịch vụ';
                serviceSelect.appendChild(option);
            }
        }
    </script>
    <script>
        const checkboxes = document.querySelectorAll('.form-check-input');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                checkbox.value = checkbox.checked ? '1' : '0';
                console.log(checkbox.value)
            });
        });
    </script>
@endsection


