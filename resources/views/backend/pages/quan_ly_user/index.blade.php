@extends('backend.layouts.master')
@section('title', 'Thống kê')


@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Basic Table</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="./index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Basic Table</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card w-100 position-relative overflow-hidden">
        <div class="px-4 py-3 border-bottom">
            <h5 class="card-title fw-semibold mb-0 lh-sm">Basic Table</h5>
        </div>
        <div class="card-body p-4">
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th><h6 class="fs-4 fw-semibold mb-0">User</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Project Name</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Users</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Status</h6></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                                </div>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">Xtreme admin</p></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light-primary rounded-3 py-8 text-primary fw-semibold fs-2">active</span>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
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
                                <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                                </div>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">Adminpro admin</p></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-3.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light-danger rounded-3 py-8 text-danger fw-semibold fs-2">cancel</span>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
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
                                <img src="../../dist/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                                </div>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">Monster admin</p></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="../../dist/images/profile/user-3.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light-primary rounded-3 py-8 text-primary fw-semibold fs-2">active</span>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
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
                                <img src="../../dist/images/profile/user-4.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                                </div>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">Materialpro admin</p></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="../../dist/images/profile/user-3.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-5.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light-success rounded-3 py-8 text-success fw-semibold fs-2">pending</span>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
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
                                <img src="../../dist/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                                </div>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">Elegant admin</p></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="../../dist/images/profile/user-5.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-6.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light-danger rounded-3 py-8 text-danger fw-semibold fs-2">cancel</span>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
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
                                <img src="../../dist/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Isabel Vasquez</h6>
                                </div>
                            </div>
                        </td>
                        <td><p class="mb-0 fw-normal">Modernize admin</p></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                                <a href="#">
                                    <img src="../../dist/images/profile/user-4.jpg" class="rounded-circle me-n2 card-hover border border-2 border-white" width="39" height="39">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light-success rounded-3 py-8 text-success fw-semibold fs-2">pending</span>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
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
