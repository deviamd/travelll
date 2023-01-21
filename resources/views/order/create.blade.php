@extends('layouts.home')
@section('title')
Order
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

                        <h4 class="card-title">Order</h4>
                        <form class="custom-validation" method="POST" action="{{ route('order.store') }}" novalidate="">
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
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required="" placeholder="Silahkan input Nama">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <div>
                                    <input type="email" name="email"   required="" class="form-control" required="" parsley-type="email" placeholder="Silahkan masukan email yang benar">
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
                                <div class="name">Kelas</div>
                                <div class="value">
                                    <select name="id_service" class="form-control">
                                        <option value="opt1">Pilih Kelas</option>
                                        @foreach ($order as $key)

                                        <option value="{{ $key->id }}">{{ $key->nama_ka }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Jumlah Tiket</label>
                                <input type="text" name="jumlah_tiket" class="form-control" required="" placeholder="Silahkan input Jumlah Tiket">
                            </div>
                            <div class="mb-3">
                                <label>harga</label>
                                <input type="text" name="harga" class="form-control" required="" placeholder="Silahkan input Harga">
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
