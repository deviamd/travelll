@extends('layouts.home')
@section('title')
Order
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
                                <h4 class="mb-sm-0">Order</h4>
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
                        <a class="btn btn-primary waves-effect waves-light mt-5 mb-4" href="{{ route('order.create')}}" role="button"> Create (+)</a>
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabel Order</h4>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <thead>
                                                <tr style="cursor: pointer;">
                                                    <th>Id</th>
                                                    <th>Id Service</th>
                                                    <th>Nama </th>
                                                    <th>Email</th>
                                                    <th>Kelas</th>
                                                    <th>Jumlah Tiket</th>
                                                    <th>Harga</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $row)
                                                <tr>

                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->id_service }}</td>
                                                    <td>{{ $row->nama}}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->kelas }}</td>
                                                    <td>{{ $row->jumlah_tiket }}</td>
                                                    <td>{{ $row->harga }}</td>
                                                    <td>
                                                    <form method="post" action="{{ route('order.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->nama}}?')">
                                                        @csrf
                                                    {{ method_field('DELETE') }}
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('order.edit',[$row->id]) }}" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                        <i class="fas fa-trash-alt"></i></button>
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('order.show',[$row->id]) }}" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                        </a>
                                                    </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
