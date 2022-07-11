@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">TAMBAH SOAL &nbsp;</h5>
                <form method="POST" action="/bsoAdd">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="nama" type="text" class="form-control" id="name" placeholder="Judul" require>
                    </div>
                    <div class="form-group">
                        <label for="tahun">tahun</label>
                        <input name="tahun" type="text" class="form-control" id="tahun" placeholder="Tahun" require>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_soal">Jumlah Soal</label>
                        <input name="jumlah_soal" type="text" class="form-control" id="jumlah_soal" placeholder="Jumlah Soal" require>
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