@extends('layouts.home')
@section('title')
Transaksi
@endsection

<!-- ini untuk isi home -->
@section('content')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Transaksi</h4>
                        <form class="custom-validation" method="POST" action="{{ route('transaksi.store') }}" novalidate="">
                            @csrf
                            @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
            </div>
            @endif



                            <div class="mb-3">
                                <label>Total Bayar</label>
                                <input type="text" name="total_bayar" class="form-control" required="" placeholder="Silahkan input Total Bayar">
                            </div>
                             <div class="mb-3">
                                <div class="name">Metode Pembayaran</div>
                                <div class="value">
                                    <select name="metode_pembayaran" class="form-control">
                                        <option value="opt1">Pilih Metode Pembayaran</option>
                                        <option value="1">gopay</option>
                                        <option value="2">e-banking</option>
                                        <option value="2">supermarket</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="date" name="tanggal_pembayaran" class="form-control" required="" placeholder="Silahkan input Tanggal Pembayaran">
                                </div>
                            </div>
                            

                            <div class="mb-3">
                                <div class="name">Kelas</div>
                                <div class="value">
                                    <select name="id_orders" class="form-control">
                                        <option value="opt1">Pilih Kelas</option>
                                        <option value="1">Ekonomi</option>
                                        <option value="2">Bisnis</option>
                                        <option value="2">Eksekutif</option>
                                    </select>
                                        @foreach ($transaksi as $key)

                                        <option value="{{ $key->id }}">{{ $key->nama_ka }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                     <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                     </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div> <!-- page-content -->
    </div> <!-- main-content -->
</div>
@endsection
