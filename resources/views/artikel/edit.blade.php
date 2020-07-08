@extends('layouts.master')

@section('content')
    <h1>Edit Artikel</h1>
<form action="{{url('/artikel/'.$artikel->id_artikel)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group mx-2">
    <label for="judul">Judul</label>
    <input name="judul" type="text" class="form-control" id="judul" value="{{$artikel->judul}}">
    </div>
    <div class="form-group mx-2">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" cols="20" rows="8" class="form-control">{{$artikel->isi}}</textarea>
    </div>
    <div class="form-group mx-2">
            <label for="judul">Tags</label>
            <input type="text" name="tag" class="form-control" id="tag" value="{{$artikel->tag}}">
    </div>
    <a class="btn btn-danger" href="/artikel/{{$artikel->id_artikel}}">Back</a>
    <button type="submit" class="btn btn-success mx-2">Update</button>
</form>
    
@endsection