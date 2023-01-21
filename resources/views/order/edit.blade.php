@extends('layouts.home')
@section('title')
Service
@endsection

<!-- ini untuk isi home -->
@section('content')
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                        <div class="card-body">
                                        <h4 class="card-title">Edit Service</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('service.update',[$service->id]) }}" novalidate="">
                                            @method('PUT')
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
                                                <input type="text" name="nama" class="form-control" required="" placeholder="Silahkan input nama" value="{{ $order->nama }}">
                                            </div>
                                             <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" name="email" class="form-control" required="" parsley-type="email" value="{{ $user->email}}">
                                                </div>
                                            <div class="mb-3">
                                                <div class="name">Kelas</div>
                                                <div class="value">
                                                    <select name="kelas" class="form-control">
                                                        <option value="opt1">Pilih Kelas</option>
                                                        <option value="1">Ekonomi</option>
                                                        <option value="2">Bisnis</option>
                                                        <option value="3">Eksekutif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Jumlah Tiket</label>
                                                <div>
                                                    <input type="text" name="jumlah_tiket" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan tanggal keberangkatan yang benar" value="{{ $order->jumlah_tiket }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Harga</label>
                                                <div>
                                                    <input type="text" name="harga" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan harga yang benar" value="{{ $order->harga }}">
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Add
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
@endsection
