@extends('layouts.home')
@section('title')
Service
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Service</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-6">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-11">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title"> Table</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Id</td>

                       <td>{{ $service->id }}</td>
                   </tr>
                   <tr>
                       <td>Nama KA</td>

                       <td>{{ $service->nama_ka}}</td>
                   </tr>
                   <tr>
                       <td>Kelas</td>

                       <td>{{ $service->kelas }}</td>
                   </tr>
                   <tr>
                    <td>Tanggal Keberangkatan</td>

                    <td>{{ $service->tanggal_keberangkatan }}</td>
                </tr>
                <tr>
                    <td>Kota Asal</td>

                    <td>{{ $service->kota_asal }}</td>
                </tr>
                <tr>
                    <td>Kota Tujuan</td>

                    <td>{{ $service->kota_tujuan }}</td>
                </tr>
                <tr>
                    <td>Stasiun Asal</td>

                    <td>{{ $service->stasiun_asal }}</td>
                </tr>
                <tr>
                    <td>Stasiun Tujuan</td>

                    <td>{{ $service->stasiun_tujuan }}</td>
                </tr>

                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="{{route('service.index')}}"  role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
