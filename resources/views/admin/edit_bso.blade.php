@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">EDIT SOAL &nbsp;</h5>
                <form method="POST" action="/edit_soal/update">
                    @csrf
                    <div class="form-group">
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$bank_soal->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="nama" type="text" class="form-control" id="name" value="{{$bank_soal->nama}}" require>
                    </div>
                    <div class="form-group">
                        <label for="tahun">tahun</label>
                        <input name="tahun" type="text" class="form-control" id="tahun" value="{{$bank_soal->tahun}}" require>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_soal">jumlah_soal</label>
                        <input name="jumlah_soal" type="text" class="form-control" id="jumlah_soal" value="{{$bank_soal->jumlah_soal}}" require>
                    </div>
                    <div class="form-group">
                        <label for="url">url</label>
                        <input name="url" type="text" class="form-control" id="url" value="{{$bank_soal->url}}" require>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection