@extends('app')

@section('title', 'Request Reimburesement')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <h1>{{ $title }}</h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Reimburesement</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Request</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
            <div class="separator mb-5"></div>


        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="mb-4">Form {{ $title }}</h5>
                    <form>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="start"
                                    placeholder="Start" />
                                <span class="input-group-addon"></span>
                                <input type="text" class="input-sm form-control" name="end"
                                    placeholder="End" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="text" class="form-control" id="total"
                                placeholder="Rp 20.000, -">
                        </div>

                        <button type="submit" class="btn btn-primary mb-0 btn-act-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('css')
<link rel="stylesheet" href="{{ url('css/vendor/select2.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/bootstrap-datepicker3.min.css') }}" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ url('js/vendor/select2.full.js')}}"></script>
<script src="{{ url('js/vendor/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('js/app/reimburesement/request/create.js') }}"></script>
@endsection