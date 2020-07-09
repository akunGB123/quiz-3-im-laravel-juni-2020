@extends('layouts.master')

@section('content')
<div class="card-body ">
    <table class="table">
      <thead>
        <tr>
          <th style="">ID</th>
          <th style="">NAME</th>
          <th style="">EMAIL</th>
          <th style="">ACTION</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($users as $data)
        <tr>
            <td>{{$data->id_user}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>

            <td>
              <a class="btn btn-info" href="/user/{{$data->id_user}}">Detail</a>

            </td>


        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-primary" href="/user/create">Create User</a>

  </div>
@endsection
