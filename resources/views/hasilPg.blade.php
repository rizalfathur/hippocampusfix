@extends('layouts.app')

@section('title', 'Hasil Ujian')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 ">
            <h5 class="text-muted" style="opacity: 70%">HASIL UJIAN &nbsp; | Try Out 1.0 </h5><hr>
            <div class="row">
                <div class="col-md-2">
                    <h6>Try Out 1.0</h6>
                </div>
                <div class="col-md-2">
                    <h6>Try Out 2.0</h6>
                </div>
            </div>
            <div class="row">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Try Out Ver.</th>
      <th scope="col">Benar</th>
      <th scope="col">Salah</th>
      <th scope="col">Skor</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($user as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{$user->name}}</td>
      <td>Try Out 1.0</td>
      <td>83</td>
      <td>67</td>
      <td>55,33</td>
    </tr>
    @endforeach
    <tr>
      <th scope="row">2</th>
      <td>Jacob Thornton</td>
      <td>Try Out 1.0</td>
      <td>80</td>
      <td>70</td>
      <td>53,33</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>Try Out 1.0</td>
      <td>75</td>
      <td>75</td>
      <td>50,00</td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>

</div>


@endsection