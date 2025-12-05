@extends('layout')

@section('content')
<h2>Tambah Produk</h2>

<form action="{{ route('produk.store') }}" method="POST">
    @csrf

    <label>Nama Produk</label>
    <input type="text" name="nama" required><br><br>

    <label>Harga</label>
    <input type="number" name="harga" required><br><br>

    <label>Stok</label>
    <input type="number" name="stok" required><br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('produk.index') }}">Batal</a>
</form>
@endsection
