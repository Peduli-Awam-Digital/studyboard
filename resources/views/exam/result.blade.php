@extends('app')

@section('title', 'Exam')

@section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Daftar Nilai Ulangan</h1>
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

    <div class="row mb-4">
        <div class="col-lg-12 col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPA Rantai Makanan</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah Benar</th>
                                <th scope="col">Waktu Pengerjaan</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Zaid</td>
                                <td>25</td>
                                <td>45:10</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Zayna</td>
                                <td>20</td>
                                <td>30:10</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Zulfa</td>
                                <td>22</td>
                                <td>48:10</td>
                                <td>77,5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection