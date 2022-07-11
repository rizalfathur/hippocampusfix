@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">EDIT MATERI &nbsp;</h5>
                <form method="POST" action="/edit_materi/update">
                    @csrf
                    <div class="form-group">
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$materi->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="nama" type="text" class="form-control" id="name" value="{{$materi->nama}}" require>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <input name="kategori" type="text" class="form-control" id="Kategori" value="{{$materi->kategori}}" require>
                    </div>
                    <div class="form-group">
                        <label for="tahun">tahun</label>
                        <input name="tahun" type="text" class="form-control" id="tahun" value="{{$materi->tahun}}" require>
                    </div>
                    <div class="form-group">
                        <label for="url">url</label>
                        <input name="url" type="text" class="form-control" id="url" value="{{$materi->url}}" require>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection