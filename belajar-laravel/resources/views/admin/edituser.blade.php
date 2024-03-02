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
                      <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Edit User</h1> 
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
        <form action="{{ route('admin.updateuser',['id'=>$data1->id]) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- <div class="mb-1">
                <label for="cover" class="text-dark">Foto User</label>
                <input type="file" name="image" value="{{ $data1->image }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="image" >
            </div> --}}
            <div class="mb-1">
                <label for="judul_buku" class="text-dark">Name</label>
                <input type="text" name="name" value="{{ $data1->name }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="judul" required>
            </div>
            <div class="mb-1">
                <label for="judul_buku" class="text-dark">Email</label>
                <input type="email" name="email" value="{{ $data1->email }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="judul" required>
            </div>
            <div class="mb-1">
                <label for="tahun_terbit" class="text-dark">Password</label>
                <input type="password" name="password" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="tt" >
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Role</label>
                <select name="role" id="genre" value="{{ $data1->role }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"required>
                    <option value="{{ $data1->role }}"class="text-dark">{{ $data1->role }}</option>
                    <option value="admin" class="text-dark">Admin</option>
                    <option value="petugas" class="text-dark">Petugas</option>
                    <option value="member"class="text-dark">Member</option>
                </select>
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Status</label>
                <select name="status" id="genre" value="{{ $data1->status }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"required>
                    <option value="{{ $data1->status }}"class="text-dark">{{ $data1->status }}</option>
                    <option value="aktif" class="text-dark">aktif</option>
                    <option value="tidak-aktif" class="text-dark">tidak-aktif</option>
                    
                </select>
            </div>
            <div class="mb-1">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection