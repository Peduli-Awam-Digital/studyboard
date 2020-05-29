@extends('app')

@section('title', 'Data Reimburesement')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>{{ $title }}</h1>

            <div class="top-right-button-container">
               
                <div class="btn-group">
                    <button class="btn btn-outline-primary btn-lg btn-act-create" type="button">
                        Create
                    </button>
                </div>
                    
            </div>

            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Reimburesement</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Request</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
            <div class="mb-2">
                <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                    role="button" aria-expanded="true" aria-controls="displayOptions">
                    Display Options
                    <i class="simple-icon-arrow-down align-middle"></i>
                </a>
                <div class="collapse dont-collapse-sm" id="displayOptions">
                    <div class="d-block d-md-inline-block">
                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                            <input class="form-control" placeholder="Search Table" id="searchDatatable">
                        </div>
                    </div>
                    <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                        <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            10
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">5</a>
                            <a class="dropdown-item active" href="#">10</a>
                            <a class="dropdown-item" href="#">20</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
            <table id="datatableReimburesement" class="data-table responsive nowrap">
                <thead>
                    <tr>
                        <th class="empty">Name</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>
                            <p class="list-item-heading">{{ $data['name'] }}</p>
                        </td>
                        <td>
                            <p class="list-item-heading">{{ $data['date'] }}</p>
                        </td>
                        <td>
                            <p class="list-item-heading">{{ $data['total'] }}</p>
                        </td>
                        <td>
                            <p class="list-item-heading">{!! $data['status'] !!}</p>
                        </td>
                        <td>
                            {!! $data['action'] !!}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ url('css/vendor/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/datatables.responsive.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/vendor/bootstrap-float-label.min.css') }}" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ url('js/vendor/datatables.min.js') }}"></script>
<script src="{{ url('js/app/reimburesement/request/data.js') }}"></script>
@endsection

        