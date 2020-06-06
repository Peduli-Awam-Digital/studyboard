@extends('app')

@section('title', 'Murid')

@section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Murid</h1>
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
                    <h5 class="card-title">Daftar Murid</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Murid</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>201143501152</td>
                                <td>Agus Setiadi</td>
                                <td>VII A</td>
                                <td>
                                    <button type="button" class="btn btn-primary mb-1">Detail</button>
                                    <button type="button" class="btn btn-secondary mb-1">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>201143501153</td>
                                <td>Paduka Rhida</td>
                                <td>VII B</td>
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