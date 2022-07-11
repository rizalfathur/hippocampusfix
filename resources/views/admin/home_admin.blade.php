@extends('layouts.admin_app')

@section('content')
<div class="container">
<div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h5>ADMIN PAGE</h5><hr>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h5>UJIAN</h5>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('managemen_user')}}"><i class='bx bxs-user' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Manage User</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('admin_ujian') }}"><i class='bx bx-book-open' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Ujian</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('adminhu') }}"><i class='bx bxs-bookmarks' id="book_icon" ></i></a></div>
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
                            <div class="card-body mx-auto"><a href=" {{ url('admin_materi') }}"><i class='bx bxs-book-content' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Materi</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href="{{ url('admin_video') }}"><i class='bx bx-play-circle' id="book_icon"></i></i></a></div>
                            <div class="card-title mx-auto">Video</div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card shadow p-3 mb-5 bg-white rounded" id="card_content">
                            <div class="card-body mx-auto"><a href=" {{ url('admin_bso') }}"><i class='bx bxs-folder-open' id="book_icon"></i></a></div>
                            <div class="card-title mx-auto">Bank Soal</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
