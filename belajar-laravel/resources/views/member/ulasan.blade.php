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
                      <li class="breadcrumb-item active" aria-current="page">Rating Buku</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Rating Buku</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    
        <div class="mt-2 col-6 ms-5">
            @error('rating')
        <div class="alert alert-warning @error('rating')is-invalid @enderror" role="alert">
            @error('rating')
            <div class="is-invalid">{{ 'rating harus antara 1 -5' }}</div>
            @enderror
        </div>
        @enderror
    </div>
        <form action="inputulasan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <select name="user_id" id="genre" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"readonly>
                    <option value="{{Auth::user()->id}}" class="text-dark">{{Auth::user()->name}}</option>
                </select>
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Buku</label>
                <select name="buku_id" id="genre" class="form-control userbox shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"required>
                    <option value="" class="text-dark">Pilih Buku</option>
                    @foreach($bukuList as $data2)
                    <option value="{{ $data2->id }}" class="text-dark">{{ $data2->judul_buku }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-1">
                <label for="exampleFormControlTextarea1" class="form-label text-dark">Ulasan</label>
                <textarea value="{{ old('ulasan') }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" name="ulasan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Rating</label>
                <input type="number" value="{{ old('rating') }}" name="rating" placeholder="Rating antara 1-5" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2">
            </div>
            <div class="mb-1">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
     
       
@endsection