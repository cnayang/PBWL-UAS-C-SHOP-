@extends('layouts.app')

@section('content')
    <h2>Tambah Kategori</h2>

    <form action="{{ url('categories') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAME</label>
            <input type="text" name="kat_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
