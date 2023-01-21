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
                                            {{-- @method('PUT') --}}
                                            {{ method_field('PUT') }}
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
                                                <input type="text" name="nama_ka" class="form-control" required="" placeholder="Silahkan input nama" value="{{ $service->nama_ka }}">
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
                                                <label>Tanggal Keberangkatan</label>
                                                <div>
                                                    <input type="date" name="tanggal_keberangkatan" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan tanggal keberangkatan yang benar" value="{{ $service->tanggal_keberangkatan }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Kota Asal</label>
                                                <div>
                                                    <input type="text" name="kota_asal" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan kota asal yang benar" value="{{ $service->kota_asal }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Kota Tujuan</label>
                                                <div>
                                                    <input type="text" name="kota_tujuan" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan kota tujuan yang benar" value="{{ $service->kota_tujuan }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Stasiun Asal</label>
                                                <div>
                                                    <input type="text" name="stasiun_asal" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan stasiun asal yang benar" value="{{ $service->stasiun_asal }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Stasiun Tujuan</label>
                                                <div>
                                                    <input type="text" name="stasiun_tujuan" class="form-control" required="" parsley-type="" placeholder="Silahkan masukan stasiun tujuan yang benar" value="{{ $service->stasiun_tujuan }}">
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
