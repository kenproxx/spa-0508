@extends('backend.layouts.master')
@section('title', 'Sản phẩm')
@section('content')

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body p-4">
            <div class="table-responsive rounded-2">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th><h6 class="fs-4 fw-semibold mb-0">Authors</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Courses</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Users</h6></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/blog/blog-img1.jpg" class="rounded-2" width="42" height="42" />
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-1">Top Authors</h6>
                                    <span class="fw-normal">Successful Fellas</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light-danger text-danger rounded-3 fw-semibold fs-2">Angular</span>
                                <span class="badge bg-light-primary text-primary rounded-3 fw-semibold fs-2">PHP</span>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">4300 Users</p></td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/blog/blog-img2.jpg" class="rounded-2" width="42" height="42" />
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-1">Popular Authors</h6>
                                    <span class="fw-normal">Most Successful</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light-primary text-primary rounded-3 fw-semibold fs-2">Bootstrap</span>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">1200 Users</p></td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/blog/blog-img3.jpg" class="rounded-2" width="42" height="42" />
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-1">New Users</h6>
                                    <span class="fw-normal">Awesome Users</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light-success text-success rounded-3 fw-semibold fs-2">Reactjs</span>
                                <span class="badge bg-light-danger text-danger rounded-3 fw-semibold fs-2">Angular</span>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">2000 Users</p></td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/blog/blog-img4.jpg" class="rounded-2" width="42" height="42" />
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-1">Active Customers</h6>
                                    <span class="fw-normal">Best Customers</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light-primary text-primary rounded-3 fw-semibold fs-2">Bootstrap</span>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">1500 Users</p></td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/blog/blog-img5.jpg" class="rounded-2" width="42" height="42" />
                                <div class="ms-3">
                                    <h6 class="fw-semibold mb-1">Bestseller Theme</h6>
                                    <span class="fw-normal">Amazing Templates</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light-danger text-danger rounded-3 fw-semibold fs-2">Angular</span>
                                <span class="badge bg-light-success text-success rounded-3 fw-semibold fs-2">Reactjs</span>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">9500 Users</p></td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

