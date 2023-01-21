@extends('layouts.home')
@section('title')
Service
@endsection

<!-- ini untuk isi home -->
@section('content')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Service</h4>
                        <form class="custom-validation" method="POST" action="{{ route('service.store') }}" novalidate="">
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
                                <label>Nama KA</label>
                                <input type="text" name="nama_ka" class="form-control" required="" placeholder="Silahkan input Nama KA">
                            </div>
                             <div class="mb-3">
                                <div class="name">Kelas</div>
                                <div class="value">
                                    <select name="kelas" class="form-control">
                                        <option value="opt1">Pilih Kelas</option>
                                        <option value="1">Ekonomi</option>
                                        <option value="2">Bisnis</option>
                                        <option value="2">Eksekutif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Keberangkatan</label>
                                <input type="date" name="tanggal_keberangkatan" class="form-control" required="" placeholder="Silahkan input Tanggal Keberangkatan">
                            </div>
                            <div class="mb-3">
                                <label>Kota Asal</label>
                                <input type="text" name="kota_asal" class="form-control" required="" placeholder="Silahkan input Kota Asal">
                            </div>
                            <div class="mb-3">
                                <label>Kota Tujuan</label>
                                <input type="text" name="kota_tujuan" class="form-control" required="" placeholder="Silahkan input Kota Tujuan">
                            </div>
                            <div class="mb-3">
                                <label>Stasiun Asal</label>
                                <input type="text" name="stasiun_asal" class="form-control" required="" placeholder="Silahkan input Stasiun Asal">
                            </div>
                            <div class="mb-3">
                                <label>Stasiun Tujuan</label>
                                <input type="text" name="stasiun_tujuan" class="form-control" required="" placeholder="Silahkan input Stasiun Tujuan">
                            </div>
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
