<?php

namespace App\Http\Livewire\Peminjam;

use App\Models\buku as Modelsbuku;
use Livewire\Component;
use Livewire\WithPagination;

class Buku extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.peminjam.buku',[
            'buku'=>Modelsbuku::latest()->paginate(12)
        ]);
    }
}
