@extends('backend.layouts.master')
@section('title', 'Sản phẩm')
@section('content')
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    <div class="row">
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Betty Adams</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Sint Maarten</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Virginia Wong</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Tunisia</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Birdie Burgess</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Algeria</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Steven Lindsey</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Malaysia</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Hannah Rhodes</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Grenada</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-6.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Effie Gross</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Azerbaijan</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-7.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Mark Barton</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>French Southern Territories</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-8.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Carolyn Knight</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Nauru</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-9.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Elizabeth Malone</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Djibouti</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-10.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Jon Cohen</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>United States</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Mary Hernandez</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Equatorial Guinea</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Willie Peterson</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Solomon Islands</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Harvey Baldwin</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Uruguay</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Alice George</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Madagascar</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Beulah Simpson</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Bahrain</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-6.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Francis Barber</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Colombia</span>
                    </div>
                    <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-7.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Christian Morales</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Maldives</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-8.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Laura Nelson</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>St. Helena</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-9.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Blanche Strickland</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>South Africa</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <img src="../../dist/images/profile/user-10.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <div>
                        <h5 class="fw-semibold mb-0">Adam Washington</h5>
                        <span class="fs-2 d-flex align-items-center"><i class="ti ti-map-pin text-dark fs-3 me-1"></i>Suriname</span>
                    </div>
                    <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

