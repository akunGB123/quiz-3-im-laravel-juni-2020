@extends('layouts.master')

@section('content')
<form action="{{ url('/artikel') }}" method="post">
    @csrf
    <div class="form-group mx-2">
    <label for="judul">Judul</label>
    <input name="judul" type="text" class="form-control" id="judul">
    </div>
    <div class="form-group mx-2">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" cols="20" rows="8" class="form-control"></textarea>
    </div>
    <div class="form-group mx-2">
            <label for="judul">Tags</label>
            <input type="text" name="tag" class="form-control" id="tag">
    </div>
    <button type="submit" class="btn btn-primary mx-2">Submit</button>
</form>
@endsection