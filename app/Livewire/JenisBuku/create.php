<?php 
namespace App\Livewire\JenisBuku; 
use App\Models\JenisBuku; 
use Livewire\Component; 
class Create extends Component 
{ 
} 
public $nama_jenis_buku; 
function store() 
{ 
} 
$this->validate([ 
'nama_jenis_buku'   => 'required' 
]); 
JenisBuku::create([ 
'nama_jenis_buku'   => $this->nama_jenis_buku 
]); 
return $this->redirectRoute('jenis-buku.index', navigate: true); 
public function render() 
{ 
} 
return view('livewire.jenis-buku.create'); 
@section('title', 'Tambah Jenis buku') 
<div class="row-xl" style="padding:10px;"> 
<div class="col-md-12"> 
<div class="card shadow-sm mb-4"> 
<h5 class="card-header"> Tambah Data Jenis buku </h5> 
<div class="card-body"> 
<form wire:submit.prevent="store" enctype="multipart/form
data"> 
<div class="row mb-3"> 
<label class="col-md-2 col-form-label" 
for="nama_jenis_buku">Nama Jenis Buku</label> 
<div class="col-md-6"> 
<input type="text" class="form-control 
@error('nama_jenis_buku') is-invalid @enderror" 
name="nama_jenis_buku" id="nama_jenis_buku" 
placeholder="Nama Jenis Buku" 
wire:model="nama_jenis_buku" /> 
@if ($errors->has('nama_jenis_buku')) 
<div class="alert alert-danger mt-2"> 
{{ $errors->first('nama_jenis_buku') }} 
</div> 
@endif 
</div> 
</div> 
<div class="row mb-3"> 
<div class="col-md-6 offset-md-2"> 
<button type="submit" class="btn btn-primary 
text-white">Simpan</button> 
wire:navigate 
<a href="{{ route('jenis_buku.index') }}" 
class="btn btn-danger text-white">Kembali</a> 
</div> 
</div> 
</form> 
</div> 
</div> 
</div> 
</div>