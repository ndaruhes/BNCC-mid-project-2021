<!-- CREATE BOOK -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createBookModal">
    <i class="fas fa-plus mr-2"></i> Tambah Buku
</button>

<div class="modal fade" id="createBookModal" tabindex="-1" aria-labelledby="createBookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createBookModalLabel">Tambah Buku Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('storeBook') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Judul Buku: </label>
                        <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror" value="{{ old('judul_buku') }}">
                        @error('judul_buku') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Penulis Buku: </label>
                        <input type="text" name="penulis_buku" class="form-control @error('penulis_buku') is-invalid @enderror" value="{{ old('penulis_buku') }}">
                        @error('penulis_buku') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Jumlah Halaman: </label>
                        <input type="number" name="jumlah_halaman" class="form-control @error('jumlah_halaman') is-invalid @enderror" value="{{ old('jumlah_halaman') }}">
                        @error('jumlah_halaman') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tahun Terbit: </label>
                        <input type="number" name="tahun_terbit" class="form-control @error('tahun_terbit') is-invalid @enderror" value="{{ old('tahun_terbit') }}">
                        @error('tahun_terbit') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>

                    <br>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>