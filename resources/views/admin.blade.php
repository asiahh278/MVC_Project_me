{{-- yang hanya bisa dilihat admin --}}


{{-- <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>adminpage - Mubarok Motor</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
<body>
<div class="container">
<h3 class="text-center text-danger"><b>Database Mubarok Motor</b></h3>
<a href="/addmotor" class="btn btn-outline-success">Add New Post</a>
<div class="row">
  @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{ $message }}
  </div>
  @endif

<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Foto</th>
    <th scope="col">Title</th>
    <th scope="col">Action</th>
    <th scope="col">Update at</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($motor as $row)
    <tr>
     <th scope="row">{{ $row->id }}</th>
     <td>{{ $row->foto }}</td>
     <td>{{ $row->title }}</td>
     <td>{{ $row->update_at->diffForHumans() }}</td>
     <td>
      <button type="button" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-danger">Delete</button>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html> --}}

@extends('layouts')
@section('main')
<div>
    <div class="container">
        <h1 class="text-center p-1" style="margin-top: 200px; font-family: @font-face;">Tambah data buku</h1>
        <div class="row">
            <div class="card shadow mb-5">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <a href="/addmotor" class="btn btn-success shadow-sm mt-mb-3">Add Data +</a>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3 shadow-sm" role="alert">
                                    {{ $message}}
                                </div>
                                @endif
                                <th scope="col">No.</th>
                                <th scope="col">Photo Motor</th>
                                <th scope="col">Title Motor</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no= 1;
                            @endphp
                            @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>
                                    <img src="{{asset('fotomotor/'.$row->foto) }}" class="img-fluid" alt=""
                                        style="width: 80px;">
                                </td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="/viewdata/{{ $row->id }}" class="btn btn-warning m-1">Edit</button>
                                        <a href="/delete/{{ $row->id }}" class="btn btn-danger m-1">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $data->links() }}
                        <a href="/adminpage" class="btn btn-danger me-auto">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

