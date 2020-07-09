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
    <div class="form-group mx-2">
        <label for="id_user">User</label>
        <select name="id_user" id="id_user" class="form-control">
            @foreach ($users as $user)
                <option value="{{$user->id_user}}">{{$user->name}}</option>
            @endforeach

        </select>
    </div>
    <a class="btn btn-danger" href="/artikel">Back</a>
    <button type="submit" class="btn btn-primary mx-2">Submit</button>
</form>
@endsection

