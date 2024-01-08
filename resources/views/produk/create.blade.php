@extends('layouts.app')

@section('content')
<h2>Add Produk</h2>

<form action="{{ url('produk') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama Produk</label>
        <input type="text" name="produk_nama" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Deskripsi</label>
        <input type="text" name="produk_deskripsi" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Harga</label>
        <input type="text" name="produk_harga" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Kategori</label>
        <select name="produk_id_kat">
            @foreach($category as $c)
            <option value="{{ $c->kat_id }}">{{ $c->kat_nama }}</option>
            @endforeach
        </select>
    </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection