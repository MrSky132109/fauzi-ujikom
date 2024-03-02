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
                <h1 class="mb-0 fw-bold">Data Kategori</h1> 
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <a href="addkategori" class="btn btn-success text-light">Add Data</a>
    </div>
    
    <div class="table-responsive ">
        <table class="table table-striped table-hover table-responsive-lg table-bordered ">
            <thead>
                <tr class="bg-info">
                    <th class="text-light" scope="col">Id Kategori</th>
                    <th class="text-light" scope="col">Kategori</th>
                    <th class="text-light" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoriList as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td><a href="{{ route('admin.editkategori',['id' => $data->id]) }}" ><span class="mdi mdi-pencil fs-3"></span></a> | <a data-bs-toggle="modal" data-bs-target="#modal-hapus{{ $data->id }}" >
                        <span class="mdi mdi-delete fs-3" style="color: red"></span></a></td>
                </tr>
                <!-- Modal -->
                    <div class="modal fade" id="modal-hapus{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Validate</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                            <form action="{{ route('admin.deletekategori', ['id'=>$data->id]) }}"method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Hapus</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
        {{ $kategoriList->links() }}

@endsection