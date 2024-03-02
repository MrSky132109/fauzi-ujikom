@extends('admin.layout')

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
                      <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Edit Kategori</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="mt-2 col-6 ms-5">
        @error('kategori')
    <div class="alert alert-warning @error('kategori')is-invalid @enderror" role="alert">
        @error('kategori')
        <div class="is-invalid">{{ 'Kategori sudah ada, silahkan tambahkan data yang berbeda' }}</div>
        @enderror
    </div>
    @enderror
        <form action="{{ route('admin.updatekategori',['id'=>$data1->id]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-1">
                <label for="judul_buku" class="text-dark">Name</label>
                <input type="text" name="kategori" value="{{ $data1->kategori }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="judul" required>
            </div>
            <div class="mb-1">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection