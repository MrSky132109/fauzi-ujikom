@extends('member.layout')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data Peminjaman</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Data Peminjaman</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <a href="/member/cetakpdf" class="btn btn-success text-light">Cetak pdf</a>
    </div>
    <div class="table-responsive ">
        <table class="table table-responsive-lg table-bordered">
            <thead>
                <tr class="bg-info">
                    <th class="text-light" scope="col">Id</th>
                    <th class="text-light" scope="col">User</th>
                    <th class="text-light" scope="col">Buku</th>
                    <th class="text-light" scope="col">Tanggal Meminjam</th>
                    <th class="text-light" scope="col">Tanggal Mengembalikam</th>
                    <th class="text-light" scope="col">Dikembalikan Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayatList as $data)
                <tr class="{{ $data->actual_return_date == null ? '' : ($data->return_date < $data->actual_return_date ? 'bg-danger' : 'bg_success') }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->buku->judul_buku ?? '' }}</td>
                    <td>{{ $data->rent_date }}</td>
                    <td>{{ $data->return_date }}</td>
                    <td>{{ $data->actual_return_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection