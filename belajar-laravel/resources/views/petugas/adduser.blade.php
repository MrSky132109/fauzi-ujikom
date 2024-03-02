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
                      <li class="breadcrumb-item active" aria-current="page">Data User</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Tambah User</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="mt-2 col-6 ms-5">
        @error('email')
    <div class="alert alert-warning @error('email')is-invalid @enderror" role="alert">
        @error('email')
        <div class="is-invalid">{{ 'Email Sudah terdaftar silahkan gunakan email lain' }}</div>
        @enderror
    </div>
    @enderror
    <div class="mt-2 col-6 ms-5">
        @error('password')
    <div class="alert alert-warning @error('password')is-invalid @enderror" role="alert">
        @error('password')
        <div class="is-invalid">{{ 'Password minimal 8 huruf' }}</div>
        @enderror
    </div>
    @enderror
        <form action="inputuser" method="POST">
            @csrf
            <div class="mb-1">
                <label for="judul_buku" class="text-dark">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="judul" required>
            </div>
            <div class="mb-1">
                <label for="judul_buku" class="text-dark">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="judul" required>
            </div>
            <div class="mb-1">
                <label for="tahun_terbit" class="text-dark">Password</label>
                <input type="password" name="password" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="tt" required>
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Role</label>
                <select name="role" id="genre" value="{{ old('role') }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"readonly>
                    <option value="member"class="text-dark" selected>Member</option>
                </select>
            </div>
            <div class="mb-1">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection