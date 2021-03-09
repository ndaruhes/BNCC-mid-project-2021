@extends('app')
@section('title', 'Daftar Buku - PT. Mentol')

@section('content')
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Books</li>
        </ol>
    </nav>

    @include('books.create')
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis Buku</th>
                    <th scope="col">Jumlah Halaman</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->judul_buku }}</td>
                        <td>{{ $book->penulis_buku }}</td>
                        <td>{{ $book->jumlah_halaman_buku }}</td>
                        <td>{{ $book->tahun_terbit_buku }}</td>
                        <td>
                            <a href="{{route('editBook', $book->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" data-uri="{{route('deleteBook', $book->id)}}" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection