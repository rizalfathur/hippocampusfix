@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="container">
<div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h5>UTAMA</h5>
                <div class="row mt-4 mb-3">
                    <div class="col-md-12">
                        <div class="row" id="utama">
                            <div class="col-md-8 mt-3 ml-4">
                            <h5 class="mt-4 ml-2">Try Out UKMPPD 2.0</h5>    
                            <p class="mt-4">Sebentar lagi UKMPPD akan kita hadapi 
                                            Maka untuk mempersiapkan hal itu
                                            Kami mengadakan <br>
                                            <b>Try Out atau Ujian 2.0 pada Minggu, 12 Juni 2022. </b> <br><br>
                                            Jangan lewatkan kesempatan ini. Persiapkan diri anda! 
                            </p> <br>
                            <a href="{{ url('/ujian') }}">
                            <button type="button" class="btn btn-primary btn-sm mb-5" style="width: 150px">More &nbsp;></button>
                            </a>
                            </div>
                            
                            <div class="col-md-2 mt-5 ml-3 mb-5"><i class='bx bx-book-open' id="book_icons"></i></div>
                        </div>
                        
                    </div>
                </div><br><hr>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h5>UJIAN</h5>
                <div class="row mt-4">
                    <div class="col-md-5">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('ujian') }}"><i class='bx bx-book-open' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Ujian</div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('hasilPg') }}"><i class='bx bxs-bookmarks' id="book_icon" ></i></a></div>
                            <div class="card-title mx-auto">Hasil Ujian</div>
                        </div>
                    </div>
                </div><hr>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h5>PEMBAHASAN</h5>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href=" {{ url('materi') }}"><i class='bx bxs-book-content' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Materi</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('video') }}"><i class='bx bx-play-circle' id="book_icon"></i></i></a></div>
                            <div class="card-title mx-auto">Video</div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href=" {{ url('bso') }}"><i class='bx bxs-folder-open' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Bank Soal</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
