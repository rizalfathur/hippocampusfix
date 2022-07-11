@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">BANK SOAL <a class="float-right" href="{{url('/show_addBso')}}">TAMBAH +</a></h5> 
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No Nama</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah Soal</th>
                        <th scope="col">Action</th>                     
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $bank_soal as $bso)
                        <tr>
                        <td>{{ $bso->nama }}</td>
                        <td>{{ $bso->tahun }}</td>
                        <td>{{ $bso->jumlah_soal }}</td>
                        <td><a href="{{ $bso->url }}" class="download" style=""><i class='bx bxs-download'></i> &nbsp; <h7>Download</h7> </a>
                            <a href="{{ url('edit_soal/'.$bso->id) }}" class="download mx-1" style=""><h7>Edit</h7> </a>
                            <form action="{{ url('/deleteSoal/'. $bso->id) }}" method="post" class="d-inline ml-2" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
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

</div>



@endsection