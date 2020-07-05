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

        </tr> 
      </thead>
      <tbody>
        @foreach ($artikels as $data)
        <tr>
            <td>{{$data->id_artikel}}</td>
            <td>{{$data->judul}}</td>
            <td>{{$data->slug}}</td>
            <td>{{$data->tag}}</td>
            <td>{{$data->id_user}}</td>

            
            
        </tr>
        @endforeach
      </tbody>
    </table>
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