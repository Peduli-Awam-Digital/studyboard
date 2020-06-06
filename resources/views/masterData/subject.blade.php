@extends('app')

@section('title', 'Mata Pelajaran')

@section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Mata Pelajaran</h1>
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
                    <h5 class="card-title">Daftar Mata Pelajaran</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>MTK</td>
                                <td>Matematika</td>
                                <td>
                                    <button type="button" class="btn btn-primary mb-1">Detail</button>
                                    <button type="button" class="btn btn-secondary mb-1">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>BHS</td>
                                <td>Bahasa Indonesia</td>
                                <td>
                                    <button type="button" class="btn btn-primary mb-1">Detail</button>
                                    <button type="button" class="btn btn-secondary mb-1">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>BHG</td>
                                <td>Bahasa Inggris</td>
                                <td>
                                    <button type="button" class="btn btn-primary mb-1">Detail</button>
                                    <button type="button" class="btn btn-secondary mb-1">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>IPA</td>
                                <td>Ilmu Pengetahuan Alam</td>
                                <td>
                                    <button type="button" class="btn btn-primary mb-1">Detail</button>
                                    <button type="button" class="btn btn-secondary mb-1">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection