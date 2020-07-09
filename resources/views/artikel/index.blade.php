@extends('layouts.master')
@section('content')
<div class="card-body ">
    <table class="table">
      <thead>
        <tr>
          <th style="">ID</th>
          <th style="">JUDUL</th>
          <th style="">ISI</th>
          <th style="">SLUG</th>
          <th style="">TAG</th>
          <th style="">AUTHOR</th>

          <th style="">ACTION</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($artikels as $data)
        <tr>
            <td>{{$data->id_artikel}}</td>
            <td>{{$data->judul}}</td>
            <td>{{$data->isi}}</td>
            <td>{{$data->slug}}</td>
            <td>{{$data->tag}}</td>
            <td>{{$data->user->name}}</td>
            <td>
              <a class="btn btn-info" href="/artikel/{{$data->id_artikel}}">Detail</a>

            </td>


        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-primary" href="/artikel/create">Create Artikel</a>

  </div>

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
