@extends('petugas.layout')

@section('contentpetugas')

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
                <h1 class="mb-0 fw-bold">Peminjaman</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    
        @if(session()->has('gagal'))
        <div class="alert alert-warning" role="alert">
            {{ session('gagal') }}
          </div>
        @endif
    </div>
        <form action="{{ route('petugas.updatepeminjaman',['id'=>$data1->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-1">
                <label for="genre" class="text-dark">Tanggal Dikembalikan</label>
                <input type="date" name="actual_return_date" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2">
            </div>
            <div class="mb-1">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
     
       
@endsection