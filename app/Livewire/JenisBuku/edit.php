<?php

namespace App\Livewire\JenisBuku;

use Livewire\Component;
use App\Models\JenisBuku;

class Edit extends Component
{
    public $JenisBuku_ID;
    public $nama_JenisBuku;

    public function mount($id)
    {
        // Ambil data JenisBuku berdasarkan ID
        $data = JenisBuku::findOrFail($id);
        if ($data) {
            $this->JenisBuku_ID = $data->id;
            $this->nama_JenisBuku = $data->nama_jenis_buku;
        }
    }

    public function update()
    {
        $this->validate([
            'nama_JenisBuku' => 'required|max:100',
        ]);

        // Update data
        JenisBuku::findOrFail($this->JenisBuku_ID)->update([
            'nama_JenisBuku' => $this->nama_JenisBuku,
        ]);

        // Redirect
        return $this->redirectRoute('jenis-buku.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.jenis-buku.edit');
    }
}