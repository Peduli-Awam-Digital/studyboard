@extends('app')

@section('title', 'Pembahasan')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Pembahasan - IPA Rantai Makanan</h1>
                <div class="text-zero top-right-button-container">
                    {{-- <button type="button" class="btn btn-primary btn-lg top-right-button mr-1">KEMBALI</button> --}}
                    <a href="/exam/package" class="btn btn-primary btn-lg top-right-button mr-1">KEMBALI</a>
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
                        <h5 class="card-title">Pembahasan No. 1</h5>
                        <div class="soal">
                            <p style="text-align:justify">Perhatikan dengan cermat gambar jaring-jaring makanan dibawah ini!</p>
                            <p style="text-align:justify"><img alt="3-52" src="https://blog.ruangguru.com/hs-fs/hubfs/3-52.png?width=556&amp;name=3-52.png" style="width:556px" /></p>
                            <p style="text-align:justify">Berdasarkan gambar diatas, pernyataan yang paling tepat adalah&hellip;</p>
                        </div>
                        <div class="pembahasan">
                            <b>Jawaban : B. rumput dan pohon berperan sebagai produsen</b>
                            <p style="text-align:justify">Suatu organisme selalu bergantung pada organisme yang lain dan lingkungannya. Saling ketergantungan ini akan membentuk suatu pola interaksi. Apabila pola interaksi antar komponen biotik dan abiotik ini terganggu maka akan terjadi ketidakteraturan dalam ekosistem tersebut. Pada jaring-jaring makanan di atas, rumput dan pohon merupakan produsen. Kedua organisme tersebut mampu membuat makanan sendiri melalui peristiwa fotosintesis. Selain itu, semua organisme di dalam jaring-jaring makanan apabila mati akan diuraikan oleh pengurai. Contoh organisme pengurai adalah bakteri dan fungi.</p>
                        </div>
                    </div>

                     <div class="position-relative mb-5">
                        <video id="my-video" class="video-js card-img video-content" controls
                            preload="auto" poster="img/subpage-video-poster.jpg"
                            data-setup="{}">
                            <source
                                src="{{ url('video/discuss.mp4') }}"
                                type='video/mp4'>
                        </video>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 col-xl-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Daftar Soal</h5>
                    @for ( $i = 1; $i<=17 ; $i++)
                        <button  style="width:70px;" type="button" class="btn btn-outline-primary mb-1">{{ $i }}.A</button>&nbsp;
                    @endfor
                    <button  style="width:70px;" type="button" class="btn btn-secondary mb-1">18.B</button>&nbsp;
                    <button  style="width:70px;" type="button" class="btn btn-danger mb-1">19.C</button>&nbsp;
                    <button  style="width:70px;" type="button" class="btn btn-light mb-1">20.D</button>&nbsp;
                </div>
            </div>
            
        </div>

    </div>
</div>
@endsection