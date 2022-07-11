@extends('layouts.admin_app')

@section('content')
<div class="container">
<div class="row justify-content-center mt-4 mb-4">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8"><h5>ADMIN | KELOLA UJIAN </h5> </div>
                    <div class="col-md-4 mb-2"><a class="float-right" href="{{ url('/show_addUjian') }}" style="background-color: #33cc33; color: white; padding: 10px; font-size: 13px;"> Tambah Ujian +</a></div>
                </div>
                
                <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Jumlah Soal</th>
                        <th scope="col">Tanggal Ujian</th>
                        <th scope="col">Status</th>
                        <th scope="col">URL</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ujian as $uj)
                        <tr>
                        <th scope="row">{{$uj->id}}</th>
                        <td>{{$uj->judul}}</td>
                        <td>{{$uj->waktu}} Menit</td>
                        <td>{{$uj->jumlah_soal}} Soal</td>
                        <td>{{$uj->tanggal_ujian}}</td>
                        <td>{{$uj->status}}</td>
                        <td>{{$uj->url}}</td>
                        <td><a href="{{url('edit_ujian/'.$uj->id) }}" class="download" style=""><i class='bx bxs-edit' ></i></td>
                        <td>
                            <form action="{{ url('/deleteUjian/'. $uj->id) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm"><i class='bx bxs-trash'></i></button>
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

