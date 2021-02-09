@extends('template.second')

@section('content')
    <table class="table table-bordered table-dark container mt-5">
        <thead>
        <tr>
            <th scope="col">Lien</th>
            <th scope="col">Route</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($navbar as $item)
        <tr>
            <td>{{$item ->lien}}</td>
            <td>{{$item ->route}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

  <form class="container mt-5" action="/nav-store" method="POST">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Lien</label>
      <input type="text" name="lien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Route</label>
      <input type="text" name="route" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection