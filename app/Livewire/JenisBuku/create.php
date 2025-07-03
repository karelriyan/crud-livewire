<?php

namespace App\Livewire\JenisBuku;

use App\Models\JenisBuku;
use Livewire\Component;

class Create extends Component
{
    public $nama_jenis_buku;

    public function store()
    {
        $this->validate([
            'nama_jenis_buku' => 'required'
        ]);

        JenisBuku::create([
            'nama_jenis_buku' => $this->nama_jenis_buku
        ]);

        return $this->redirectRoute('jenis-buku.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.jenis-buku.create');
    }
}