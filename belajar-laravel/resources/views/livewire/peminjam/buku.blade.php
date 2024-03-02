<div class="container">
   
    <div class="row">
        @foreach ($buku as $item)
            <div class="col-md-3">
                <div class="card mb-4 shadow" style="cursor: pointer">
                    <img src="/storage/cover-buku/{{ $item->image }}" class="card-img-top" alt="{{ $item->judul_buku }}" width="200" height="300">
                    <div class="card-body">
                      <h5 class="card-title"><strong>{{ $item->judul_buku }}</strong></h5>
                      <p class="card-text">{{ $item->penulis }}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        @endforeach
        
    </div>

    <div class="row">
        {{ $buku->links() }}
    </div>
</div>

