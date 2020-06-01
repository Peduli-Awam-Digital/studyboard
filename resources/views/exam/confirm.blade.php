@extends('app')
@section('title','Konfirmasi Mulai Ujian')
    
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <h1>Ulangan IPA Bab Hewan</h1>
            <div class="separator mb-5"></div>


        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="mb-4">Informasi Siswa</h5>
                    <form>
                        <div class="form-group">
                            <label for="questionName">Nama</label>
                            <input type="text" class="form-control" id="questionName" value="Zaid Qurani" disabled />
                        </div>
                        <div class="form-group">
                            <label for="questionName">Kelas</label>
                            <input type="text" class="form-control" id="questionName" value="VII B" disabled />
                        </div>
                        
                        <div class="form-group">
                            <label for="questionName">Token</label>
                            <input type="text" class="form-control" id="questionName" value=""/>
                        </div>

                        {{-- <button type="submit" class="btn btn-primary mb-0">Kerjakan Soal</button> --}}
                        <a href="/exam" class="btn btn-primary mb-0">Kerjakan Soal</a>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="mb-4">Informasi Soal</h5>
                    <form>
                        <div class="form-group">
                            <label for="questionName">Nama Paket Soal</label>
                            <input type="text" class="form-control" id="questionName" value="Ulangan IPA Bab Hewan" disabled />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="questionName">Jumlah Butir Soal</label>
                                <input type="text" class="form-control" id="questionName" value="50" disabled />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="questionName">Waktu Pengerjaan</label>
                                <input type="text" class="form-control" id="questionName" value="90 menit" disabled />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="questionName">Dibuat Oleh</label>
                                <input type="text" class="form-control" id="questionName" value="Muhammad Zulfikar" disabled />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="questionName">Tingkat</label>
                                <input type="text" class="form-control" id="questionName" value="VII" disabled />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="questionName">Kategori Soal</label>
                                <input type="text" class="form-control" id="questionName" value="Ulangan Harian" disabled />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="questionName">Mata Pelajaran</label>
                                <input type="text" class="form-control" id="questionName" value="Matematika" disabled />
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection