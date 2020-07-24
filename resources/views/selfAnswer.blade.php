@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header bg-transparent mb-0">
          <h3 class="text-center">List Jawaban yang Telah Anda Post</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="text-left thead-dark">
              <th>No</th>
              <th class="col-xl">Jawaban</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              @foreach($answer as $key => $answer)
              <tr class="text-left">
                <td>{{$key+1}}</td>
                <td>{{$answer->jawaban}}</td>
                <td><a class="btn btn-primary" href="{{route('selfDetailAnswer', $answer->id_answer)}}">Lihat</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
