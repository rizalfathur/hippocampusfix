@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">MANAGEMEN USER &nbsp; </h5>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>                  
                        <th scope="col">Action</th>                  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                        <tr>
                        <th scope="row">{{$u->id}}</th>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->role}}</td>
                        <td><a href="{{ url('edit_user/'. $u->id)}}" class="download" style=""><h7>Edit</h7> </a>
                            <form action="{{ url('/deleteUser/'. $u->id) }}" method="post" class="d-inline ml-2" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
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