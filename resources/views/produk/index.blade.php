@extends('layouts.app')
@section('content')
<h2>Produk</h2>

<a href="{{ url('/produk/create') }}" class="btn btn-primary mb-3 float-end">Input Produk</a>

<table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>Nama Produk </td>
        <td>Deskripsi </td>
        <td>Harga </td>
        <td>Kategori </td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($produk as $p)
    <tr>
        <td>{{ $p->produk_id }}</td>
        <td>{{ $p->produk_nama }}</td>
        <td>{{ $p->produk_deskripsi }}</td>
        <td>{{ $p->produk_harga }}</td>
        <td>{{ $p->category->kat_nama }}</td>
        <td><a href="{{ url('produk/edit/' . $p->produk_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('produk/' . $p->produk_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection