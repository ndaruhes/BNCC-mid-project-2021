@extends('app')
@section('title', $book->judul_buku.' - Edit Buku - PT. Mentol')

@section('content')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-dark text-decoration-none">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/books') }}" class="text-dark text-decoration-none">Books</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>

<form action="{{ route('updateBook', $book->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="form-group mb-3">
        <label for="">Judul Buku: </label>
        <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror" value="{{ $book->judul_buku }}">
        @error('judul_buku') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Penulis Buku: </label>
        <input type="text" name="penulis_buku" class="form-control @error('penulis_buku') is-invalid @enderror" value="{{ $book->penulis_buku }}">
        @error('penulis_buku') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Jumlah Halaman: </label>
        <input type="number" name="jumlah_halaman" class="form-control @error('jumlah_halaman') is-invalid @enderror" value="{{ $book->jumlah_halaman_buku }}">
        @error('jumlah_halaman') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Tahun Terbit: </label>
        <input type="number" name="tahun_terbit" class="form-control @error('tahun_terbit') is-invalid @enderror" value="{{ $book->tahun_terbit_buku }}">
        @error('tahun_terbit') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    
    <br>
    <a href="{{ url('/books') }}" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><i class="fas fa-angle-left me-2"></i>Back</a>
    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>
@endsection