@extends('app')

@section('title', 'Page Title')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Blank Page</h1>
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
</div>

@section('js')
    <script type="text/javascript" src="{{ asset('js/pages/home.js') }}"></script>
@endsection

@endsection