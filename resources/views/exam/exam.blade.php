@extends('app')

@section('title', 'Exam')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Latihan - IPA Rantai Makanan</h1>
                <div class="text-zero top-right-button-container">
                    <a href="/exam/discuss" class="btn btn-primary btn-lg top-right-button mr-1">SELESAI</a>
                </div>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item active" aria-current="page">60:00:00</li>
                    </ol>
                </nav>
            </div>
            <div class="separator mb-5"></div>
        </div>
        <div class="col-12 col-md-12 col-xl-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-5">
                        <h5 class="card-title">Soal No. 1</h5>
                        <div class="soal">
                            <p style="text-align:justify">Perhatikan dengan cermat gambar jaring-jaring makanan dibawah ini!</p>
                            <p style="text-align:justify"><img alt="3-52" src="https://blog.ruangguru.com/hs-fs/hubfs/3-52.png?width=556&amp;name=3-52.png" style="width:556px" /></p>
                            <p style="text-align:justify">Berdasarkan gambar diatas, pernyataan yang paling tepat adalah&hellip;</p>
                            <p style="text-align:justify">A. rumput dan pohon berperan sebagai dekomposer</p>
                            <p style="text-align:justify">B. rumput dan pohon berperan sebagai produsen</p>
                            <p style="text-align:justify">C. rumput sebagai dekomposer dan pohon sebagai produsen</p>
                            <p style="text-align:justify">D. rumput sebagai produsen dan pohon sebagai dekomposer</p>
                        </div>
                    </div>

                    <div class="mt-4 feedback-container">
                        <div class="text-left">
                            <p class="feedback-answer">Jawaban</p>
                            <button style="width:70px;" type="button" class="btn btn-outline-primary mb-1">A</button>&nbsp;
                            <button style="width:70px;" type="button" class="btn btn-outline-primary mb-1">B</button>&nbsp;
                            <button style="width:70px;" type="button" class="btn btn-outline-primary mb-1">C</button>&nbsp;
                            <button style="width:70px;" type="button" class="btn btn-outline-primary mb-1">D</button>&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 col-xl-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Daftar Soal</h5>
                    @for ( $i = 1; $i<=20 ; $i++)
                        <button  style="width:70px;" type="button" class="btn btn-outline-primary mb-1">{{ $i }}</button>&nbsp;
                    @endfor
                </div>
            </div>
            
        </div>

    </div>
</div>
@endsection