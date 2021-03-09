<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index()
    {
        $books = Book::get();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|min:5|max:20',
            'penulis_buku' => 'required|min:5|max:20',
            'jumlah_halaman' => 'required',
            'tahun_terbit' => 'required'
        ]);

        // Blog::create($request->all());
        Book::create([
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku,
            'jumlah_halaman_buku' => $request->jumlah_halaman,
            'tahun_terbit_buku' => $request->tahun_terbit
        ]);
        return redirect('/books')->with('status', 'Data Buku Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_buku' => 'required|min:5|max:20',
            'penulis_buku' => 'required|min:5|max:20',
            'jumlah_halaman' => 'required',
            'tahun_terbit' => 'required'
        ]);

        Book::create($request->all());
        return redirect('/books')->with('status', 'Data Buku Berhasil Diubah');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books')->with('status', 'Data Buku Berhasil Dihapus');
    }
}
