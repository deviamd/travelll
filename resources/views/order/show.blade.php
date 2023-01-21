@extends('layouts.home')
@section('title')
Order
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Order</h4>

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

                       <td>{{ $order->id }}</td>
                   </tr>
                   {{-- <td>Id Service</td>

                       <td>{{ $services->id }}</td>
                   </tr> --}}
                   <tr>
                       <td>Nama</td>

                       <td>{{ $order->nama}}</td>
                   </tr>
                   <tr>
                    <td>Email</td>

                    <td>{{ $order->email}}</td>
                </tr>
                   <tr>
                       <td>Kelas</td>

                       <td>{{ $order->kelas }}</td>
                   </tr>
                   <tr>
                    <td>Jumlah Tiket</td>

                    <td>{{ $order->jumlah_tiket }}</td>
                </tr>
                <tr>
                    <td>Harga</td>

                    <td>{{ $order->harga }}</td>
                </tr>
                <tr>

                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="{{route('order.index')}}"  role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
