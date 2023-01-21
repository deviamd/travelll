@extends('layouts.home')
@section('title')
Service
@endsection

<!-- ini untuk isi home -->
@section('content')
{{-- <div  id="layoutSidenav_content"> --}}
    <main>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-5">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Service</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-9">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- end page title -->
                    <div>
                        <a class="btn btn-primary waves-effect waves-light mt-5 mb-4" href="{{ route('service.create')}}" role="button"> Create (+)</a>
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabel Service</h4>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <thead>
                                                <tr style="cursor: pointer;">
                                                    <th>Id</th>
                                                    <th>Nama KA</th>
                                                    <th>Kelas</th>
                                                    <th>Tanggal Keberangkatan</th>
                                                    <th>Kota Asal</th>
                                                    <th>Kota Tujuan</th>
                                                    <th>Stasiun Asal</th>
                                                    <th>Stasiun Tujuan</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($service as $row)
                                                <tr>

                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->nama_ka }}</td>
                                                    <td>{{ $row->kelas }}</td>
                                                    <td>{{ $row->tanggal_keberangkatan }}</td>
                                                    <td>{{ $row->kota_asal }}</td>
                                                    <td>{{ $row->kota_tujuan }}</td>
                                                    <td>{{ $row->stasiun_asal }}</td>
                                                    <td>{{ $row->stasiun_tujuan }}</td>
                                                    <td>
                                                    <form method="post" action="{{ route('service.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')">
                                                        @csrf
                                                    {{ method_field('DELETE') }}
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('service.edit',[$row->id]) }}" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                        <i class="fas fa-trash-alt"></i></button>
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('service.show',[$row->id]) }}" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </form>
                                                        {{-- {{ $user->appends(Request::all())->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
        </div>
    </main>
</div>
@endsection
