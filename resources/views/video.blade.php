@extends('layouts.app')

@section('title', 'Video')
@section('content')
<div class="container">
<div class="row justify-content-center mt-4 mb-5">
            <div class="col-md-8">
                <h5 class="text-muted mb-4" style="opacity: 70%">PEMBAHASAN &nbsp; | Video </h5>
                @foreach($video as $vid)
                <div class="row">
                <iframe width="100%" height="315" src="{{ $vid->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 mt-4">
                        <h5>{{$vid->judul}}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12" id="vid_desc">{{ $vid->description }}</div>
                </div> <br> <hr>
                @endforeach
            </div>
    </div>
</div>


@endsection