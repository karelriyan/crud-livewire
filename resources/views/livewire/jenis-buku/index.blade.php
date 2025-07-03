@section('title', 'Data Jenis Buku')
<div>
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                Data Jenis Buku
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{ route('jenis
buku.create') }}" wire:navigate>Tambah Data Jenis
                    Buku</a>
                <hr>
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Pencarian..."
                    class="form-control">
                <hr>
                <table class="table table-bordered table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>
                                <a href="#" wire:click.prevent="sortBy('nama_jenis_buku')">
                                    Nama Jenis Buku
                                </a>
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataJenisBuku as $item)
                                                    <tr>
                                                        <td>{{ $item->nama_jenis_buku }}</td>
                                                        <td>
                                                            <button href="{{ route('jenis
                            buku.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</button>
                                                            <button wire:click="destroy({{ $item->id }})" class="btn 
                            btn-sm btn-danger" onclick="return confirm('Yakin 
                            hapus?')">Delete</button>
                                                    </tr>
                        @empty
                            </td>
                            <div class="alert alert danger">
                                Data Belum Tersedia
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $dataJenisBuku->links() }}
            </div>
        </div>
    </div>
</div>