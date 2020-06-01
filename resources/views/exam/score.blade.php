@extends('app')

@section('title', 'Exam')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Latihan IPA Rantai Makanan</h1>
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
    </div>

    <div class="row">

        <div class="col-12">
            <div class="row icon-cards-row mb-4">
                <div class="col-md-3 col-lg-2 col-sm-4 col-6 mb-4">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsminds-clock"></i>
                            <p class="card-text font-weight-semibold mb-0">Pending Orders</p>
                            <p class="lead text-center">16</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-6 mb-4">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsminds-clock"></i>
                            <p class="card-text font-weight-semibold mb-0">Pending Orders</p>
                            <p class="lead text-center">16</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-6 mb-4">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsminds-clock"></i>
                            <p class="card-text font-weight-semibold mb-0">Pending Orders</p>
                            <p class="lead text-center">16</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection