<?php 
namespace App\Livewire\JenisBuku; 
use Livewire\Component; 
use Illuminate\Support\Facades\DB; 
use App\Models\JenisBuku; 
class Edit extends Component 
{ 
public $JenisBuku_ID; 
public $nama_JenisBuku; 
public function mount($id) 
{ 
} 
// Ambil data JenisBuku berdasarkan ID 
$data = JenisBuku::findOrFail($id); 
if ($data) { 
$this->JenisBuku_ID = $data->id; 
$this->nama_JenisBuku = $data->nama_JenisBuku; 
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
return $this->redirectRoute('JenisBuku.index', navigate: true); 
} 
public function render() 
{ 
} 
} 
return view('livewire.jenis-buku.edit'); 
@section('title','Edit Jenis buku') 
<div class="row-xl" style="padding:10px;"> 
<div class="col-md-12"> 
<div class="card shadow-sm mb-4"> 
<h5 class="card-header">  Edit Data Jenis buku </h5> 
<div class="card-body"> 
<form wire:submit.prevent="update" enctype="multipart/form-data"> 
<div class="row mb-3"> 
<label class="col-md-2 col-form-label" 
for="nama_jenis_buku">Nama Jenis Buku</label> 
<div class="col-md-6"> 
<input type="text" class="form-control 
@error('nama_jenis_buku') is-invalid @enderror" name="nama_jenis_buku" 
id="nama_jenis_buku" placeholder="Nama Jenis Buku" 
wire:model="nama_jenis_buku" /> 
@if ($errors->has('nama_jenis_buku')) 
<div class="alert alert-danger mt-2"> 
{{ $errors->first('nama_jenis_buku') 
}} 
text-white">Simpan</button> 
</div> 
@endif 
</div> 
</div> 
<div class="row mb-3"> 
<div class="col-md-6 offset-md-2"> 
<button type="submit" class="btn btn-primary 
<a href="{{route('jenis_buku.index')}}" 
wire:navigate class="btn btn-danger text-white">Kembali</a> 
</div> 
</div> 
</form> 
</div> 
</div> 
</div> 
</div>