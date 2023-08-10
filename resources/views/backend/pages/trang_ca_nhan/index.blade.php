@extends('backend.layouts.master')
@section('title', 'Sản phẩm')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">User Profile</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">User Profile</li>
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
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <img src="../../dist/images/backgrounds/profilebg.jpg" alt="" class="img-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="d-flex align-items-center justify-content-around m-4">
                        <div class="text-center">
                            <i class="ti ti-file-description fs-6 d-block mb-2"></i>
                            <h4 class="mb-0 fw-semibold lh-1">938</h4>
                            <p class="mb-0 fs-4">Posts</p>
                        </div>
                        <div class="text-center">
                            <i class="ti ti-user-circle fs-6 d-block mb-2"></i>
                            <h4 class="mb-0 fw-semibold lh-1">3,586</h4>
                            <p class="mb-0 fs-4">Followers</p>
                        </div>
                        <div class="text-center">
                            <i class="ti ti-user-check fs-6 d-block mb-2"></i>
                            <h4 class="mb-0 fw-semibold lh-1">2,659</h4>
                            <p class="mb-0 fs-4">Following</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                    <div class="mt-n5">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px;";>
                                <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;";>
                                    <img src="../../dist/images/profile/user-1.jpg" alt="" class="w-100 h-100">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="fs-5 mb-0 fw-semibold">Mathew Anderson</h5>
                            <p class="mb-0 fs-4">Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-last">
                    <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start my-3 gap-3">
                        <li class="position-relative">
                            <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" width="30" height="30">
                                <i class="ti ti-brand-facebook"></i>
                            </a>
                        </li>
                        <li class="position-relative">
                            <a class="text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle " href="javascript:void(0)">
                                <i class="ti ti-brand-twitter"></i>
                            </a>
                        </li>
                        <li class="position-relative">
                            <a class="text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle " href="javascript:void(0)">
                                <i class="ti ti-brand-dribbble"></i>
                            </a>
                        </li>
                        <li class="position-relative">
                            <a class="text-white bg-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle " href="javascript:void(0)">
                                <i class="ti ti-brand-youtube"></i>
                            </a>
                        </li>
                        <li><button class="btn btn-primary">Add To Story</button></li>
                    </ul>
                </div>
            </div>
            <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-light-info rounded-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                        <i class="ti ti-user-circle me-2 fs-6"></i>
                        <span class="d-none d-md-block">Profile</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
                        <i class="ti ti-heart me-2 fs-6"></i>
                        <span class="d-none d-md-block">Followers</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button" role="tab" aria-controls="pills-friends" aria-selected="false">
                        <i class="ti ti-user-circle me-2 fs-6"></i>
                        <span class="d-none d-md-block">Friends</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false">
                        <i class="ti ti-photo-plus me-2 fs-6"></i>
                        <span class="d-none d-md-block">Gallery</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-none border">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-3">Introduction</h4>
                            <p>Hello, I am Mathew Anderson. I love making websites and graphics. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center gap-3 mb-4">
                                    <i class="ti ti-briefcase text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">Sir, P P Institute Of Science</h6>
                                </li>
                                <li class="d-flex align-items-center gap-3 mb-4">
                                    <i class="ti ti-mail text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">xyzjonathan@gmail.com</h6>
                                </li>
                                <li class="d-flex align-items-center gap-3 mb-4">
                                    <i class="ti ti-device-desktop text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">www.xyz.com</h6>
                                </li>
                                <li class="d-flex align-items-center gap-3 mb-2">
                                    <i class="ti ti-map-pin text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">Newyork, USA - 100001</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-3">Photos</h4>
                            <div class="row">
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-2 img-fluid mb-9">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-2 img-fluid mb-9">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-2 img-fluid mb-9">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-4.jpg" alt="" class="rounded-2 img-fluid mb-9">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-2 img-fluid mb-9">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-6.jpg" alt="" class="rounded-2 img-fluid mb-9">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-7.jpg" alt="" class="rounded-2 img-fluid mb-6">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-8.jpg" alt="" class="rounded-2 img-fluid mb-6">
                                </div>
                                <div class="col-4">
                                    <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-2 img-fluid mb-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-none border">
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 137px"></textarea>
                                <label for="floatingTextarea2" class="p-7">Share your thoughts</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)">
                                    <i class="ti ti-photo"></i>
                                </a>
                                <a href="javascript:void(0)" class="text-dark px-3 py-2">Photo / Video</a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2">
                                    <div class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle">
                                        <i class="ti ti-notebook"></i>
                                    </div>
                                    <span class="text-dark">Article</span>
                                </a>
                                <button class="btn btn-primary ms-auto">Post</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40" height="40">
                                <h6 class="fw-semibold mb-0 fs-4">Mathew Anderson</h6>
                                <span class="fs-2"><span class="p-1 bg-light rounded-circle d-inline-block"></span> 15 min ago</span>
                            </div>
                            <p class="text-dark my-3">
                                Nu kek vuzkibsu mooruno ejepogojo uzjon gag fa ezik disan he nah. Wij wo pevhij tumbug rohsa ahpi ujisapse lo vap labkez eddu suk.
                            </p>
                            <img src="../../dist/images/products/s1.jpg" alt="" class="img-fluid rounded-4 w-100 object-fit-cover" style="height: 360px;">
                            <div class="d-flex align-items-center my-3">
                                <div class="d-flex align-items-center gap-2">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                        <i class="ti ti-thumb-up"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">67</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 ms-4">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Comment">
                                        <i class="ti ti-message-2"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">2</span>
                                </div>
                                <a class="text-dark ms-auto d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share">
                                    <i class="ti ti-share"></i>
                                </a>
                            </div>
                            <div class="position-relative">
                                <div class="p-4 rounded-2 bg-light mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-circle" width="33" height="33">
                                        <h6 class="fw-semibold mb-0 fs-4">Deran Mac</h6>
                                        <span class="fs-2"><span class="p-1 bg-muted rounded-circle d-inline-block"></span> 8 min ago</span>
                                    </div>
                                    <p class="my-3">Lufo zizrap iwofapsuk pusar luc jodawbac zi op uvezojroj duwage vuhzoc ja vawdud le furhez siva
                                        fikavu ineloh. Zot afokoge si mucuve hoikpaf adzuk zileuda falohfek zoije fuka udune lub annajor gazo
                                        conis sufur gu.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                                <i class="ti ti-thumb-up"></i>
                                            </a>
                                            <span class="text-dark fw-semibold">55</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 ms-4">
                                            <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                                <i class="ti ti-arrow-back-up"></i>
                                            </a>
                                            <span class="text-dark fw-semibold">0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-2 bg-light mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="../../dist/images/profile/user-4.jpg" alt="" class="rounded-circle" width="33" height="33">
                                        <h6 class="fw-semibold mb-0 fs-4">Jonathan Bg</h6>
                                        <span class="fs-2"><span class="p-1 bg-muted rounded-circle d-inline-block"></span> 5 min ago</span>
                                    </div>
                                    <p class="my-3">
                                        Zumankeg ba lah lew ipep tino tugjekoj hosih fazjid wotmila durmuri buf hi sigapolu joit ebmi joge vo.
                                        Horemo vogo hat na ejednu sarta afaamraz zi cunidce peroido suvan podene igneve.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <a class="text-dark d-flex align-items-center justify-content-center bg-light-dark p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                                <i class="ti ti-thumb-up"></i>
                                            </a>
                                            <span class="text-dark fw-semibold">68</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 ms-4">
                                            <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                                <i class="ti ti-arrow-back-up"></i>
                                            </a>
                                            <span class="text-dark fw-semibold">1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-2 bg-light ms-7">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40" height="40">
                                        <h6 class="fw-semibold mb-0 fs-4">Carry minati</h6>
                                        <span class="fs-2"><span class="p-1 bg-muted rounded-circle d-inline-block"></span> just now</span>
                                    </div>
                                    <p class="my-3">
                                        Olte ni somvukab ugura ovaobeco hakgoc miha peztajo tawosu udbacas kismakin hi. Dej
                                        zetfamu cevufi sokbid bud mun soimeuha pokahram vehurpar keecris pepab voegmud
                                        zundafhef hej pe.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3">
                            <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle" width="33" height="33">
                            <input type="text" class="form-control py-8" id="exampleInputtext" aria-describedby="textHelp" placeholder="Comment">
                            <button class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40" height="40">
                                <h6 class="fw-semibold mb-0 fs-4">Carry Minati</h6>
                                <span class="fs-2"><span class="p-1 bg-light rounded-circle d-inline-block"></span> now</span>
                            </div>
                            <p class="text-dark my-3">
                                Pucnus taw set babu lasufot lawdebuw nem ig bopnub notavfe pe ranlu dijsan liwfekaj lo az. Dom giat gu
                                sehiosi bikelu lo eb uwrerej bih woppoawi wijdiola iknem hih suzega gojmev kir rigoj.
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                        <i class="ti ti-thumb-up"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">1</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 ms-4">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Comment">
                                        <i class="ti ti-message-2"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">0</span>
                                </div>
                                <a class="text-dark ms-auto d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share">
                                    <i class="ti ti-share"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3">
                            <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle" width="33" height="33">
                            <input type="text" class="form-control py-8" id="exampleInputtext" aria-describedby="textHelp" placeholder="Comment">
                            <button class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40" height="40">
                                <h6 class="fw-semibold mb-0 fs-4">Genelia Desouza</h6>
                                <span class="fs-2"><span class="p-1 bg-light rounded-circle d-inline-block"></span> 15 min ago</span>
                            </div>
                            <p class="text-dark my-3">
                                Faco kiswuoti mucurvi juokomo fobgi aze huweik zazjofefa kuujer talmoc li niczot lohejbo vozev zi huto. Ju
                                tupma uwujate bevolkoh hob munuap lirec zak ja li hotlanu pigtunu.
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="../../dist/images/products/s2.jpg" alt="" class="img-fluid rounded-4 mb-3 mb-sm-0">
                                </div>
                                <div class="col-sm-6">
                                    <img src="../../dist/images/products/s4.jpg" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <div class="d-flex align-items-center gap-2">
                                    <a class="text-dark d-flex align-items-center justify-content-center bg-light p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                        <i class="ti ti-thumb-up"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">320</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 ms-4">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Comment">
                                        <i class="ti ti-message-2"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">1</span>
                                </div>
                                <a class="text-dark ms-auto d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share">
                                    <i class="ti ti-share"></i>
                                </a>
                            </div>
                            <div class="p-4 rounded-2 bg-light">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-circle" width="33" height="33">
                                    <h6 class="fw-semibold mb-0 fs-4">Ritesh Deshmukh</h6>
                                    <span class="fs-2"><span class="p-1 bg-muted rounded-circle d-inline-block"></span> 15 min ago</span>
                                </div>
                                <p class="my-3">
                                    Hintib cojno riv ze heb cipcep fij wo tufinpu bephekdab infule pajnaji. Jiran goetimip muovo go en
                                    gaga zeljomim hozlu lezuvi ehkapod dec bifoom hag dootasac odo luvgit ti ella.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                            <i class="ti ti-thumb-up"></i>
                                        </a>
                                        <span class="text-dark fw-semibold">65</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 ms-4">
                                        <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                            <i class="ti ti-arrow-back-up"></i>
                                        </a>
                                        <span class="text-dark fw-semibold">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3">
                            <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle" width="33" height="33">
                            <input type="text" class="form-control py-8" id="exampleInputtext" aria-describedby="textHelp" placeholder="Comment">
                            <button class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40" height="40">
                                <h6 class="fw-semibold mb-0 fs-4">Mathew Anderson</h6>
                                <span class="fs-2"><span class="p-1 bg-light rounded-circle d-inline-block"></span> 15 min ago</span>
                            </div>
                            <p class="text-dark my-3">
                                Faco kiswuoti mucurvi juokomo fobgi aze huweik zazjofefa kuujer talmoc li niczot lohejbo vozev zi huto. Ju
                                tupma uwujate bevolkoh hob munuap lirec zak ja li hotlanu pigtunu.
                            </p>
                            <iframe class="rounded-4 border border-2 mb-3" src="https://www.youtube.com/embed/d1-FRj20WBE" frameborder="0" width="100%" style="height: 300px;"></iframe>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                        <i class="ti ti-thumb-up"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">129</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 ms-4">
                                    <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Comment">
                                        <i class="ti ti-message-2"></i>
                                    </a>
                                    <span class="text-dark fw-semibold">0</span>
                                </div>
                                <a class="text-dark ms-auto d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share">
                                    <i class="ti ti-share"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3">
                            <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle" width="33" height="33">
                            <input type="text" class="form-control py-8" id="exampleInputtext" aria-describedby="textHelp" placeholder="Comment">
                            <button class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
            <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Followers <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">20</span></h3>
                <form class="position-relative">
                    <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Followers">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
                </form>
            </div>
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
        </div>
        <div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab" tabindex="0">
            <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Friends <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">20</span></h3>
                <form class="position-relative">
                    <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Friends">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Betty Adams</h5>
                            <span class="text-dark fs-2">Medical Secretary</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Inez Lyons</h5>
                            <span class="text-dark fs-2">Medical Technician</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Lydia Bryan</h5>
                            <span class="text-dark fs-2">Preschool Teacher</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Carolyn Bryant</h5>
                            <span class="text-dark fs-2">Legal Secretary</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Paul Benson</h5>
                            <span class="text-dark fs-2">Safety Engineer</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-6.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Robert Francis</h5>
                            <span class="text-dark fs-2">Nursing Administrator</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-7.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Billy Rogers</h5>
                            <span class="text-dark fs-2">Legal Secretary</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-8.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Rosetta Brewer</h5>
                            <span class="text-dark fs-2">Comptroller</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-9.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Patrick Knight</h5>
                            <span class="text-dark fs-2">Retail Store Manager</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-10.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Francis Sutton</h5>
                            <span class="text-dark fs-2">Astronomer</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-1.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Bernice Henry</h5>
                            <span class="text-dark fs-2">Security Consultant</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Estella Garcia</h5>
                            <span class="text-dark fs-2">Lead Software Test Engineer</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Norman Moran</h5>
                            <span class="text-dark fs-2">Engineer Technician</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Jessie Matthews</h5>
                            <span class="text-dark fs-2">Lead Software Engineer</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-5.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Elijah Perez</h5>
                            <span class="text-dark fs-2">Special Education Teacher</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-6.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Robert Martin</h5>
                            <span class="text-dark fs-2">Transportation Manager</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-7.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Elva Wong</h5>
                            <span class="text-dark fs-2">Logistics Manager</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-8.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Edith Taylor</h5>
                            <span class="text-dark fs-2">Union Representative</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-9.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Violet Jackson</h5>
                            <span class="text-dark fs-2">Agricultural Inspector</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-10.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                            <h5 class="fw-semibold mb-0">Phoebe Owens</h5>
                            <span class="text-dark fs-2">Safety Engineer</span>
                        </div>
                        <ul class="px-2 py-2 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="position-relative">
                                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold" href="javascript:void(0)">
                                    <i class="ti ti-brand-facebook"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-instagram"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-github"></i>
                                </a>
                            </li>
                            <li class="position-relative">
                                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold " href="javascript:void(0)">
                                    <i class="ti ti-brand-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab" tabindex="0">
            <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Gallery <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">12</span></h3>
                <form class="position-relative">
                    <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Friends">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
                </form>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s1.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Isuava wakceajo fe.jpg</h6>
                                    <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo fe.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s2.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Ip docmowe vemremrif.jpg</h6>
                                    <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Ip docmowe vemremrif.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s3.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Duan cosudos utaku.jpg</h6>
                                    <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Duan cosudos utaku.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s4.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Fu netbuv oggu.jpg</h6>
                                    <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Fu netbuv oggu.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s5.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Di sekog do.jpg</h6>
                                    <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Di sekog do.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s6.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Lo jogu camhiisi.jpg</h6>
                                    <span class="text-dark fs-2">Thu, Dec 15, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Lo jogu camhiisi.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s7.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Orewac huosazud robuf.jpg</h6>
                                    <span class="text-dark fs-2">Fri, Dec 16, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Orewac huosazud robuf.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s8.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Nira biolaizo tuzi.jpg</h6>
                                    <span class="text-dark fs-2">Sat, Dec 17, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Nira biolaizo tuzi.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s9.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Peri metu ejvu.jpg</h6>
                                    <span class="text-dark fs-2">Sun, Dec 18, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Peri metu ejvu.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s10.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Vurnohot tajraje isusufuj.jpg</h6>
                                    <span class="text-dark fs-2">Mon, Dec 19, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Vurnohot tajraje isusufuj.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s11.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Juc oz ma.jpg</h6>
                                    <span class="text-dark fs-2">Tue, Dec 20, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Juc oz ma.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card hover-img overflow-hidden rounded-2">
                        <div class="card-body p-0">
                            <img src="../../dist/images/products/s12.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold mb-0 fs-4">Povipvez marjelliz zuuva.jpg</h6>
                                    <span class="text-dark fs-2">Wed, Dec 21, 2023</span>
                                </div>
                                <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Povipvez marjelliz zuuva.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

