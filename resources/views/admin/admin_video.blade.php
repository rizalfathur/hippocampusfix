@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4 mb-5">
            <div class="col-md-8">
                <h5 class="text-muted mb-4" style="opacity: 70%">ADMIN &nbsp; | Video   <a class="float-right" href="{{url('show_addVideo')}}"> TAMBAH + </a></h5>
                <!-- 
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
                    <form action="{{ url('/deleteVideo/'. $vid->id) }}" method="post" class="d-inline ml-2 mt-2 mb-0" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                </div><hr>
                @endforeach -->

                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">URL</th>                  
                        <th scope="col">ACTION</th>                  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($video as $vid)
                        <tr>
                        <th scope="row">{{$vid->id}}</th>
                        <td>{{$vid->judul}}</td>
                        <td>{{$vid->description}}</td>
                        <td>{{$vid->url}}</td>
                        <td>
                        <td><a href="{{ url('edit_video/'. $vid->id)}}" class="download" style=""><h7>Edit</h7> </a>
                            <form action="{{ url('/deleteVideo/'. $vid->id) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>


@endsection