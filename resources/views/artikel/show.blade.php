@extends('layouts.master')

@section('content')

    <div class="form-group mx-2">
    <h1>Detail Artikel</h1>
    <label for="judul">Judul</label>
    <input name="judul" type="text" class="form-control" id="judul" value="{{$artikel->judul}}" readonly> 
    </div>
    <div class="form-group mx-2">
            <label for="isi">Isi</label>
    <textarea name="isi" id="isi" cols="20" rows="8" class="form-control" readonly>{{$artikel->isi}}
    </textarea>
    </div>
    <div class="form-group mx-2">
            <label for="judul">Tags</label>
            <input type="text" name="tag" class="form-control" id="tag" value="{{$artikel->tag}}" readonly>
    </div>
    <a class="btn btn-secondary" href="/artikel">Back</a>
    <a class="btn btn-warning" href="/artikel/{{$artikel->id_artikel}}/edit">Edit</a>
    
    <form action="{{url('/artikel/'.$artikel->id_artikel)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
@endsection