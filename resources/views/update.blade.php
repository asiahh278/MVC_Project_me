@extends('layouts')
@section('main')

<h1 class="text-center p-1" style="margin-top: 200px; font-family: @font-face;"> Tambah Data Motor</h1>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf 
                            @method('PUT')
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Photo Motor</label>
                              <img class="img-preview img-fluid">
                              <input type="file" name="foto" onchange="readImages(event)" class="form-control shadow-sm @error('foto') is-invalid @enderror" id="image" value="">
                              <img id='output' style="width: 100px;">
                              @error('foto')
                              <div class="invalid-feedback">
                                  {{ $message}}
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title Motor</label>
                                <input type="text" name="author" class="form-control shadow-sm @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary shadow-sm">Submit</button>
                            <a href="/adminpage" class="btn btn-danger shadow-sm">Back</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection






