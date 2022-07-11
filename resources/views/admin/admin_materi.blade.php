@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">PEMBAHASAN &nbsp; | Materi <a class="float-right" href="{{ url('/show_addMateri')}}">TAMBAH +</a></h5>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tahun</th>
                        <th scope="col" class="text-center">Action</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materi as $mat)
                        <tr>
                        <th scope="row">{{$mat->id}}</th>
                        <td>{{$mat->nama}}</td>
                        <td>{{$mat->kategori}}</td>
                        <td>{{$mat->tahun}}</td>
                        <td><a href="{{$mat->url}}" class="download" style=""><i class='bx bxs-download'></i> &nbsp; <h7>Download</h7> </a>
                        <td><a href="{{url('edit_materi/'.$mat->id) }}" class="download" style=""><i class='bx bxs-download'></i> &nbsp; <h7>Edit</h7> </a>
                            <form action="{{ url('/deleteMateri/'. $mat->id) }}" method="post" class="d-inline ml-2" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        <!-- <td><a href="{{ url('/deleteMateri/$mat->id') }}" class="download" style=""><i class='bx bxs-download'></i> &nbsp; <h7>DELETE</h7> </a></td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection