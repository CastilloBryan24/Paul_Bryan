@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Icone</th>
        <th scope="col">Paragraphe</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($home1 as $item)
      <tr>
        <td>{{$item ->icone}}</td>
        <td>{{$item ->paragraph}}</td>
        <td>
          <form action="" method="post"></form>
        </td>
        <td>
          <form action="/delete-home1/{{$item->id}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <form class="container mt-5" action="/home1-store" method="POST">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Icone</label>
      <input type="text" name="icone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Paragraphe</label>
      <input type="text" name="paragraph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection