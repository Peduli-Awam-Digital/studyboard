@extends('app')

@section('title', 'Exam')

@section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Daftar Soal</h1>
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
                    <h5 class="card-title">Daftar Soal</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Soal</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Kategori Soal</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Jumlah Soal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mengenal Pantun</td>
                                <td>Bahasa Indonesia</td>
                                <td>Ulangan Harian</td>
                                <td>VII</td>
                                <td>30</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection