@extends('layouts.app')

@section('title', 'Bank Soal')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">BANK SOAL</h5>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah Soal</th>
                        <th scope="col">Action</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $bank_soal as $bso)
                        <tr>
                        <th scope="row">{{ $bso->id }}</th>
                        <td>{{ $bso->nama }}</td>
                        <td>{{ $bso->tahun }}</td>
                        <td>{{ $bso->jumlah_soal }}</td>
                        <td><a href="{{ $bso->url }}" class="download" style=""><i class='bx bxs-download'></i> &nbsp; <h7>Download</h7> </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection