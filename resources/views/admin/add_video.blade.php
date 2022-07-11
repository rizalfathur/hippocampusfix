@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">TAMBAH VIDEO &nbsp;</h5>
                <form method="POST" action="/videoAdd">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul" require>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <input name="description" type="text" class="form-control" id="description" placeholder="Deskripsi" require>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input name="url" type="text" class="form-control" id="url" placeholder="URL" require>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection