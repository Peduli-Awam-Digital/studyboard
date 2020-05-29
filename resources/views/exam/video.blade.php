@extends('app')

@section('title', 'Exam')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Dashboard</h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
            <div class="separator mb-5"></div>
        </div>
        <div class="col-xl-8 col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="scroll dashboard-list-with-thumbs">
                       <iframe width="685" height="455" src="https://www.youtube.com/embed/dKVA8tMXTCQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 mb-4">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection