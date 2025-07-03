<?php 
namespace App\Livewire\JenisBuku; 
use App\Models\JenisBuku; 
use Livewire\Component; 
use Livewire\WithPagination; 
class Index extends Component 
{ 
use WithPagination; 
protected $paginationTheme = 'bootstrap'; 
public $search = ''; // properti untuk pencarian 
public $sortField = 'created_at'; // kolom untuk sorting 
public $sortDirection = 'desc'; //arah sorting 
function destroy($id) 
{ 
JenisBuku::destroy($id); 
Alert::toast('Berhasil hapus data', 'success'); 
$this->idToDelete = null; 
return $this->redirectRoute('jenis-buku.index', navigate: true); 
} 
function sortBy($field) 
{ 
if ($this->sortField === $field) { 
$this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 
'asc'; // arah sorting 
} else { 
$this->sortField = $field; 
$this->sortDirection = 'asc'; 
} 
} 
public function render() 
{ 
$dataJenisBuku = JenisBuku::when($this->search, fn($q) => 
$q->where('nama_jenis_buku', 'like', '%' . $this->search . '%') 
) ->orderBy($this->sortField, $this->sortDirection) ->paginate(10);        
return view('livewire.jenis-buku.index', 
compact('dataJenisBuku')); 
} 
}