@extends('app')

@section('title', 'Paket Soal')

@section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Soal</h1>
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
                    <h5 class="card-title">Matematika Integral</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Soal</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                <div class="soal">
                                    <p style="text-align:justify">Perhatikan dengan cermat gambar jaring-jaring makanan dibawah ini!</p>
                                    <p style="text-align:justify"><img alt="3-52" src="https://blog.ruangguru.com/hs-fs/hubfs/3-52.png?width=556&amp;name=3-52.png" style="width:556px" /></p>
                                    <p style="text-align:justify">Berdasarkan gambar diatas, pernyataan yang paling tepat adalah&hellip;</p>
                                </div>
                                </td>
                                <td>
                                    <a href="{{ url('exam/package/detail') }}" class="btn btn-secondary mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                <div class="soal">
                                    <p style="text-align:justify">Tempe merupakan produk pangan hasil fermentasi. Fermentasi ini dilakukan dengan bantuan jamur…</p>
                                </div>
                                </td>
                                <td>
                                    <a href="{{ url('exam/package/detail') }}" class="btn btn-secondary mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                <div class="soal">
                                    <p style="text-align:justify">Saat praktikum Fisika, Anisa memanaskan sebuah bimetal yang terbuat dari lempengan tembaga dan besi dengan api. Jika koefisien muai panjang tembaga adalah 17 x 10-6 /ºC sedangkan besi 12 x 10-6 /ºC, maka bentuk bimetal yang terjadi adalah…</p>
                                </div>
                                </td>
                                <td>
                                    <a href="{{ url('exam/package/detail') }}" class="btn btn-secondary mb-1">Detail</a>
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