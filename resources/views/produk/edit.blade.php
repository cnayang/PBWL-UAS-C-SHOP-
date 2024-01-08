@extends('layouts.app')

@section('content')
<h2>Edit Produk</h2>

<form action="{{ url('produk/' . $produk->produk_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
        <div class="mb-3">
            <label for="">Nama Produk</label>
            <input type="text" name="produk_nama" id="" class="form-control" value="{{ $produk->produk_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Deskripsi</label>
            <input type="text" name="produk_deskripsi" id="" class="form-control" value="{{ $produk->produk_deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="">Harga</label>
            <input type="text" name="produk_harga" id="" class="form-control" value="{{ $produk->produk_harga }}">
        </div>
        <div class="mb-3">
            <label for="">Kategori</label>
            <select name="produk_id_kat">
                @foreach($category as $c)
                <option value="{{ $c->kat_id }}" {{ $c->cat_id == $produk->produk_id_kat ? 'selected' : '' }}>{{
                    $c->kat_nama }}</option>
                @endforeach
            </select>
            </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection