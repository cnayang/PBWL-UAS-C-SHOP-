@extends('layouts.app')

@section('content')
    <h2>Edit Kategori</h2>

    <form action="{{ url('categories/' . $row->kat_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAME</label>
            <input type="text" name="kat_nama" id="" class="form-control" value="{{ $row->kat_nama }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
