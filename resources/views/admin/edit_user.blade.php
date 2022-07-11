@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted mb-4" style="opacity: 70%">EDIT USER &nbsp;</h5>
                <form method="POST" action="/edit_user/update">
                    @csrf
                    <div class="form-group">
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$users->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{$users->name}}" require>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input name="role" type="text" class="form-control" id="role" value="{{$users->role}}" require>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="text" class="form-control" id="email" value="{{$users->email}}" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>

@endsection