@extends('layouts.app')

@section('title', 'Materi')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">PEMBAHASAN &nbsp; | Materi </h5>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Action</th>                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($materi as $mat)
                        <tr>
                        <th scope="row">{{ $mat->id }}</th>
                        <td>{{ $mat->nama}}</td>
                        <td>{{$mat->kategori}}</td>
                        <td>{{$mat->tahun}}</td>
                        <td><a href="{{$mat->url}}" class="download" style=""><i class='bx bxs-download'></i> &nbsp; <h7>Download</h7> </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection