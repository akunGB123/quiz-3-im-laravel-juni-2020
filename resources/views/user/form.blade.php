@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <form action="/user" method="post">
            @csrf
            <div class="form-gorup">
                <label for="name">User Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-gorup">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <input class="btn btn-primary mt-2"  type="submit" value="create user" >
        </form>
    </div>
@endsection
