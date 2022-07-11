@extends('layouts.app')

@section('title', 'Edit Profile')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4 mb-5">
            <div class="col-md-8">
                <h5 class="text-muted mb-4" style="opacity: 70%">Edit Profile</h5>
                <form method="POST" action="{{route('updateprof')}}" onsubmit="return confirm('Apakah yakin ingin mengedit data ini?')">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" id="exampleInputEmail1" value="{{ $users->name }}" required>
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="name">Name</label>
                        <input type="name" name="role" class="form-control" id="exampleInputEmail1" value="{{ $users->role }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $users->email }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
</div>


@endsection