@extends('backend.layouts.master')
@section('title', 'Sản phẩm')
@section('content')
    <a href="{{ route('backend.san-pham.create') }}">
    <button type="button" class="btn btn-primary">
        Thêm mới
    </button>
    </a>
    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </th>
                        <th scope="col">Products</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/products/s1.jpg" class="rounded-circle" alt="..." width="56" height="56">
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-0 fs-4">How Innovation Works</h6>
                                    <p class="mb-0">books</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">Thu, Jan 12 2023</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="bg-success p-1 rounded-circle"></span>
                                <p class="mb-0 ms-2">InStock</p>
                            </div>
                        </td>
                        <td><h6 class="mb-0 fs-4">$275</h6></td>
                        <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ti ti-dots-vertical"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/products/s2.jpg" class="rounded-circle" alt="..." width="56" height="56">
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-0 fs-4">Psalms Book for Growth</h6>
                                    <p class="mb-0">books</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">Thu, Jan 10 2023</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="bg-danger p-1 rounded-circle"></span>
                                <p class="mb-0 ms-2">Out of Stock</p>
                            </div>
                        </td>
                        <td><h6 class="mb-0 fs-4">$89</h6></td>
                        <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ti ti-dots-vertical"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/products/s3.jpg" class="rounded-circle" alt="..." width="56" height="56">
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-0 fs-4">The Psychology of Money</h6>
                                    <p class="mb-0">fashionbooks</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">Thu, Jan 12 2023</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="bg-success p-1 rounded-circle"></span>
                                <p class="mb-0 ms-2">InStock</p>
                            </div>
                        </td>
                        <td><h6 class="mb-0 fs-4">$125</h6></td>
                        <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ti ti-dots-vertical"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/products/s4.jpg" class="rounded-circle" alt="..." width="56" height="56">
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-0 fs-4">Boat Headphone</h6>
                                    <p class="mb-0">electronics</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">Mon, Jan 16 2023</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="bg-success p-1 rounded-circle"></span>
                                <p class="mb-0 ms-2">InStock</p>
                            </div>
                        </td>
                        <td><h6 class="mb-0 fs-4">$50</h6></td>
                        <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ti ti-dots-vertical"></i></a></td>
                    </tr>
                    <tr>
                        <td class="border-bottom-0">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/products/s5.jpg" class="rounded-circle" alt="..." width="56" height="56">
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-0 fs-4">MacBook Air Pro</h6>
                                    <p class="mb-0">fashionelectronics</p>
                                </div>
                            </div>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0">Wed, Jan 18 2023</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center">
                                <span class="bg-danger p-1 rounded-circle"></span>
                                <p class="mb-0 ms-2">Out of Stock</p>
                            </div>
                        </td>
                        <td class="border-bottom-0"><h6 class="mb-0 fs-4">$650</h6></td>
                        <td class="border-bottom-0"><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ti ti-dots-vertical"></i></a></td>
                    </tr>
                    </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-end py-1">
                    <p class="mb-0 fs-2">Rows per page:</p>
                    <select class="form-select w-auto ms-0 ms-sm-2 me-8 me-sm-4 py-1 pe-7 ps-2 border-0" aria-label="Default select example">
                        <option selected>5</option>
                        <option value="1">10</option>
                        <option value="2">25</option>
                    </select>
                    <p class="mb-0 fs-2">1–5 of 12</p>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center mb-0 ms-8 ms-sm-9">
                            <li class="page-item p-1">
                                <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-left"></i></a>
                            </li>
                            <li class="page-item p-1">
                                <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="../../dist/js/apps/chat.js"></script>

