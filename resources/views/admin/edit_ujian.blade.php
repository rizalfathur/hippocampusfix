@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">EDIT UJIAN &nbsp;</h5>
                <form method="POST" action="/edit_ujian/update">
                    @csrf
                    <div class="form-group">
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$ujian->id}}">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input name="judul" type="text" class="form-control" id="judul" value="{{$ujian->judul}}" require>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input name="waktu" type="text" class="form-control" id="waktu" value="{{$ujian->waktu}}" require>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_soal">Jumlah Soal</label>
                        <input name="jumlah_soal" type="text" class="form-control" id="jumlah_soal" value="{{$ujian->jumlah_soal}}" require>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_ujian">Tanggal Ujian</label>
                        <input name="tanggal_ujian" type="text" class="form-control" id="tanggal_ujian" value="{{$ujian->tanggal_ujian}}" require>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input name="url" type="text" class="form-control" id="url" value="{{$ujian->url}}" require>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input name="status" type="text" class="form-control" id="status" value="{{$ujian->status}}" require>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection