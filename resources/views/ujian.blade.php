@extends('layouts.app')

@section('title', 'Ujian')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <h5>UJIAN</h5>
                @foreach($ujian as $u)
                    <div class="row mt-4 mb-3">
                        <div class="col-md-12">
                            <div class="row" id="ujian">
                                <div class="col-md-8 mt-3 ml-4">
                                    <h5 class="mt-4 ml-2">{{$u->judul}}</h5>    
                                    <p class="mt-4">Tanggal&nbsp;:&nbsp; {{$u->tanggal_ujian}}<br>
                                                    Waktu&nbsp;:&nbsp; {{$u->waktu}} Menit<br>
                                                    Jumlah Soal&nbsp;:&nbsp; {{$u->jumlah_soal}} Soal
                                    </p><br>
                                    <a href="{{ url('/try_out')}}" class="btn-start" style="color: white; background-color: #33cc33; padding: 10px;"> Mulai ujian</a>
                                </div>
                                <div class="col-md-2 mt-5 ml-3 mb-5"><i class='bx bx-book-open' id="book_icons"></i></div>
                            </div>
                        </div>
                    </div><br><hr>
                @endforeach
            </div>
    </div>

    <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <h5>SUDAH SELESAI</h5>
                @foreach($ujianOg as $uog)
                    <div class="row mt-4 mb-3">
                        <div class="col-md-12">
                            <div class="row" id="hasil_ujian">
                                <div class="col-md-8 mt-3 ml-4">
                                    <h5 class="mt-4 ml-2">{{ $uog-> judul}}</h5>    
                                    <p class="mt-4" id="text_HU">
                                                    Waktu&nbsp;:&nbsp; {{$uog->waktu}} Menit<br>
                                                    Jumlah Soal&nbsp;:&nbsp; {{$uog->jumlah_soal}} Soal<br>
                                                    Skor&nbsp;:&nbsp;78
                                    </p><br>
                                    <a href="{{ url('/hasilPg')}}" class="btn-more" style="color: white; background-color: #3399ff; padding: 10px; padding-left:30px; padding-right:30px; margin-bottom: 10px;">More</a> <br>
                                </div>
                                <div class="col-md-2 mt-5 ml-3 mb-5"><i class='bx bx-book-open' id="book_iconHU"></i></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>


@endsection

