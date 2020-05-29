@extends('app')

@section('title', 'Exam')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 col-lg-12 mb-4">
            <div class="card">
                <div class="position-absolute card-top-buttons">
                    <button class="btn btn-header-light icon-button">
                        <i class="simple-icon-refresh"></i>
                    </button>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Exam Online</h5>
                    <div class="scroll">
                        <p style="text-align:justify">Perhatikan dengan cermat gambar jaring-jaring makanan dibawah ini!</p>
                        <p style="text-align:justify"><img alt="3-52" src="https://blog.ruangguru.com/hs-fs/hubfs/3-52.png?width=556&amp;name=3-52.png" style="width:556px" /></p>
                        <p style="text-align:justify">Berdasarkan gambar diatas, pernyataan yang paling tepat adalah&hellip;</p>
                        <p style="text-align:justify">A. rumput dan pohon berperan sebagai dekomposer</p>
                        <p style="text-align:justify">B. rumput dan pohon berperan sebagai produsen</p>
                        <p style="text-align:justify">C. rumput sebagai dekomposer dan pohon sebagai produsen</p>
                        <p style="text-align:justify">D. rumput sebagai produsen dan pohon sebagai dekomposer</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-xl-9 col-lg-9 mb-4">
            <div class="card">
                <div class="position-absolute card-top-buttons">
                    <button class="btn btn-header-light icon-button">
                        <i class="simple-icon-refresh"></i>
                    </button>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Recent Orders</h5>
                    <div class="scroll dashboard-list-with-thumbs">
                        <div class="d-flex flex-row mb-3">
                            <a class="d-block position-relative" href="#">
                                <img src="img/marble-cake-thumb.jpg" alt="Marble Cake"
                                    class="list-thumbnail border-0" />
                                <span
                                    class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                            </a>
                            <div class="pl-3 pt-2 pr-2 pb-2">
                                <a href="#">
                                    <p class="list-item-heading">Marble Cake</p>
                                    <div class="pr-4 d-none d-sm-block">
                                        <p class="text-muted mb-1 text-small">Latashia Nagy - 100-148 Warwick
                                            Trfy, Kansas City, USA</p>
                                    </div>
                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                        09.04.2018</div>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <a class="d-block position-relative" href="#">
                                <img src="img/fruitcake-thumb.jpg" alt="Fruitcake"
                                    class="list-thumbnail border-0" />
                                <span
                                    class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                            </a>
                            <div class="pl-3 pt-2 pr-2 pb-2">
                                <a href="#">
                                    <p class="list-item-heading">Fruitcake</p>
                                    <div class="pr-4 d-none d-sm-block">
                                        <p class="text-muted mb-1 text-small">Marty Otte - 166-156 Rue de
                                            Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                    </div>
                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                        09.04.2018</div>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <a class="d-block position-relative" href="#">
                                <img src="img/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                    class="list-thumbnail border-0" />
                                <span
                                    class="badge badge-pill badge-theme-1 position-absolute badge-top-right">PROCESS</span>
                            </a>
                            <div class="pl-3 pt-2 pr-2 pb-2">
                                <a href="#">
                                    <p class="list-item-heading">Chocolate Cake</p>
                                    <div class="pr-4 d-none d-sm-block">
                                        <p class="text-muted mb-1 text-small">Linn Ronning - Rasen 2-14, 98547
                                            Kühndorf, Germany</p>
                                    </div>
                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                        09.04.2018</div>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <a class="d-block position-relative" href="#">
                                <img src="img/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                    class="list-thumbnail border-0" />
                                <span
                                    class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                            </a>
                            <div class="pl-3 pt-2 pr-2 pb-2">
                                <a href="#">
                                    <p class="list-item-heading">Fat Rascal</p>
                                    <div class="pr-4 d-none d-sm-block">
                                        <p class="text-muted mb-1 text-small">Rasheeda Vaquera - 37 Rue des
                                            Grands Prés, 03100 Montluçon, France</p>
                                    </div>
                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                        09.04.2018</div>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <a class="d-block position-relative" href="#">
                                <img src="img/streuselkuchen-thumb.jpg" alt="Streuselkuchen"
                                    class="list-thumbnail border-0" />
                                <span
                                    class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                            </a>
                            <div class="pl-3 pt-2 pr-2 pb-2">
                                <a href="#">
                                    <p class="list-item-heading">Streuselkuchen</p>
                                    <div class="pr-4 d-none d-sm-block">
                                        <p class="text-muted mb-1 text-small">Mimi Carreira - 36-71 Victoria
                                            St, Birmingham, UK</p>
                                    </div>
                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                        09.04.2018</div>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <a class="d-block position-relative" href="#">
                                <img src="img/cremeschnitte-thumb.jpg" alt="Cremeschnitte"
                                    class="list-thumbnail border-0" />
                                <span
                                    class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                            </a>
                            <div class="pl-3 pt-2 pr-2 pb-2">
                                <a href="#">
                                    <p class="list-item-heading">Cremeschnitte</p>
                                    <div class="pr-4 d-none d-sm-block">
                                        <p class="text-muted mb-1 text-small">Lenna Majeed - 6 Hertford St
                                            Mayfair, London, UK</p>
                                    </div>
                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                        09.04.2018</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="app-menu">
    <div class="p-4 h-100">
        <div class="scroll">
            <p class="text-muted text-small">Status</p>
            <ul class="list-unstyled mb-5">
                <li class="active">
                    <a href="#">
                        <i class="simple-icon-refresh"></i>
                        Pending Tasks
                        <span class="float-right">12</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="simple-icon-check"></i>
                        Completed Tasks
                        <span class="float-right">24</span>
                    </a>
                </li>
            </ul>

            <p class="text-muted text-small">Categories</p>
            <ul class="list-unstyled mb-5">
                <li>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="category1">
                        <label class="custom-control-label" for="category1">Flexbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="category2">
                        <label class="custom-control-label" for="category2">Sass</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="category3">
                        <label class="custom-control-label" for="category3">React</label>
                    </div>
                </li>
            </ul>




            <p class="text-muted text-small">Labels</p>
            <div>
                <p class="d-sm-inline-block mb-1">
                    <a href="#">
                        <span class="badge badge-pill badge-outline-primary mb-1">NEW FRAMEWORK</span>
                    </a>
                </p>

                <p class="d-sm-inline-block mb-1">
                    <a href="#">
                        <span class="badge badge-pill badge-outline-theme-3 mb-1">EDUCATION</span>
                    </a>
                </p>
                <p class="d-sm-inline-block  mb-1">
                    <a href="#">
                        <span class="badge badge-pill badge-outline-secondary mb-1">PERSONAL</span>
                    </a>
                </p>
            </div>

        </div>
    </div>
    <a class="app-menu-button d-inline-block d-xl-none" href="#">
        <i class="simple-icon-options"></i>
    </a>
</div>
@endsection