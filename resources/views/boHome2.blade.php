@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Icone</th>
        <th scope="col">Paragraphe</th>
        <th scope="col">Supprimer</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($home2 as $item)
      <tr>
        <td>{{$item ->icone}}</td>
        <td>{{$item ->paragraph}}</td>
        <td>
          <form action="/delete-home2/{{$item->id}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
        <td><a href="/homeLi2-show/{{$item->id}}" class="btn btn-success">Show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <form class="container mt-5" action="/home2-store" method="POST">
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