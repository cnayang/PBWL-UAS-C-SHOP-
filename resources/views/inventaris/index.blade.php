@extends('layouts.app')
@section('content')
<h2>Inventaris</h2>

<a href="{{ url('/inventaris/create') }}" class="btn btn-primary mb-3 float-end">Input inventaris</a>

<table class="table table-bordered">
    <tr>
        <td>ID Inventaris</td>
        <td>Nama Produk </td>
        <td>Jumlah</td>
        <td>Tanggal Penyegaran Terakhir </td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($inventaris as $i)
    <tr>
        <td>{{ $i->inv_id }}</td>
        <td>{{ $i->produk->produk_nama }}</td>
        <td>{{ $i->jumlah }}</td>
        <td>{{ $i->tgl_penyegaran_terakhir }}</td>
        <td><a href="{{ url('inventaris/edit/' . $i->inv_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('inventaris/' . $i->inv_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection