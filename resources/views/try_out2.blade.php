@extends('layouts.ujian_app')

@section('title', '{{ $ujian->judul}}')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        @foreach($ujian as $u)
            <div class="col-md-8">
                <h5>{{ $u->judul}}</h5>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-1">2.</div>
                <div class="col-md-11">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis at dolores nesciunt ut animi nobis voluptate doloribus, pariatur veniam aliquam vitae repellendus praesentium ipsum. Dignissimos reprehenderit eius voluptatibus iusto architecto.</div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1"><input type="radio" id="a-btn" value="a"></div>
                <div class="col-md-11"><label for="a-btn">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</label></div>
            </div>
            <div class="row mt-1">
                <div class="col-md-1"><input type="radio" id="a-btn" value="a"></div>
                <div class="col-md-11"><label for="a-btn">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</label></div>
            </div>
            <div class="row mt-1">
                <div class="col-md-1"><input type="radio" id="a-btn" value="a"></div>
                <div class="col-md-11"><label for="a-btn">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</label></div>
            </div>
            <div class="row mt-1">
                <div class="col-md-1"><input type="radio" id="a-btn" value="a"></div>
                <div class="col-md-11"><label for="a-btn">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</label></div>
            </div>
            <div class="row mt-1">
                <div class="col-md-1"><input type="radio" id="a-btn" value="a"></div>
                <div class="col-md-11"><label for="a-btn">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</label></div>
            </div>
            <div class="row mt-5">
                <div class="col-md-7 mt-2">Sisa Waktu : 00.30.01 menit</div>
                <div class="col-md-1"><a href="{{ url('/try_out')}}"><button type="button" class="btn btn-secondary">Back</button></a></div>
                <div class="col-md-1 text-center mt-2">2</div>
                <div class="col-md-1"><button type="button" class="btn btn-secondary">Next</button></div>
                <div class="col-md-2"><a href="{{ url('/hasilPg')}}"><button type="button" class="btn btn-primary" onclick="return confirm('Apakah Kamu yakin ingin menyelesaikan Ujian?')">Submit</button></a></div>
            </div>
        </div>
    </div>
</div>

@endsection

