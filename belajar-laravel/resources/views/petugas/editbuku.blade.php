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
                      <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Edit Buku</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
   
        <form action="{{ route('petugas.update',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-1">
                <label for="cover" class="text-dark">Cover Buku</label>
                <input type="file" name="image" value="{{ $data->image }}"class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="image" >
            </div>
            <div class="mb-1">
                <label for="judul_buku" class="text-dark">Judul Buku</label>
                <input type="text" value="{{ $data->judul_buku }}"name="judul_buku" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="judul" required>
            </div>
            <div class="mb-1">
                <label for="tahun_terbit" class="text-dark">Tahun Terbit</label>
                <input type="date" value="{{ $data->tahun_terbit }}" name="tahun_terbit" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="tt" required>
            </div>
            <div class="mb-1">
                <label for="penerbit" class="text-dark">Penerbit</label>
                <input type="text" value="{{ $data->penerbit }}" name="penerbit" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="penerbit" required>
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Genre</label>
                <select name="genre" id="genre" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"required>
                    <option value="{{ $data->genre }}"class="text-dark">{{ $data->genre }}</option>
                    <option value="horor" class="text-dark">Horor</option>
                    <option value="misteri" class="text-dark">Misteri</option>
                    <option value="drama"class="text-dark">Drama</option>
                    <option value="thriller" class="text-dark">Thriller</option>
                    <option value="romance" class="text-dark">Romance</option>
                    <option value="komedi" class="text-dark">Komedi</option>
                    <option value="self-improvment" class="text-dark">Self Improvmet</option>
                    <option value="religi" class="text-dark">Religi</option>
                </select>
            </div>
            <div class="mb-1">
                <label for="genre" class="text-dark">Kategori</label>
                <select name="kategori_id" id="genre" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2"required>
                    @foreach($kategoriList as $data1)
                    <option value="{{ $data1->id }}" class="text-dark">{{ $data1->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-1">
                <label for="penulis" class="text-dark">Penulis</label>
                <input type="text" value="{{ $data->penulis }}" name="penulis" class="form-control shadow-none p-2 mb-5 bg-light rounded border-end-0 border-top-0 border-bottom-0 border-dark border-2" id="penulis" required>
            </div>
            <div class="mb-1">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection