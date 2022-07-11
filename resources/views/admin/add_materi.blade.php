@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">TAMBAH MATERI &nbsp;</h5>
                <form method="POST" action="/materiAdd">
                    @csrf
                    <div class="form-group" style>
                        <label for="name">Nama</label>
                        <input name="nama" type="text" class="form-control" id="name" placeholder="Judul" require>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <input name="kategori" type="text" class="form-control" id="Kategori" placeholder="Tahun" require>
                    </div>
                    <div class="form-group">
                        <label for="tahun">tahun</label>
                        <input name="tahun" type="text" class="form-control" id="tahun" placeholder="Tahun" require>
                    </div>
                    <div class="form-group">
                        <label for="url">url</label>
                        <input name="url" type="text" class="form-control" id="url" placeholder="URL" require>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection