@extends('layouts.app')

@section('title', 'Video Title')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4 mb-5">
            <div class="col-md-8">
                <h5 class="text-muted mb-4" style="opacity: 70%">PEMBAHASAN &nbsp; | Video </h5>
                <div class="row">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/jGnDGKzilZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 mt-4">
                        <h5>Try Out UKMPPD 1.0</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12" id="vid_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sunt exercitationem quos possimus debitis, voluptatem consectetur dicta labore dolorem quis odio suscipit alias at amet maxime cupiditate, blanditiis, ullam harum?</div>
                </div>
            </div>
    </div>
</div>


@endsection