@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">EDIT USER &nbsp;</h5>
                <form method="POST" action="/edit_video/update">
                    @csrf
                    <div class="form-group">
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$video->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Judul</label>
                        <input name="judul" type="text" class="form-control" id="judul" value="{{$video->judul}}" require>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input name="description" type="text" class="form-control" id="description" value="{{$video->description}}" require>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input name="url" type="text" class="form-control" id="url" value="{{$video->url}}" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection