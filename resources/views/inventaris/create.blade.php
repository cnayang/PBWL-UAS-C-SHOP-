@extends('layouts.app')

@section('content')
<h2>Add Inventaris</h2>

<form action="{{ url('inventaris') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama Produk</label>
        <select name="inv_id_produk">
            @foreach($produk as $p)
            <option value="{{ $p->produk_id }}">{{ $p->produk_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">jumlah</label>
        <input type="text" name="jumlah" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">tgl_penyegaran_terakhir</label>
        <input type="text" name="tgl_penyegaran_terakhir" id="" class="form-control">
    </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection