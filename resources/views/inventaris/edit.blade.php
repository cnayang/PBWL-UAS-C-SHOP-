@extends('layouts.app')

@section('content')
<h2>Edit Inventaris</h2>

<form action="{{ url('inventaris/' . $inventaris->inv_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Nama Produk</label>
        <select name="inv_id_produk">
            @foreach($produk as $p)
            <option value="{{ $p->produk_id }}" {{ $p->produk_id == $inventaris->inv_id_produk ? 'selected' : '' }}>{{
                $p->produk_nama }}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
            <label for="">jumlah</label>
            <input type="text" name="jumlah" id="" class="form-control" value="{{ $inventaris->jumlah }}">
        </div>
        <div class="mb-3">
            <label for="">Tanggal Penyengaran Terakhir</label>
            <input type="text" name="tgl_penyegaran_terakhir" id="" class="form-control" value="{{ $inventaris->tgl_penyegaran_terakhir }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection