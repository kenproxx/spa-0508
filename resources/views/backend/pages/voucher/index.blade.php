@extends('backend.layouts.master')
@section('title', 'Mã giảm giá')


@section('content')
    <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
        <li class="nav-item">
            <a href="javascript:void(0)" class="
                      nav-link

                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      active
                      px-3 px-md-3
                      me-0 me-md-2 text-body-color
                    " id="all-category">
                <i class="ti ti-list fill-white me-0 me-md-1"></i>
                <span class="d-none d-md-block font-weight-medium">Tất cả</span>
            </a>
        </li>
        <li class="nav-item ms-auto">
            <a href="javascript:void(0)" class="btn btn-primary d-flex align-items-center px-3" id="add-notes">
                <i class="ti ti-file me-0 me-md-1 fs-4"></i>
                <span class="d-none d-md-block font-weight-medium fs-3">Tạo mã</span>
            </a>

        </li>
    </ul>
    <div class="tab-content">
        <div id="note-full-container" class="note-has-grid row">
            <div class="col-md-4 single-note-item all-category note-important">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie"> Book a
                        Ticket for Movie </h6>
                    <p class="note-date fs-2">11 March 2009</p>
                    <div class="note-content">
                        <p class="note-inner-content"
                           data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link text-danger ms-2">
                            <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Go for lunch"> Go for lunch </h6>
                    <p class="note-date fs-2">01 April 2002</p>
                    <div class="note-content">
                        <p class="note-inner-content"
                           data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link me-1">
                            <i class="ti ti-star fs-4 favourite-note"></i>
                        </a>
                        <a href="javascript:void(0)" class="link text-danger ms-2">
                            <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#"
                                   role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                    <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                    <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Meeting with Mr.Jojo"> Meeting with
                        Mr.Jojo </h6>
                    <p class="note-date fs-2">19 October 2021</p>
                    <div class="note-content">
                        <p class="note-inner-content"
                           data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link me-1">
                            <i class="ti ti-star fs-4 favourite-note"></i>
                        </a>
                        <a href="javascript:void(0)" class="link text-danger ms-2">
                            <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#"
                                   role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                    <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                    <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-business">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Give Review for design"> Give
                        Review for design </h6>
                    <p class="note-date fs-2">02 January 2000</p>
                    <div class="note-content">
                        <p class="note-inner-content"
                           data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link me-1">
                            <i class="ti ti-star fs-4 favourite-note"></i>
                        </a>
                        <a href="javascript:void(0)" class="link text-danger ms-2">
                            <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#"
                                   role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                    <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                    <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add notes -->
    <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title text-white">Thêm Mã giảm giá</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="notes-box">
                            <div class="notes-content">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="note-title">
                                            <label>Tên mã</label>
                                            <input type="text" class="form-control" placeholder="Nhập Tên mã"/>
                                        </div>
                                        <div class="note-title">
                                            <label>CODE</label>
                                            <div class="row">
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="code" required
                                                           minlength="5" maxlength="10"
                                                           placeholder="Nhập Mã" oninput="upToCaseCode(this)"/>
                                                </div>
                                                <div class="col-3">
                                                    <input type="button" class="btn btn-primary form-control"
                                                           onclick="generateRandomCode()"
                                                           value="Gen Code"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-title">
                                            <label>Bắt đầu</label>
                                            <input type="datetime-local" class="form-control"/>
                                        </div>
                                        <div class="note-title">
                                            <label>Kết thúc</label>
                                            <input type="datetime-local" class="form-control"/>
                                        </div>
                                        <div class="note-title">
                                            <label>Sản phẩm áp dụng</label>
                                            <input type="text" class="form-control"/>
                                        </div>
                                        <div class="note-title">
                                            <label>Số lượng</label>
                                            <input type="number" min="0" class="form-control"
                                                   placeholder="Nhập Số lượng"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../dist/js/apps/notes.js"></script>
@endsection

<script>
    function generateRandomCode() {
        const length = 8;
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
        let randomCode = '';
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            randomCode += characters.charAt(randomIndex);
        }

        document.getElementById('code').value = randomCode;
    }

    function upToCaseCode(input) {
        const cleanedValue = removeVietnameseDiacritics(input.value);
        input.value = cleanedValue.toUpperCase()
    }

    function removeVietnameseDiacritics(str) {
        return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    }
</script>
